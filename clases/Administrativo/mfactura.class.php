<?php
      class Factura{
                    public $codigoFactura;
                    public $fechaFactura;
                    public $numeroFactura;
                    public $totalBienesFactura;
                    public $valorTotalFactura;
                    public $codigoCliente;
                    public $codigoEmpleado;
                    function limpiar(){
                                        $this->codigoFactura = null;
                                        $this->fechaFactura=null;
                                        $this->numeroFactura=null;
                                        $this->totalBienesFactura = null;
                                        $this->valorTotalFactura=null;
                                        $this->codigoCliente=null;
                                        $this->codigoEmpleado = null;
                                       

                    }
                    function guardar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from factura where codigoFactura = '$this->codigoFactura'";
                        $r1 = mysqli_query($fun, $p);
                        if(mysqli_fetch_array($r1)){
                                    echo "<script> alert ('El factura ya existe en el Sistema')</script>";
                        }
                        
                        else{
                              $insertar = "insert into factura values('$this->codigoFactura',
                                                                       '$this->fechaFactura',
                                                                       '$this->numeroFactura',
                                                                       '$this->totalBienesFactura',
                                                                       '$this->valorTotalFactura',
                                                                       '$this->codigoCliente',
                                                                       '$this->codigoEmpleado',)";  
                               mysqli_query($fun, $insertar);
                               echo "<script> alert('la factura ya  fue Creada en el Sistema')</script>";

                        }


                    }
                    function modificar(){

                    }
                    function eliminar(){

                    }
                    function consultar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from factura where codigoFactura = '$this->codigoFactura'";
                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_fetch_array($r1)){
                                        $this->codigoFactura= $row['codigoFactura'];
                                        $this->fechaFactura=$row['fechaFactura'];
                                        $this->numeroFactura=$row['numeroFactura'];
                                        $this->totalBienesFactura= $row['totalBienesFactura'];
                                        $this->valorTotalFactura=$row['valorTotalFactura'];
                                        $this->codigoCliente=$row['codigoCliente'];
                                        $this->codigoEmpleado = $row['codigoEmpleado'];
                                       
                                    
                        }

                    }

      }  

?>