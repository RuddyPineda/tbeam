<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<?php include("../../controllers/conexion.php")?>
<?php include("../../controllers/cuestionario1.php")?>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
      <a class="navbar-brand" href="#">
          <img src="../../assets/img/tb0.jpg" alt="" style="height: 60px; border-radius: 50px">
      </a>
      <a class="navbar-brand" href="#">Tecnología Básica en Adultez Media</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Nombre del usuario
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../../index.php">cerrar sesion <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                      <div class="dropdown-divider"></div>
                  </div>
              </li>
          </ul>
      </div>
    </nav>
  </header>

<main>
  <div class="container">
            <div style="text-align:end">
                <a class="nav-link active" aria-current="page" href="../courses.php"><i class="fa fa-reply" aria-hidden="true"></i>Atras</a>
            </div>
            <div>
                <hr>
                <h2 class="d-block bg-info text-white font-italic p-2 " style="text-align:center">CUESTIONARIO: Conceptos Generales de Gmail.</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                  <section class="m4- p-3">
                    <div id="resultado"></div>
                    <form action="../../controllers/create/insertCuestionary.php" method="POST">
                      <?php 
                        foreach ($arrayrespuestas as $key => $value) {
                          ?>
                            <h3 class="text-info"> <?php echo $key?></h3>
                          <?php
                          foreach ($value as $respuesta) {
                            ?>
                              <input type="radio"
                                name="<?php echo $respuesta['id_pregunta']?>" 
                                value = "<?php echo $respuesta['id'] ?>"
                              >
                                <b><?php echo $respuesta['numeral'].". " ?></b><?php echo $respuesta['detalle'] 
                            ?> 
                              <br/>
                            <?php
                            }                            
                          }
                        ?>
                      <hr>                
                      <input type="submit" value="Enviar">
                
                
                    </form>
                  </section>                   
                </div>
            </div>
        </div>
  </main>
  <br><br><br>
    <footer style="background:ligth; margin-top:15px">
        <div class="row footer_father">
            <div class="col-md-12">
                <p style="text-align: center;">
                    (c) todos los derechos reservados Diseñado por
                    <a href="gmail: plataformatbeam@gmail.com" class="gmail">equipo Tbeam</a>- 2021
                </p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </footer>
</body>