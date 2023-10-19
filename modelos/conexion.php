<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3306;dbname=4b-aws-egrf-wedding", "soporte3baws", "soporte3baws");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>
