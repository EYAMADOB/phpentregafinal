<?php
session_start();

require_once __DIR__."/../controllers/CursoController.php";
//require_once __DIR__."/../database/conexion.php";

$controller = new CursoController();
$controller->Loadcurso();