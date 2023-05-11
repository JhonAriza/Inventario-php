<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>

<body>


<div class="container"  style="width:50%;">
<form action="conexion.php" method="POST"> se hace el envio de las variables como se muestran 

<h1>REGISTRO INCO</h1>

<label for="nombre  ">Nombres completo </label>
<input class="form-control" type="nombre" name="nombre"  placeholder="Digite su  Nombre" >
<br>
<label for="apellido" size="4">Apellidos</label>
<input class="form-control"  type="apellido" name="apellido"  placeholder="Digite su apellido"> 
<br>

<label >edad </label><br>
<input type="number"  name="number" ><br>
<label >seleccione </label><br>
<select name="area" class="form-control">
    <option value="c.c">cedula ciudadania</option>
    <option value="c.e">cedula extrangeria</option>
    <option value="pasaporte">pasaporte</option>
    <option value="registro">registro civil</option>
    <br>


</select>
<label >cedula</label><br>
<input type="number"  name="number" >
<br><br>
<label>cargo</label>


<select name="area" class="form-control"><br><br>
    <option value="administrador">administrador </option>
    <option value="surtidor">surtidor</option>
    <option value="bodeguero">bodeguero</option>
    <option value="cajero">cajero</option>
</select>
<br>
<label >CREE SU USUARIO</label><br>
<label for="usuario" size="4">usuario</label>
<input class="form-control"  type="usuario" name="usuario"  placeholder="cree usuario ejemjhon@gmail.com">
<label >contraseña</label><br>
<input type="password"  name="password" ><br>

<input  class="btn btn-primary"  type="submit" value="enviar"  
placeholder="Digite su mensaje "  id="btnsend">

</form>
</div>
