<?php
      class index{
                    public $id;
                    public $usuario;
                    public $contraseña;
                    

                    function limpiar(){
                                        $this->id = null;;
                                        $this->usuario=null;
                                        $this->contraseña=null;
                                       
                                    
                    }


                    function guardar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from usuarios where id = '$this->id'";
                        $r1 = mysqli_query($fun, $p);
                        if(mysqli_fetch_array($r1)){
                                    echo "<script> alert ('El usuario ya existe en el Sistema')</script>";
                        }
                        else{
                              $insertar = "insert into cliente values('$this->id','$this->usuario','$this->contraseña')";  
                               mysqli_query($fun, $insertar);
                               echo "<script> alert('El usuario fue Creado en el Sistema')</script>";

                        }    
                    }


                    function modificar(){

                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "update cliente 
                                set id = '$this->id', 
                                usuario ='$this->usuario', 
                               contraseña ='$this->contraseña', 
                                where id = '$this->id'";  /* 46  - 51 asigna datos nuevos
                                     , asigna idcliente  -> lo que se inserto en el formulario $this
                                  where  verifica que se cumpla   la condicion
                                     */

                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_query($fun, $p)){
                         
                            echo "<script> alert('El usuario fue Modificado')</script>";
                        }
                        else {
                            echo "Error modificando usuario: " . mysqli_error($fun);
                        }

                    }
                    
                    
                    function eliminar(){

                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = " delete  from usuarios where id ='$this->id'";
                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_query($fun, $p)){
                         
                            echo "<script> alert('El usuario fue eliminado')</script>";
                        }
                        else {
                            echo "Error borrando rclienteecord: " . mysqli_error($fun);
                        }

                    }

                    function consultar(){
                        $c= new Conexion();
                        $fun=$c->conectar();
                        $p = "select * from usuarios where id = '$this->id'";
                        $r1 = mysqli_query($fun, $p);
                        if($row = mysqli_fetch_array($r1)){
                                        $this->id= $row['id'];
                                        $this->usuario=$row['usuario'];
                                        $this->contraseña=$row['contraseña'];
                                      
                                        
                        }

                    }

      }  

?>9