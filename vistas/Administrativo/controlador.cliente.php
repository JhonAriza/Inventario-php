
<?php
include("../../conexion/conexiones.php");
include("../../clases/Administrativo/modelocliente.class.php");
include("boostrap.html")

?>


<?php


$obj = new Cliente ();
if($_POST){
    $obj->codigoCliente = $_POST['codigoCliente'];
    $obj->nombreCliente = $_POST['nombreCliente'];
    $obj->apellidoCliente = $_POST['apellidoCliente'];
    $obj->telefonoCliente = $_POST['telefonoCliente'];
   
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


if(isset($_POST['modifica'])){

    $obj->modificar();
    

}
if(isset($_POST['elimina'])){

    $obj->eliminar();

}
?>
<html>
    <head>
        <title>Administrativo</title>
    </head>
    <body>
           <center>
                    <h1>Cliente</h1>
                   <hr>
                    <form name="cliente" action="" method="POST">
                        <table border="1">
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">Código</font></td>                              
                            <td><input class="form-control" type="text" name="codigoCliente" value="<?php echo $obj->codigoCliente ?>" placeholder="Digite el Documento" size="40"></td>  
                            </tr>
                         
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">Nombre</font></td>                              
                                <td><input class="form-control" type="text" name="nombreCliente" value="<?php echo $obj->nombreCliente ?>" placeholder="Digite el Tipo de Documento" size="40"></td>  
                            </tr>
                          
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">Apellido</font></td>                              
                                <td><input class="form-control" type="text" name="apellidoCliente" value="<?php echo $obj->apellidoCliente ?>" placeholder="Digite el Nombre del Cliente" size="40"></td>  
                            </tr>
                         
                            <tr>
                                <td bgcolor="000000"><font color="FFFFFF" face="arial" size="4">telefono</font></td>                              
                                <td><input class="form-control" type="text" name="telefonoCliente" value="<?php echo $obj->telefonoCliente ?>" placeholder="Digite el Apellido del Cliente" size="40"></td>  
                            </tr>
                           
                            <tr>                              
                        
		<center>
			
            </div>
			</center>   
                                <td colspan="2">
                                    <center>
                                        
                                        <input  class="btn btn-primary" type="submit" name="limpia" value="Nuevo">
                                        <input class="btn btn-primary" type="submit" name="adicionar" value="Guardar">
                                        <input class="btn btn-primary" type="submit" name="buscar" value="Consulta">
                                        <input class="btn btn-primary" type="submit" name="modifica" value="ModificarDesdeControl">
                                        <input class="btn btn-primary" type="submit" name="elimina" value="Eliminar"> <br>

                                        <button  bgcolor="000000">    <a rel="stylesheet" href="clientelista.php" > click para ver clientes</button>

                                    </center>
                                </td>  
                            </tr>
                        </table>
                    </form> 
           </center> 
    </body>
</html>

<?php
$correrPagina = $_SERVER["PHP_SELF"]; /* es una variable súper global que retorna el nombre
 del archivo que actualmente está ejecutando el script. Así que, $_SERVER[“PHP_SELF”] envía los datos del formulario a la misma página, en vez de saltar a una página distinta*/
$maximoDatos = 5;
$paginaNumero = 0;

if(isset($_GET['paginaNumero'])){
   $paginaNumero = $_GET['paginaNumero'];
}
$inicia = $paginaNumero * $maximoDatos;

?>
<?php

if(isset($_POST['consulta']))
{
									
									$c = new Conexion();
									$cone = $c->conectar();	
									$c = "select * from cliente where nombreCliente LIKE 
									'%$obj->nombreCliente %' ";
                                    $limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
									$rs = mysqli_query($cone,$limite);
									$arreglo = mysqli_fetch_row($rs);
									


}else {
									$c = new Conexion();
									$cone = $c->conectar();	
									$c = "select * from cliente ";
                                    $limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
									$rs = mysqli_query($cone,$limite);
									$arreglo = mysqli_fetch_row($rs);
																		



}

?>

<?php
if(isset($_GET['totalArreglo'])){
	$totalArreglo = $_GET['totalArreglo'];
	
}
	else{
		$lista = mysqli_query($cone,$c);
		$totalArreglo = mysqli_num_rows($lista);
	}
$totalPagina = ceil($totalArreglo/$maximoDatos)-1;

?>

<?php
$cargarPagina = "";
if(!empty($_SERVER['QUERY_STRING'])){ /* Consulta una cadena de la base de datos empty(vacio) */
	$parametro1 = explode("&", $_SERVER['QUERY_STRING']); /* Divide la consulta para meterla en un arreglo */
	$nuevoParametro = array();
	foreach($parametro1 as $parametro2){
			if(stristr($parametro2, "paginaNumero")==false && stristr($parametro2, "totalArreglo")==false){ //Compara una cadena dentro de otra cadena
				 array_push($nuevoParametro, $parametro2);
			}
	}
	if(count($nuevoParametro)!=0){
		$cargarPagina = "&". htmlentities(implode("&", $nuevoParametro));
	}
}
$cargarPagina = sprintf("&totalArreglo=%d%s", $totalArreglo, $cargarPagina);


?>

<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="css, php, html">
      <title>Modulo Administrativo</title>
      
	
      
  </head>
  <body>
   <center>
            <h2>clientes</h2>
            
	 
         
		
        
			</center>
			<center>
          <table width="544" border="1" >
                
                	<tr>
                    	<td><b>Codigo<b></td>
                        <td><b>nombrecliente</b></td>
						<td><b>apellidoCliente</b></td>
						<td><b>Teléfonocliente</b></td>
						
						
						
								
                        
                    </tr>
                    <?php
									$c = new Conexion();
									$cone = $c->conectar();	
									$c1 = "select * from cliente ";
                                   	$rs1 = mysqli_query($cone,$limite);
									$arreglo = mysqli_fetch_row($rs1);
					    do{
					?>
					<tr>
						<td><?php echo $arreglo[0] ?></td>
						<td><?php echo $arreglo[1] ?></td>
						<td><?php echo $arreglo[2] ?></td>
                        <td><?php echo $arreglo[3] ?></td>
     								
                        
					</tr>
					<?php
	 					}while($arreglo = mysqli_fetch_row($rs1))
					?>
                </table>                    
                <br>
                <h5><?php printf("Total de Registros Encontrados %d", $totalArreglo) ?></h5>
                <br>
                <br>
                <hr>
                <table border=1>
                         	
                
                <tr>
                <td><?php  
                    if($paginaNumero > 0){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina,0,$cargarPagina) ?>" id="paginador"> < </a> <?php }?></td>
                <td><?php  
                    if($paginaNumero > 0){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, max(0,$paginaNumero-1),$cargarPagina) ?>" id="paginador" > << </a> <?php }?></td>
            <td><?php 
                    if($paginaNumero < $totalPagina ){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, min($totalPagina,$paginaNumero+1),$cargarPagina) ?>" id="paginador"> >> </a> <?php }?></td>
            <td><?php 
                    if($paginaNumero < $totalPagina ){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, $totalPagina,$cargarPagina) ?>" id="paginador"> ></a> <?php } ?></td>
            
                </tr>
				</table>
				</center>
          
		
		  
		  </table>

      </section>
	 
  </body>
</html>