<?php
include("../../conexion/conexiones.php");
?>
<html>
    <head>
        <title>
            Reportes
        </title>
    </head>
    
    <body>
        <center>
               <H1>Pedidos</H1>
               <table border="1">
                        <tr>
                            <td bgcolor="#5D6D7E"colspan=4><center>Cliente</center></td>
                        </tr>
                        <tr>
                            <td bgcolor="#ABB2B9 ">Identificacion</td>
                            <td bgcolor="#ABB2B9" >Nombre</td>
                            <td bgcolor="#ABB2B9" >Apellido</td>
                            <td bgcolor="#ABB2B9" >Telefono</td>
                        </tr>
                        <?php
                            $c= new Conexion();
                            $fun=$c->conectar();

                            $p ="select idCliente, nombreCliente, apellidoCliente,
                             telefonoCliente from cliente where idCliente = 3";
                            $rs = mysqli_query($fun,$p);
                            $arre = mysqli_fetch_row($rs);
                        ?>
                        <tr>
                            <td><?php echo $arre[0] ?></td>
                            <td><?php echo $arre[1] ?></td>
                            <td><?php echo $arre[2] ?></td>
                            <td><?php echo $arre[3] ?></td>
                        </tr>
                        
                        <?php
                            
                            $p2 ="select idPedidos, fechaPedidos, horaPedidos 
                             from pedidos where idCliente = '$arre[0]' " ;
                            $rs2 = mysqli_query($fun,$p2);
                            $arre2 = mysqli_fetch_row($rs2);
                            do{
                        ?>
                        <tr>
                            <td bgcolor="#5D6D7E"colspan=4><center>Datos del Pedido</center></td>
                        </tr>                      
                        <tr>
                            <td bgcolor="#ABB2B9 " colspan=2>No Pedido</td>
                            <td bgcolor="#ABB2B9" >Fecha Pedido</td>
                            <td bgcolor="#ABB2B9" >Hora Pedido</td>
                        </tr>
                        
                        <tr>
                            <td colspan=2 ><?php echo $arre2[0] ?></td>
                            <td><?php echo $arre2[1] ?></td>
                            <td><?php echo $arre2[2] ?></td>
                            <?php
                            $pedido = $arre2[0];
                            echo $pedido;
                                ?>
                        </tr>
                       
                        <tr>
                            <td bgcolor="#5D6D7E"colspan=4><center>Detalle</center></td>
                        </tr>
                        <tr>
                            <td bgcolor="#ABB2B9 ">Nombre Producto</td>
                            <td bgcolor="#ABB2B9" >Valor Unitario</td>
                            <td bgcolor="#ABB2B9" >Cantidad</td>
                            <td bgcolor="#ABB2B9" >Valor</td>

                        </tr>
                        <?php
                            
                            $p3="select t1.nombreProductos,t2.valorUnitario,
                             t2.cantidadDetalle, t2.valorDetalle from productos t1, 
                             detalle t2 where t2.idPedidos = $pedido and t1.idProductos = t2.idProductos " ;
                            $rs3 = mysqli_query($fun,$p3);
                            $arre3 = mysqli_fetch_row($rs3);
                            do{
                        ?>
                                               
                        <tr>
                            <td ><?php echo $arre3[0] ?></td>
                            <td><?php echo $arre3[1] ?></td>
                            <td><?php echo $arre3[2] ?></td>
                            <td><?php echo $arre3[3] ?></td>
                            
                        </tr>
                        <?php
                        }while($arre3 = mysqli_fetch_row($rs3));
                      
                            }while($arre2 = mysqli_fetch_row($rs2));
                    
                        ?>
               </table> 
        </center>
    </body>
</html>