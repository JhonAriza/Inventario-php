<?php
      class Productos{
                    public $codigoProducto;
                    public $precioProducto;
                    public $nombreProducto;
                    public $cantidadProducto;
                    public $ivaProducto;
                    public $descripcionProducto;
                    public $ubicacionProducto;
                    public $fechaEntradaProducto;
                    public $codigoProveedor;
                    public $codigoEmpleado;
                    
                   

                    function limpiar(){
                                        $this->$codigoProducto = null;
                                        $this->precioProducto=null;
                                        $this->nombreProducto=null;
                                        $this->cantidadProducto=null;
                                        $this->ivaProducto=null;
                                        $this->descripcionProducto = null;
                                        $this->ubicacionProducto=null;
                                        $this->fechaEntradaProducto=null;
                                        $this->codigoProveedor=null;
                                        $this->codigoEmpleado=null;
                                        
        

                    }
                    function guardar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from productos where codigoproductoProducto = '$this->codigoProducto'";
                        $r1 = mysqli_query($fun, $p);
                        if(mysqli_fetch_array($r1)){
                                    echo "<script> alert ('El producto ya existe en el Sistema')</script>";
                        }
                        
                        else{
                              $insertar = "insert into productos values('$this->codigoProducto',
                                                                        '$this->precioProducto',
                                                                        '$this->nombreProducto',
                                                                        '$this->cantidadProductos',
                                                                           '$this->ivaProducto',
                                                                           '$this->descripcionProducto',
                                                                        '$this->ubicacionProducto',
                                                                        '$this->fechaEntradaProducto',
                                                                        '$this->codigoProveedor',
                                                                           '$this->codigoEmpleado)";  
                               mysqli_query($fun, $insertar);
                               echo "<script> alert('El Producto fue Creado en el Sistema')</script>";

                        }


                    }
                    function modificar(){

                    }
                    function eliminar(){

                    }

                    function consultar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from productos where codigoProducto = '$this->codigoProducto'";
                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_fetch_array($r1)){
                                        $this->codigoProducto= $row['codigoProducto'];
                                        $this->precioProducto=$row['precioProducto'];
                                        $this->nombreProducto=$row['nombreProducto'];
                                        $this->cantidadProductos=$row['cantidadProductos'];
                                        $this->ivaProducto=$row['ivaProducto'];
                                        $this->descripcionProducto= $row['descripcionProducto'];
                                        $this->ubicacionProducto=$row['ubicacionProducto'];
                                        $this->fechaEntradaProducto=$row['fechaEntradaProducto'];
                                        $this->codigoProveedor=$row['codigoProveedor'];
                                        $this->codigoEmpleado=$row['codigoEmpleado'];
                                        
                                    
                        }

                    }

      }  

     
?>













