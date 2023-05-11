
<?php
include("../../conexion/conexiones.php");
?>

<html>
    <head>
        <title>
            Administrador
        </title>
    </head>
    
    <body>
<center>


//*mostrar la tabla proveedores en una vista en el documento
               <H1>proveedores</H1>
               <table border="1">
                        <tr>
                            <td>codigoProveedor </td>
                            <td>nombreProveedor </td>
                            <td>identificacionProveedor</td>
                            <td>telefonoProveedor</td>
                          
                        
                        </tr>
                        <?php
                            $c= new Conexion();
                            $fun=$c->conectar();
                            $p ="select * from proveedor";
                            $rs = mysqli_query($fun,$p);
                            $arre = mysqli_fetch_row($rs);

                            do{
                        ?>
                        <tr>
                                <td><?php echo $arre[0] ?></td>
                                <td><?php echo $arre[1] ?></td>
                                <td><?php echo $arre[2] ?></td>
                                <td><?php echo $arre[3] ?></td>
                               
                              
                        </tr>
                        <?php
	 					}while($arre = mysqli_fetch_row($rs));
					?>
               </table> 
        </center>



        </body>
</html>