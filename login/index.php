
<?php
include("conexion.php");
include("../clases/Administrativo/mformulario.class.php");
include("../vistas/Administrativo/boostrap.html")

?>
<?php
$obj = new index();
if($_POST){
    $obj->id = $_POST['id'];
    $obj->usuario = $_POST['usuario'];
    $obj->contraseña = $_POST['contraseña'];
   
   
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
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Mi primer Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="index.css" th:href="@{index.css}">
  
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="n.png" th:src="@{n.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                <div th:if="${param.error}" class="alert alert-danger" role="alert">
                    usuario y password no validos
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">

                <a  class="form-control" href="registrase.php"> REGISTRARSE </a>
                    Usted ha sido desconectado.
		        </div>
            </div>
        </div>
    </div>
</body>
</html>