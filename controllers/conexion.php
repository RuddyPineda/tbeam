<?php

try {
    $conexion = new PDO('mysql:host=localhost; dbname=tbeam', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    // echo "OK";
} catch (Exception $e) {
    die('ERROR ' . $e->getMessage());
}finally{
    $base = null;
}

?>