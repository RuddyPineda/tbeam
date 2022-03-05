<?php
$db_host = "localhost";
$db_usuario = "root";
$db_pass = "";
$db_nombre = "tbeam";

$conexion = mysqli_connect($db_host,$db_usuario,$db_pass);
if (mysqli_connect_error()) {
    echo "Error al conectar con la base de datos";
    exit();
}
mysqli_select_db($conexion,$db_nombre);
mysqli_set_charset($conexion,"utf8");
$qry="SELECT * FROM users";
$result = mysqli_query($conexion,$qry);
while($rowUser = mysqli_fetch_all($result)) {
    print_r($rowUser);
}

?>