<?php

//Shortcuts
define('DS', DIRECTORY_SEPARATOR);
define('HOST_NAME', 'http://'. $_SERVER['HTTP_HOST'] . '/');
define('APP_PATH', realpath(dirname(__FILE__)) . DS);
// INCLouds
define('LAYOUTS', 'inc/layouts/');
define('FUNCTION', 'inc/functions/');
define('CSS', 'public/css/');
define('JS', 'public/js/');

require_once 'db.php';