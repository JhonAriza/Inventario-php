<?php 
    class Conexion{

        //SE CONECTA CON LA BASE DE DATOS VENTAS
                    var $Servidor = "localhost";
                    var $Usuario = "root";
                    var $Clave = "";
                    var $base = "";
                    var $con;

                    function conectar(){
                        
                                        $s = $this->Servidor;
                                        $u = $this->Usuario;
                                        $c = $this->Clave;
                                        $db = $this->base;
                                        $con = mysqli_connect($s,$u,$c,$db) or die("Error al Conectarse con el Servidor");
                                        return  $con;    
                    }

    }
    
    $cone = new Conexion();
    if($cone->conectar()){
        echo "<script> alert('conectado')</script>";
    
    }else{
        echo "No Conectado";
        
    }
   