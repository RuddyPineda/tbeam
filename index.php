<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tbeam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">     
</head>
<body >
    <header>
        
        <nav class="navbar navbar-expand-lg main-nav">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin:auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="#" >
                            <img src="./assets/img/tb0.jpg" alt="" style="height: 40px; border-radius: 50px; margin:auto">
                        </a>                        
                    </li>                    
                    <li class="nav-item active">
                        <a class="nav-link" href="views/iniciarsesion.php" data-toggle="modal" data-target="#loginModal">Ingresar<span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="views/registrarte.php" data-toggle="modal" data-target="#registerModal">Registrarse</a>
                    </li>
        
                    <li class="nav-item">
                        <a href="views/blog.php" class="nav-link">Blog</a>        
                    </li>                
                </ul>
            </div> 
        </nav>
    
    </header>
    <main>
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner mt-1">
                    <div class="carousel-item active slider-home">
                        <img src="./assets/img/slider3.jpg" class="d-block w-100 img-slider"> 
                    </div>
                    <div class="carousel-item slider-home">
                        <img src="./assets/img/slider2.jpg" class="d-block w-100 img-slider" alt="...">
                    </div>
                    <div class="carousel-item slider-home">  
                        <img src="./assets/img/slider1.jpg" class="d-block w-100 img-slider" alt="...">
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
        </section>
        
        <section>
            <div class="container">
                <div class="row div-cards">
                    <div class="card col-md-3" style="width: 18rem;" style="margin: 15px;">
                        <img class="card-img-top" src="./assets/img/tb1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Aprender nunca fue tan facil, con los diferentes cursos que ofrece Tbeam puedes volverte un alumno 4A de los principales medios de comunicacion que ofrece el mundo digital.</p>
                        </div>
                    </div>
                    <div class="card col-md-3" style="width: 18rem;">
                    <iframe style="padding-top: 15px" width="100%" height="auto" src="https://www.youtube.com/embed/2AHXar82iL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  
                        <!-- <img class="card-img-top" src="/assets/img/tb2.jpg" alt="Card image cap"> -->
                        <div class="card-body">
                            <p class="card-text">Gmail se ha vuelto una de las herramientas mas importantes a la hora de enviar nuestros documentos, informacion de suma importancia o manejar nuestras reuniones o demas horarios dentro de nuestra cotidianidad. </p>
                        </div>
                    </div>
                    <div class="card col-md-3" style="width: 18rem;">
                        <img class="card-img-top" src="./assets/img/tb4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Tbeam te ofrece cursos cortos donde aprenderas las principales redes sociales, entre ellas facebook, instagram, Gmail y muchas mas.</p>
                        </div>
                    </div>
                    <div class="card col-md-3" style="width: 18rem;" style="margin: 15px;">
                        <img class="card-img-top" src="./assets/img/face.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Facebook es una red social cuyo objetivo es conectar personas con personas: amigos, familiares, compa??eros de trabajo o gente con aficiones comunes. Es una de las redes sociales con m??s usuarios, con cerca de 2.200 millones de personas registradas..</p>
                        </div>
                    </div>
                    <div class="card col-md-3" style="width: 18rem;">
                        <img class="card-img-top" src="./assets/img/insta.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Instagram es una red social muy popularizada entre j??venes que ofrece la posibilidad de compartir fotograf??as con otros usuarios y poder recibir comentarios o ???me gustas??? (likes) de tus seguidores.</p>
                        </div>
                    </div>
                    <div class="card col-md-3" style="width: 18rem;">
                        <img class="card-img-top" src="./assets/img/google.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Permite realizar reuniones virtuales o presentaciones online, dentro del ??mbito del teletrabajo o la educaci??n por Internet y, tras los confinamientos por el COVID-19, tambi??n entre los usuarios particulares.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <br><br><br>
    <footer style="background:ligth; margin-top:15px">
        <div class="row footer_father" >
        <div id="pie">
            <div id="centro-pie">
                <p>
                    (c) todos los derechos reservados Dise??ado por 
                    <a href="gmail: plataformatbeam@gmail.com" class="gmail">equipo Tbeam</a>- 2021
                </p>
            </div>
    
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </footer>
</body>

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
                    <form action="./controllers/login.php" method="GET">
                        <div class="form-group">
                            <label for="documento"  class="col-form-label">Documento</label>
                            <input type="number" class="form-control" name="documento" required>
                        </div>
                        <div class="form-group">
                            <label for="contrase??a"  class="col-form-label">Contrase??a</label>
                            <input type="password" class="form-control" name="contrase??a" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </form>
               </div>
            <div class="modal-footer">
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
                <form action="./controllers/register.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="nombre"  class="col-form-label">Nombres</label>
                                <input type="text" class="form-control" name="nombres" placeholder="escriba sus Nombres" required>
                            </div>
                            <div class="form-group">
                                <label for="Apellido"  class="col-form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" placeholder="escriba sus Apellidos" required>
                            </div>
                            
                         <div class="form-group">
                                <label for="Edad"  class="col-form-label">Documento</label>
                                <input type="number" class="form-control" name="documento" placeholder="escriba su Documento" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            
                            <div class="form-group">
                                <label for="documento" class="col-form-label">edad</label>
                                <input type="number" class="form-control" name="edad" placeholder="escriba su edad" required>
                            </div>
                            <div class="form-group">
                                <label for="Contrase??a" name="contacto" class="col-form-label">telefono</label>
                                <input type="number" class="form-control" name="telefono" placeholder="escriba su telefono" required>
                            </div>
                            <div class="form-group">
                                <label for="Contrase??a" name="password" class="col-form-label">contrase??a</label>
                                <input type="password" class="form-control" name="password" placeholder="escriba una contrase??a" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="rol" placeholder="" value="usuario">
                            </div>
                            <!--<select class="custom-select" id="inputGroupSelect01">
                                 <option selected>rol</option>
                                 <option value="1">usuario</option>
                                 <option value="2">Administrador</option>
                               </select>-->

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