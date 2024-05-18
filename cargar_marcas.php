<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "tecniexp_root", "Aio2019Pass", "tecniexp_aio");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Consulta SQL para obtener los nombres de los clientes
$sql = "SELECT marca FROM marca_articulo";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

// Generar las opciones del select
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<option value='" . $fila['marca'] . "'>" . $fila['marca'] . "</option>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
