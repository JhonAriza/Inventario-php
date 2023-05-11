<?php
include("../../conexion/conexiones.php");
?>
<center>
               <H1>detalle</H1>
               <table border="1">
                        <tr>
                            <td>codigoDetalle </td>
                            <td>itemDetalle </td>
                            <td>cantidadSolicitadaDetalle </td>
                            <td>cantidadRecibidaDetalle</td>
                            <td>valorTotalDetalle</td>
                            <td>descripcionCompraDetallee </td>
                            <td>codigoFactura </td>
                            <td>codigoProducto </td>
                        
                        </tr>
                        <?php
                            $c= new Conexion();
                            $fun=$c->conectar();
                            $p ="select * from detalle";
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
                        </tr>
                        <?php
	 					}while($arre = mysqli_fetch_row($rs));
					?>
               </table> 
        </center>