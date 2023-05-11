<?php
include("../../conexion/conexiones.php");
?>
<center>
               <H1>facturas</H1>
               <table border="1">
                        <tr>
                            <td>codigoFactura </td>
                            <td>fechaFactura </td>
                            <td>numeroFactura </td>
                            <td>totalbienesFactura </td>
                            <td>valorTotalFactura </td>
                            <td>codigoCliente </td>
                            <td>codigoEmpleado  </td>
                        
                        </tr>
                        <?php
                            $c= new Conexion();
                            $fun=$c->conectar();
                            $p ="select * from factura";
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
                               
                              
                        </tr>
                        <?php
	 					}while($arre = mysqli_fetch_row($rs));
					?>
               </table> 
        </center>