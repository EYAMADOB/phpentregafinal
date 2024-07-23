<?php
class CursoController{
public function Loadcurso(){
        include __DIR__."/../views/curso.php";
    }
public function curso(){
    header(location:curso.php);
}
}    