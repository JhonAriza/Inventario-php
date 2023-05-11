
<?php
include("conexion.php");
?>
<html>
    <head>
        <title>
            Administrador
        </title>
    </head>
    
    <body>
        <center>
               <H1>Clientes </H1>
               <table border="1">
                        <tr>
                            <td>id</td>
                            <td>usuario</td>
                            <td>contraseña</td>
                            
                           
                        </tr>
                        <?php
                            $c= new Conexion();
                            $fun=$c->conectar();
                            $p ="select * from usuarios";
                            $rs = mysqli_query($fun,$p);
                            $arre = mysqli_fetch_row($rs);

                            do{
                        ?>
                        <tr>
                                <td><?php echo $arre[0] ?></td>
                                <td><?php echo $arre[1] ?></td>
                                <td><?php echo $arre[2] ?></td>
                                
                               
                        </tr>
                        <?php
	 					}while($arre = mysqli_fetch_row($rs));
					?>
               </table> 
        </center>


       
    </body>
</html>