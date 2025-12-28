<?php

require_once "./database/Database.php";
require_once "./helpers/functions.php";
require_once "./models/User.php";
require_once "./models/Admin.php";
require_once "./models/Reader.php";
require_once "./models/Book.php";
require_once "./models/Borrow.php";
require_once "./router/Router.php";

$router = new Router();
$router->dispatch();