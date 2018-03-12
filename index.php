<?php

//Defenimos los separadoares del directorio 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'App' . DS);
define("CERTIFICADOS_TEMP", ROOT . "public" . DS . "certificados" . DS . "temp" . DS);
define("CERTIFICADO_RESULT", ROOT . "public" . DS . "certificados" . DS . "resultado" . DS);
define("QR_CODE", ROOT . "public" . DS . "qr" . DS . "temp" . DS);

try {
    require_once APP_PATH . "Config.php";
    require_once APP_PATH . "Autoload.php";

    Session::init();
    
    $registry = Registry::getInstancia();
    $registry->_request = new Request();
    $registry->_db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHAR);
    $registry->_acl = new ACL();
    Bootstrap::run($registry->_request);
} catch (Exception $ex) {

    echo $ex->getMessage();
}
