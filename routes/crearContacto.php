<?php
//requerimos el controlador
session_start();
require_once __DIR__."/../controllers/HomePageController.php";
require_once __DIR__."/../database/conexion.php";
//instanciamos el controlador
$controller = new HomePageController(new Conexion());
$controller->crearContacto($_POST);
