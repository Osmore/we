<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "imagenes";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion)
{
    die("No hay conexion:".mysqli_connect_error());
}

$nombre= ($_POST="ingUsuario");
$pass = ($_POST ="ingPassword");

$query = mysqli_query($conexion,"SELECT * FROM loging WhERE usuario =.$nombre. and'password'=.$pass.");
$nr = ($query);

if($nr == 1)
{
    //header("location:menu.html")
    echo "Bienvenidos:" .$nombre;
}
else if ($nr == 0)
{

    echo ("usuario no existente");
}
?>