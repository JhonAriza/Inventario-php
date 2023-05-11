<?php
include("../../conexion/conexiones.php");
?>
<center>
               <H1>productos</H1>
               <table border="1">
                        <tr>
                            <td>codigoProducto</td>
                            <td>precioProducto</td>
                            <td>nombreProducto </td>
                            <td>cantidadProducto</td>
                            <td>ivaProducto</td>
                            <td>	descripcionProducto</td>
                            <td>ubicacionProducto</td>
                            <td>fechaEntradaProducto	</td>
                            <td>	codigoProveedor</td>
                            <td>codigoEmpleado</td>
                        </tr>
                        <?php
                            $c= new Conexion();
                            $fun=$c->conectar();
                            $p ="select * from productos";
                            $rs = mysqli_query($fun,$p);
                            $arre = mysqli_fetch_row($rs);

                            do{
                        ?>
                        <tr>
                                <td><?php echo $arre[0] ?></td>
                                <td><?php echo $arre[1] ?></td>
                                <td><?php echo $arre[2] ?></td>
                                <td><?php echo $arre[3] ?></td>
                                <td><?php echo $arre[4] ?></td>
                                <td><?php echo $arre[5] ?></td>
                                <td><?php echo $arre[6] ?></td>
                                <td><?php echo $arre[7] ?></td>
                                <td><?php echo $arre[8] ?></td>
                                <td><?php echo $arre[9] ?></td>
                               
                        </tr>
                        <?php
	 					}while($arre = mysqli_fetch_row($rs));
					?>
               </table> 
        </center>