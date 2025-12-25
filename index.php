<?php

require_once "./database/connection.php";
require_once "./router/Router.php";

$router = new Router();
$router->dispatch();