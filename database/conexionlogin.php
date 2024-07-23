<?php
require_once __DIR__."/../controllers/LoginController.php";
class Conexion {

    public function __construct() 
    {
   $servername="localhost";
   $dbName ="entrenamiento_deportivo";
   $host = "127.0.0.1";
   $username = "root";
   $dbPassword="";
   $dbTable= "users";
   //$this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbName,$username,$dbPassword);
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
}
}
    ?>
