<?php
include("../../conexion/conexiones.php");
include("../../clases/Administrativo/mdetalle.class.php");
?>
<?php
$obj = new Detalle();
if($_POST){
    $obj->codigoDetalle = $_POST['codigoDetalle'];
    $obj->itemDetalle = $_POST['itemDetalle'];
    $obj->cantidadSolicitadaDetalle = $_POST['cantidadSolicitadaDetalle'];
    $obj->cantidadRecibidaDetalle  = $_POST['cantidadRecibidaDetalle '];
    $obj->valorTotalDetalle = $_POST['valorTotalDetalle'];
    $obj->descripcionCompraDetalle = $_POST['descripcionCompraDetalle'];
    $obj->codigoFactura = $_POST['codigoFactura'];
    $obj->codigoProducto = $_POST['codigoFactura'];
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
                    <h1>Detalle</h1>
                   <hr>
                    <form name="Detalle" action="" method="POST">
                        <table border="1">
                        <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoDetalle</font></td>                              
                                <td><input type="text" name="codigoDetalle" value="<?php echo $obj->codigoDetalle   ?>" placeholder="codigoDetalle" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">itemDetalle</font></td>                              
                                <td><input type="text" name="itemDetalle" value="<?php echo $obj->itemDetalle   ?>" placeholder="itemDetalle" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">cantidadSolicitadaDetalle</font></td>                              
                                <td><input type="text" name="cantidadSolicitadaDetalle" value="<?php echo $obj->cantidadSolicitadaDetalle ?>" placeholder="Digite cantidadSolicitadaDetalle" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">cantidadRecibidaDetalle</font></td>                              
                                <td><input type="text" name="cantidadRecibidaDetalle" value="<?php echo $obj->cantidadRecibidaDetalle ?>" placeholder="Digite cantidadRecibidaDetalle" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">valorTotalDetalle</font></td>                              
                                <td><input type="text" name="valorTotalDetalle" value="<?php echo $obj->valorTotalDetalle ?>" placeholder="Digite el valorTotalDetalle" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">descripcionCompraDetalle</font></td>                              
                                <td><input type="text" name="descripcionCompraDetalle" value="<?php echo $obj->descripcionCompraDetalle ?>"placeholder="Digite descripcionCompraDetalle" size="40"></td>  
                            </tr>

                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoProducto </font></td>                              
                                <td><input type="text" name="codigoFactura" value="<?php echo $obj->codigoProducto ?>"placeholder="Digite codigoProducto " size="40"></td>  
                            </tr>

                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoProducto</font></td>                              
                                <td><input type="text" name="codigoProducto" value="<?php echo $obj->codigoProducto ?>"placeholder="Digite codigoProducto" size="40"></td>  
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