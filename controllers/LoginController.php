<?php
require_once __DIR__."/../database/conexion.php";

class LoginController {
    private $conexionDb;

    public function __construct($conexionDb)
    {
        $this->conexionDb = $conexionDb;
    }



    public function loadView (){
        include __DIR__."/../views/login.php";
    }
    //testear usuarios en la base de datos
    public function testearContacto($dataForm)
        {
            $query = "SELECT * FROM users WHERE email = :email";
            $params = [':email' => $dataForm['email']];
            $usuariosDb = $this->conexionDb->runQuery($query, $params);


            if(count($usuariosDb) < 1) {
                http_response_code(500);
                echo "El usuario no existe";
            }else {
                    if($usuariosDb[0]['password'] == $dataForm['password']){
                    http_response_code(200);
                    echo "Echo el usuario logueado exitosamente";
                    $_SESSION['user'] = $usuariosDb[0];
                    header("Location:curso.php");
                    
                    }
                else {
                    http_response_code(500);
                    echo "La contraseña del usuario es incorrecta";            
                }  
            }
    
          
        }
    }




