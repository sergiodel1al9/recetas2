<?php

require_once('./include/DB.php');
$uri = 'http://localhost/recetas2/';

$server = new SoapServer(null, array('uri' => $uri));

$server->setClass('DB');

$server->handle();