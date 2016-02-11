<?php

require_once('./include/DB.php');

$server = new SoapServer('http://localhost/recetas2/db_wsdl.wsdl');

$server->setClass('DB');
$server->handle();


?>
