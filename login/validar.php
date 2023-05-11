<?php 
$usuario=$_get['usuario'];
$contraseña=$_get['contraseña'];
session_start['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","login");
$consulta="SELECT*FROM usuarios='$usuario and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../../vistas/administrativo/bienvenida.html");
}else {
?>
<?php
include(index.php);
?>
<h1>error en la autenticacion</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);