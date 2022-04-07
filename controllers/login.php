<?php
    session_start();

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
                $_SESSION['id_cliente'] = $user['id'];
                echo "usuario: autenticado rol usuario"; 
                header("Location: ../views/courses.php");
                die();               
            } else {
                $_SESSION['admin'] = "admin";
                header("Location: ../dashboard/admin.php");
                die();
            }
        } else {
            echo "usuario: credenciales Incorrectas ";
        }
        
    } else {
        echo "usuario no existe";
    }
?>