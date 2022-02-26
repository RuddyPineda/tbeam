<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">     
</head>
<header>
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
                            <a class="nav-link" href="views/iniciarsesion.php" data-toggle="modal" data-target="#loginModal"><i class="fa fa-home" aria-hidden="true" style="background:red"></i>Ingresar <span class="sr-only">(current)</span></a>
                         </li>
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="views/registrarte.php" data-toggle="modal" data-target="#registerModal">Registrarte</a>
                        </li>
      
                        <li class="nav-item">
                            <a href="views/blog.php" class="nav-link">Blog</a>
            
                        </li>
                        
                        <!-- </ul>
                           <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                           </form>
                       </div> -->
                </nav>
            </div>
            
        </div> 
    </div>
</header>
<body >
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col
                     w-100" >
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner mt-1">
                                <div class="carousel-item active slider-home1">
                                    <img src="assets/img/gmail.png" class="d-block w-100 img-slider"> 
                                </div>
                                <div class="carousel-item slider-home2">
                                    <img src="assets/img/BLOG.png" class="d-block w-100 img-slider" alt="...">
                                </div>
                                <div class="carousel-item slider-home3">                    
                                    <img src="assets/img/BLOG.png" class="d-block w-100 img-slider" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
</body>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</footer>

<!-- Modal login-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="text-align:center">
                 <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
            </div>
               <div class="modal-body">
                     <form>
                    <div class="form-group">
                      <label for="usuario" name="usuario" class="col-form-label">Usuario</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                     <label for="contraseña" name="contraseña" class="col-form-label">Contraseña</label>
                     <input type="password" class="form-control" id="recipient-name">
                    </div>
                    </form>
               </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal register-->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Registro de usuario</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
            </div>
                <div class="modal-body">
                 <form action="##">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                             <label for="nombre" name="nombre" class="col-form-label">Nombres</label>
                             <input type="text" class="form-control" id="recipient-name" placeholder="escriba su nombre" required>
                           </div>
                           <div class="form-group">
                             <label for="Apellido" name="Apellido" class="col-form-label">Apellidos</label>
                             <input type="text" class="form-control" id="recipient-name" placeholder="escriba su Apellido" required>
                           </div>
                           <div class="form-group">
                             <label for="Edad" name="Edad" class="col-form-label">Edad</label>
                             <input type="number" class="form-control" id="recipient-name" placeholder="escriba su Edad" required>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                             <label for="Contacto" name="Contacto" class="col-form-label">Contacto</label>
                             <input type="text" class="form-control" id="recipient-name" placeholder="escriba su numero de contacto" required>
                            </div>
                           <div class="form-group">
                             <label for="Contraseña" name="Contraseña" class="col-form-label">Contraseña</label>
                             <input type="text" class="form-control" id="recipient-name" placeholder="escriba su Contraseña" required>
                            </div>
                            <div class="form-group">
                             <label for="Contraseña" name="Contraseña" class="col-form-label">Confirmar contraseña</label>
                             <input type="text" class="form-control" id="recipient-name" placeholder="escriba su contraseña" required>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                    <div class="genero-details">
                              <input type="radio" name="genero" id="punto-1">
                              <input type="radio" name="genero" id="punto-2">
                              <span class="genero-title">genero</span>
                        <div class="categoria">
                            <label for="punto-1">
                              <span class="punto uno"></span>
                              <span class="genero">Mujer</span>
                              <label for="punto-2">
                              <span class="punto dos"></span>
                              <span class="genero">Hombre</span> 
                            </label>
                        </div>
                    </div>
                    
           
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                 </form>

                </div>
          
        </div>
  </div>
</div>
</html>