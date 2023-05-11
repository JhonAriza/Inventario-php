    <?php 
    require_once "../../conexion/conexiones.php";
    require_once "producto.php";

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Vista producto</title>
</head>
<body>

 <table>
 <th>Id Productos</th>
 <th>Nombre Productos</th>
 <th>Valor Productos</th>
 <th>Cantidad Productos</th>
  <th>Id Proveedor</th>
<?php 



$obj= new Productos(" "," "," "," "," ");

$datos = $obj->listaDatos();


while ($row = $datos->fetch_array()) {

    

    echo '<tr>';
    echo '<td>', $row['idProductos'] ,'</td>' ;
    echo '<td>', $row['nombreProductos'] ,'</td>';
     echo '<td>', $row['valorProductos'] ,'</td>';
      echo '<td>', $row['cantidadProductos'] ,'</td>';
       echo '<td>', $row['idProveedor'] ,'</td>';

   /*echo "<td> <a href='../modelo/modelo_lugar/pre-editar.php?id=$row[id_lugar]'>Editar</a> </td>";*/
   /* echo "<td> <a href='../modelo/modelo_lugar/eliminar.php?id=$row[id_lugar]'>Eliminar</a> </td>";*/

    echo '</tr>';
}


 ?>

</table>

</body>
</html>