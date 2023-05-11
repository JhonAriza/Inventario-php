<?php
      class Proveedor{
                    public $codigoProveedor;
                    public $nombreProveedor;
                    public $identificacionProveedor;
                    public $telefonoProveedor;
                   

                    function limpiar(){
                                        $this->codigoProveedor = null;
                                        $this->nombreProveedor=null;
                                        $this->identificacionProveedor=null;
                                        $this->telefonoProveedor=null;
                                        
        

                    }
                    function guardar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = " select * from proveedor where codigoProveedor = '$this->codigoProveedor'";
                        $r1 = mysqli_query($fun, $p);
                        if(mysqli_fetch_array($r1)){
                                    echo "El proveedor ya existe en el Sistema";
                        }
                        else{
                              $insertar = "insert into proveedor values('$this->codigoProveedor','$this->nombreProveedor',
                              '$this->identificacionProveedor','$this->telefonoProveedor')";  
                               mysqli_query($fun, $insertar);
                               echo "El proveedor fue Creado en el Sistema";

                        }


                    }
                    function modificar(){

                    }
                    function eliminar(){

                    }
                    function consultar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from proveedor where codigoProveedor = '$this->codigoProveedor'";
                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_fetch_array($r1)){
                                        $this->codigoProveedor= $row['codigoProveedor'];
                                        $this->nombreProveedor=$row['nombreProveedor'];
                                        $this->identificacionProveedor=$row['identificacionProveedor'];
                                        $this->telefonoProveedor=$row['telefonoProveedor'];
                                       
                        }
                    }

            }  
           
            














?>