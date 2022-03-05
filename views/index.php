<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/c48814ca9b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.css">

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">TECNOLOGIA BASICA EN ADULTEZ MEDIA</a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Nombre del usuario
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cambiar contraseña</a>
                    <a class="dropdown-item" href="#">cerrar sesion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
</nav>
</header>

<body>
  <main>
    <section>
      <div class="col-md-12">

        <div id="conteItemCarrusel">
          <div class="containerslider" id="itemcarrusel1">
            <div class="tarjetacarrusel" id="tarjeta1">
              <img src="../assets/img/carrusel5.jpg" alt="">
            </div>
            <div class="flechascarrusel">
              <a href="#itemcarrusel3">
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <a href="#itemcarrusel2">
                <i class="fa-solid fa-chevron-right"></i>
              </a>
      
            </div>
          </div>
          <div class="containerslider" id="itemcarrusel2">
            <div class="tarjetacarrusel" id="tarjeta2">
              <img src="../assets/img/gmail1.jpg" alt="">
      
            </div>
            <div class="flechascarrusel">
              <a href="#itemcarrusel1">
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <a href="#itemcarrusel3">
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </div>
          <div class="containerslider" id="itemcarrusel3">
            <div class="tarjetacarrusel" id="tarjeta3">
              <img src="../assets/img/gmail4.jpg" alt="">
      
            </div>
            <div class="flechascarrusel">
              <a href="#itemcarrusel2">
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <a href="#itemcarrusel1">
                <i class="fa-solid fa-chevron-right"></i>
              </a>
      
            </div>
          </div>
        </div>
        <div id="contepuntos">
          <a href="#itemcarrusel1">.</a>
          <a href="#itemcarrusel2">.</a>
          <a href="#itemcarrusel3">.</a>
        </div>
        <h3 id="cursos1">CURSOS</h3>
        <i class="fa-solid fa-circle-book-open"></i>
        <form class="form-inline my-2 my-lg-0 m-5">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!--galeriadecursos-->
      
        <br><hr><br>
        <div class="cursogaleria">
          <div class="foto">
            <img src="../assets/img/tbggmail.png" alt="">
          </div>
          <div class="piecurso">
            <a href="../views/courses.php">conociendo Gmail</a>
            <p class="text-secondary">CONOCIENDO GMAIL</p>
            <p class="text-secondary">Usuario Tbeam</p>
          </div>
        </div>
        <div class="cursogaleria">
          <div class="foto">
            <img src="../assets/img/blog1.png" alt="">
          </div>
          <div class="piecurso">
            <a href="">conociendo facebook</a>
            <p class="text-secondary">CONOCIENDO FACEBOOK</p>
            <p class="text-secondary">Usuario Tbeam</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  
</body>

<footer class=" ">
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

</html>