<?php
require_once __DIR__."/../controllers/HomePageController.php";
class Conexion {

    //fucion privada a la conexion para que nos la almacene
    private $pdo;
    // Conexión a la base de datos


// Luego de conectar, selecciona la base de datos



     public function __construct() 
     {
        $servername="localhost";
        $dbName ="entrenamiento_deportivo";
        $host = "127.0.0.1";
        $username = "root";
        $dbPassword="";
        /*$dbTable= "contacto";*/
        $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbName,$username,$dbPassword);
    }

    public function runQuery(string $query,$params = [])
    {
        $smt = $this->pdo->prepare($query);

        foreach($params as $key =>  $value) {           
            $smt->bindParam($key,$value, PDO::PARAM_STR);
        }        
       
        $smt->execute();

        return $smt->fetchAll();
    }
}

        
