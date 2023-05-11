<?php
include("../../conexion/conexiones.php");
include("../../clases/Administrativo/mfactura.class.php");
?>
<?php
$obj = new Factura();
if($_POST){
    $obj->codigoFactura = $_POST['codigoFactura'];
    $obj->fechaFactura = $_POST['fechaFactura'];
    $obj->numeroFactura = $_POST['numeroFactura'];
    $obj->totalBienesFactura= $_POST['totalBienesFactura'];
    $obj->valorTotalFactura= $_POST['valorTotalFactura'];
    $obj->codigoCliente= $_POST['codigoCliente'];
    $obj->codigoEmpleado= $_POST['codigoEmpleado'];
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
                    <h1>factura</h1>
                   <hr>
                    <form name="factura" action="" method="POST">
                        <table border="1">
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">	codigoFactura</font></td>                              
                                <td><input type="text" name="codigoFactura" value="<?php echo $obj->codigoFactura ?>" placeholder="Digite	codigoFactura" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">Tipo Documento</font></td>                              
                                <td><input type="text" name="fechaFactura" value="<?php echo $obj->fechaFactura ?>" placeholder="digite fechaFactura" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">numeroFactura</font></td>                              
                                <td><input type="text" name="numeroFactura" value="<?php echo $obj->numeroFactura ?>" placeholder="Digite numeroFactura" size="40"></td>  
                            </tr>
                           
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">totalbienesFactura</font></td>                              
                                <td><input type="text" name="totalBienesFactura" value="<?php echo $obj->totalBienesFactura ?>" placeholder="Digite totalbienesFactura" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">valorTotalFactura</font></td>                              
                                <td><input type="text" name="valorTotalFactura" value="<?php echo $obj->valorTotalFactura ?>" placeholder="Digite valorTotalFactura" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoCliente</font></td>                              
                                <td><input type="text" name="codigoCliente" value="<?php echo $obj->codigoCliente ?>" placeholder="Digite codigoCliente" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoEmpleado</font></td>                              
                                <td><input type="text" name="codigoEmpleado" value="<?php echo $obj->codigoEmpleado?>" placeholder="Digite codigoEmpleado" size="40"></td>  
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