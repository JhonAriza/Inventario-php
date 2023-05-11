<?php
include("../../conexion/conexiones.php");
include("../../clases/Administrativo/mproducto.class.php");
?>
<?php
$obj = new Productos();
if($_POST){
    $obj->codigoProducto  = $_POST['codigoProducto '];
    $obj->precioProducto = $_POST['precioProducto'];
    $obj->nombreProducto = $_POST['nombreProducto'];
    $obj->cantidadProducto = $_POST['cantidadProducto'];
    $obj->	ivaProducto = $_POST['	ivaProducto'];
    $obj->	descripcionProducto= $_POST['	descripcionProducto'];
    $obj->ubicacionProducto= $_POST['ubicacionProducto'];
    $obj->	fechaEntradaProducto	= $_POST['	fechaEntradaProducto	'];
    $obj->	codigoProveedor= $_POST['	codigoProveedor'];
    $obj->	codigoEmpleado= $_POST['	codigoEmpleado'];
}


if(isset($_POST['limpia'])){

    $obj->limpiar();


}
if(isset($_POST['adicionar'])){

    $obj->guardar();
    

}
if(isset($_POST['buscar'])){

    $obj->consultar();
    

}
?>
<html>
    <head>
        <title>Administrativo</title>
    </head>
    <body>
           <center>
                    <h1>productos</h1>
                   <hr>
                    <form name="productos" action="" method="POST">
                        <table border="1">
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4"> 	codigoProducto </font></td>                              
                                <td><input type="text" name="	codigoProducto " value="<?php echo $obj->	codigoProducto  ?>" placeholder="Digite el idproductos" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">precioProducto</font></td>                              
                                <td><input type="text" name="precioProducto" value="<?php echo $obj->precioProducto ?>" placeholder="Digite precioProducto" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">	nombreProducto</font></td>                              
                                <td><input type="text" name="	nombreProducto" value="<?php echo $obj->valorProductos ?>" placeholder="Digite el	nombreProducto" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">cantidad producto</font></td>                              
                                <td><input type="text" name="cantidadProducto" value="<?php echo $obj->cantidadProductos ?>" placeholder="Digite el cantidadProducto" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">ivaProducto</font></td>                              
                                <td><input type="text" name="ivaProducto" value="<?php echo $obj->ivaProducto ?>" placeholder="Digite ivaProducto" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">descripcionProducto</font></td>                              
                                <td><input type="text" name="descripcionProducto" value="<?php echo $obj->descripcionProducto?>" placeholder="Digite descripcionProducto" size="40"></td>  
                            </tr><tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">ubicacionProducto</font></td>                              
                                <td><input type="text" name="ubicacionProducto" value="<?php echo $obj->ubicacionProducto ?>" placeholder="Digite ubicacionProducto" size="40"></td>  
                            </tr><tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">fechaEntradaProducto</font></td>                              
                                <td><input type="text" name="fechaEntradaProducto" value="<?php echo $obj->fechaEntradaProducto ?>" placeholder="Digite fechaEntradaProducto" size="40"></td>  
                            </tr><tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoProveedor </font></td>                              
                                <td><input type="text" name="codigoProveedor " value="<?php echo $obj->codigoProveedor  ?>" placeholder="Digite codigoProveedor " size="40"></td>  
                            </tr><tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoEmpleado </font></td>                              
                                <td><input type="text" name="codigoEmpleado " value="<?php echo $obj->codigoEmpleado  ?>" placeholder="Digite codigoEmpleado " size="40"></td>  
                            </tr>
                            <tr>                                                           
                                <td colspan="2">
                                    <center>
                                        <input type="submit" name="limpia" value="Nuevo">
                                        <input type="submit" name="adicionar" value="Guardar">
                                        <input type="submit" name="buscar" value="Consulta">
                                        <input type="submit" name="modifica" value="Modificar">
                                        <input type="submit" name="elimina" value="Eliminar">
                                    </center>
                                </td>  
                            </tr>
                        </table>
                    </form> 
           </center> 
    </body>
</html>