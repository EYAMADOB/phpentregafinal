<?php
session_start();
require_once __DIR__."/../controllers/LoginController.php";
require_once __DIR__."/../database/conexion.php";
$controller = new LoginController(new Conexion);
$controller->testearContacto($_POST);
