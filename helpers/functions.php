<?php

function view($page, $data = []){
    extract($data);
    require_once __DIR__ . "/../views/templates/layout.php";
}