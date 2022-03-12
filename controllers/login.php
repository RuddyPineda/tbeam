<?php
    include("./conexion.php");
    $documento = $_GET['documento'];
    $contraseña = $_GET['contraseña'];
    $qry="SELECT * FROM users WHERE documento = ?";
    $usuarios = $conexion->prepare($qry);
    $usuarios->execute(array($documento));
    // echo $documento;
    if ($user = $usuarios->fetch(PDO::FETCH_ASSOC)){       
    
        if ($user['documento'] == $documento && $user['contrasena'] == $contraseña) {
            if ($user['rol'] == "usuario") {
                echo "usuario: autenticado rol usuario"; 
                header("Location: ../views/courses.php?auth=true");
                die();               
            } else {
                echo "usuario: autenticado rol administrador";
            }
        } else {
            echo "usuario: credenciales Incorrectas ";
        }
        
    } else {
        echo "usuario no existe";
    }
?>