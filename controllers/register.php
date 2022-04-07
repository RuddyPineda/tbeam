<?php
    session_start();
    $admin = $_SESSION['admin'];
    include("./conexion.php");

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $documento = $_POST['documento'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['password'];
    $rol = $_POST['rol'];
   
    $qryUsers = "INSERT INTO `users`( `nombres`, `apellidos`, `documento`, `edad`, `telefono`, `contrasena`, `rol`) 
    VALUES ('$nombres','$apellidos','$documento',$edad,$telefono,$contraseña,'$rol')";
    $insertUser= $conexion->prepare($qryUsers);
    $insertUser->execute();

    if($admin== "") {
        header("Location: ../index.php");
    } else {
        header("Location: ../dashboard/admin.php");
    }    
?>