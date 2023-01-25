<?php

session_start();

require_once 'src/router/Router.php';

$router = new Router();
$router->start();

?>