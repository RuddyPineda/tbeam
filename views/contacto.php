<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles_quienessomos.css">
</head>
<body >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
                    <a class="navbar-brand" href="#" >
                        <img src="assets/img/tb Logotipos.png" alt="" style="height: 60px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="views/iniciarsesion.php" data-toggle="modal" data-target="#loginModal">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           </li>
                        <li class="nav-item">
                            <a href="/views/quienesSomos.php" class="nav-link">Quienes Somos</a>
            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="views/ayudaySoporte.php" >Ayuda y soporte</a>
            
                        </li>
                        
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
        <h2>INFORMACION DE CONTACTO</h2>
    </header>
    <div class="contact">
        <h1>Estamos Aqui para lo que Necesites.</h1>
        <p>nuestro equipo tbeam trabaja con la mejor actitud para brindarte una excelente atencion. ¡No dudes en contactarnos! </p>
   
        <form class="form-contact" action="a" method="post">
            <label for="nombres">Nombres</label>
            <input type="text" class="controls" name="" id="Nombres">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="controls" name="" id="Apellidos">
            <label for="Correo">Correo electronico</label>
            <input type="email" class="controls" name="" id="Correo">
            <label for="cv">adjuntar archivo</label>
            <input type="file" class="files" name="" id="cv"> <br>
             
            <input type="checkbox" name=""> <span>Acepto terminos y condiciones</span> <br>

            <input class="buttons"  type="button" value="enviar">
            
        </form>
    </div>
    <footer style="background:ligth; margin-top:15px">
        <div class="row footer_father" >
        <div id="pie">
            <div id="centro-pie">
                <p>
                    (c) todos los derechos reservados Diseñado por 
                    <a href="gmail: plataformatbeam@gmail.com" class="gmail">equipo Tbeam</a>- 2021
                </p>
            </div>

        </div>
        </div>
    </footer>

</body>
</html>