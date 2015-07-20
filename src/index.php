<?php

use Pizzy\DbPdo;
use Pizzy\Template;

session_start();
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'].'/');
require_once(PATH_ROOT.'config.php');


// $db = new DbPdo();

$template = new Template('home');
$template->setTemplateVars(array(
    'TXT_HELLO_WORLD' => 'Hello, the test worked.'
    ));
$template->display();