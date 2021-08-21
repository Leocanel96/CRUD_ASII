<?php

include '../capaDatos(DB)/conexion.php';
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    if ($nombre != '' && $descripcion != ''){
        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
         } 
         $sql = "INSERT INTO productos(nombre_producto, descripcion_producto)VALUES ('$nombre', '$descripcion')";

         if (mysqli_query($mysqli, $sql)) {
            echo'<script type="text/javascript">
            alert("Datos almacenados correctamente.");
            window.location.href="../capaPresentacion(View)/productos.php";
            </script>';
         } else {
            echo "Error: " . $sql . "" . mysqli_error($mysqli);
         }
         $mysqli->close();
    }
}

if (isset($_POST['editar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id = $_POST['id_producto'];

    if ($nombre != '' && $descripcion != ''){
        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
         } 
         $sql = "UPDATE productos SET nombre_producto = '$nombre', descripcion_producto = '$descripcion' WHERE id_producto = '".$id."'";

         if (mysqli_query($mysqli, $sql)) {
            echo'<script type="text/javascript">
            alert("Datos almacenados correctamente.");
            window.location.href="../capaPresentacion(View)/productos.php";
            </script>';
         } else {
            echo "Error: " . $sql . "" . mysqli_error($mysqli);
         }
         $mysqli->close();
    }
}


if (isset($_POST['eliminar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id = $_POST['id_producto'];

    if ($nombre != '' && $descripcion != ''){
        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
         } 
         $sql = "DELETE FROM productos WHERE `id_producto` = '".$id."'";

         if (mysqli_query($mysqli, $sql)) {
            echo'<script type="text/javascript">
            alert("Datos Eliminados correctamente.");
            window.location.href="../capaPresentacion(View)/productos.php";
            </script>';
         } else {
            echo "Error: " . $sql . "" . mysqli_error($mysqli);
         }
         $mysqli->close();
    }
}

?>