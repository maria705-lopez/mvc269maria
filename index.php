<?php
session_start();
require_once "Lisb/routes.php";
require_once "Lisb/template.php";
require_once "Lisb/connection.php";
if (isset($_GET["controller"]) && isset($_GET["action"])) {
    $controller = $_GET["controller"];
    $action = $_GET["action"];
} else {
    $controller = "home";
    $action = "login";
}

Routes::loadContent($controller, $action);
