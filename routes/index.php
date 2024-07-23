<?php
session_start();
require_once __DIR__."/../controllers/HomePageController.php";
require_once __DIR__."/../database/conexion.php";
require_once __DIR__."/../controllers/CursoController.php";
//require_once __DIR__."/../controllers/LoginController.php";

$controller = new HomePageController(new Conexion());
$controller->index();

