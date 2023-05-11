<?php
      class Detalle{
                    public $codigoDetalle;
                    public $itemDetalle;
                    public $cantidadSolicitadaDetalle;
                    public $cantidadRecibidaDetalle;
                    public $valorTotalDetalle;
                    public $descripcionCompraDetalle;
                    public $codigoFactura;
                    public $codigoProducto;

                    function limpiar(){
                                        $this->codigoDetalle= null;
                                        $this->itemDetalle=null;
                                        $this->cantidadSolicitadaDetalle=null;
                                        $this->cantidadRecibidaDetalle=null;
                                        $this->valorTotalDetalle=null;
                                        $this->descripcionCompraDetalle=null;
                                        $this->codigoFactura=null;
                                        $this->codigoProducto=null;
                                        
        

                    }
                    function guardar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from detalle where codigoDetalle = '$this->codigoDetalle'";
                        $r1 = mysqli_query($fun, $p);
                        if(mysqli_fetch_array($r1)){
                                    echo "<script> alert ('El detalle ya existe en el Sistema')</script>";
                        }
                        
                        else{
                              $insertar = "insert into detalle values('$this->codigoDetalle',
                                                                    '$this->itemDetalle',
                                                                    '$this->cantidadSolicitadaDetalle',
                                                                    '$this->cantidadRecibidaDetalle',
                                                                    '$this->valorTotalDetalle',
                                                                    ' $this->descripcionCompraDetalle',
                                                                    '$this->codigoFactura',
                                                                    ' $this->codigoProducto')";  
                               mysqli_query($fun, $insertar);
                               echo "<script> alert('El detalle fue Creado en el Sistema')</script>";

                        }


                    }
                    function modificar(){

                    }
                    function eliminar(){

                    }
                    function consultar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from detalle where codigoDetalle = '$this->codigoDetalle'";
                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_fetch_array($r1)){
                                        $this->codigoDetalle = $row['codigoDetalle'];
                                        $this->itemDetalle=$row['itemDetalle'];
                                        $this->cantidadSolicitadaDetalle=$row['cantidadSolicitadaDetalle'];
                                        $this->cantidadRecibidaDetalle=$row['cantidadRecibidaDetalle'];
                                        $this->valorTotalDetalle=$row['valorTotalDetalle'];
                                        $this->descripcionCompraDetalle=$row['descripcionCompraDetalle'];
                                        $this->codigoFactur=$row['codigoFactura'];
                                        $this->codigoProducto=$row['codigoProducto'];
                                    
                        }

                    }

      }  

?>