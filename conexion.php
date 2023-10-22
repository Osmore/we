<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}

$nombre = ($_POST="usuario");

$password = ( $_POST="contraseña");

if (isset($_POST='btingresar')) {
   

    $query = ("SELECT * FROM inicio WHERE usuario = '$nombre' AND contraseña = '$password'");
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    $nr = mysqli_num_rows($result);

    if ($nr == 1) {
        header("Location: menu.html");
        echo "Bienvenido: " . $nombre;
        exit(); // Importante: detener la ejecución del script después de redirigir.
    } else if ($nr ==0) {
        echo "Acceso denegado, usuario inexistente.";
    }

}

?>
