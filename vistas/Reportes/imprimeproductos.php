<?php
include("../../conexion/conexiones.php");
?>
<center>
             
                        <tr>
                        <H1>Productos</H1>
               <table border="1">
                        <tr>
                            <td bgcolor="#5D6D7E"colspan=8><center>productos  en el inventario</center></td>
                        </tr>
                        <tr>
                        
                        <td bgcolor="#ABB2B9 ">idProductos</td>
                            <td bgcolor="#ABB2B9" >nombreProductos</td>
                            <td bgcolor="#ABB2B9" >valorProductos</td>
                            <td bgcolor="#ABB2B9" >cantidadProductos</td>
                            <td bgcolor="red "> idProveedor</th>
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
                               
                        </tr>
                        <?php
	 					}while($arre = mysqli_fetch_row($rs));
					?>
               </table> 
        </center>



