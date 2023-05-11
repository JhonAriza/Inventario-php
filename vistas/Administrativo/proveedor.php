<?php
include("../../conexion/conexiones.php");
include("../../clases/Administrativo/mproveedor.class.php");
?>
<?php
$obj = new Proveedor();
if($_POST){
    $obj->	codigoProveedor  = $_POST['	codigoProveedor '];
    $obj->nombreProveedor = $_POST['nombreProveedor'];
    $obj->identificacionProveedor = $_POST['identificacionProveedor'];
    $obj->telefonoProveedor = $_POST['telefonoProveedor'];
    
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
                    <h1>proveedor</h1>
                   <hr>
                    <form name="proveedor " action="" method="POST">
                        <table border="1">
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">codigoProveedor </font></td>                              
                                <td><input type="text" name="codigoProveedor " value="<?php echo $obj->codigoProveedor ?>" placeholder="Digite codigoProveedor " size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">	nombreProveedor</font></td>                              
                                <td><input type="text" name="	nombreProveedor" value="<?php echo $obj->	nombreProveedor ?>" placeholder="Digite 	nombreProveedor" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">identificacionProveedor</font></td>                              
                                <td><input type="text" name="identificacionProveedor" value="<?php echo $obj->identificacionProveedor?>" placeholder="Digite identificacionProveedor" size="40"></td>  
                            </tr>
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">telefono</font></td>                              
                                <td><input type="text" name="telefonoProveedor" value="<?php echo $obj->telefonoProveedor ?>" placeholder="Digite el telefono del Proveedor" size="40"></td>  
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