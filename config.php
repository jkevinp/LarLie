<?php
define('DEFAULT_USER' , 'user');
define('APP_NAME' , 'Larlie');
define('APP_DESC' , 'Buy some wines lah?!');
define('VIEWS_DIR' ,'Views/usergroup/');
define('DEF_VIEW' , VIEWS_DIR.'/default/');
define('DEF_ELE', DEF_VIEW.'elements/');
define('DEF_PANELS', DEF_VIEW.'panels/');
define('HOST', 'http://localhost:8080/');
define('URL' ,HOST.APP_NAME.'/');
define('ASSETS', 'assets/');
define('CSS' ,ASSETS.'css/');
define('JS' , ASSETS.'js/');
define('IMG' , ASSETS.'img/');
define('DB_HOST' ,'localhost');
define('DB_USER' , 'root');
define('DB_PASS', '');
define('DB_NAME', 'wines');
define('PDO_DSN', 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8');
//define('DEBUG' , 'true');
?>