<?php

class HomePageController {
    private $conexionDb;

    public function __construct($conexionDb)
    {
        $this->conexionDb = $conexionDb;
    }



    public function index(){
        include __DIR__."/../views/index.php";
    }
    public function header(){
        include __DIR__."/../views/header.php";
    }


    //crear usuarios en la base de datos

    public function crearContacto($dataForm)
        {
                
               $query = "INSERT INTO `contacto`(nombre,apellido,email) VALUES ('".$dataForm['nombre']."','".$dataForm['apellido']."','".$dataForm['email']."')";    
               $this->conexionDb->runQuery($query);
        
        var_dump($dataForm);
        var_dump($this->conexionDb);
        $_SESSION['form_contacto:index']='Contacto enviado al administrador';
        header("Location:index.php");
    }
}