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
                <h2 class="d-block bg-info text-white font-italic p-2 " style="text-align:center; background:#28a745 !important">MODULO 2: Diapositivas crer tu cuenta Gmaill</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <main>
                        <!-- Modal gallery -->
                        <section class="">
                            <!-- Section: Images -->
                            <section class="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                            <a href="#" data-target="#exampleModal1" data-toggle="modal">
                                                <img src="../../assets/img/persona0.png" class="w-100" />
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                            <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                                <img src="../../assets/img/persona.jpg" class="heigth 100px w-100 " />
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                            <a href="#" data-target="#exampleModal3" data-toggle="modal">
                                                <img src="../../assets/img/persona2.jpg" class="w-100 h-100px" />
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Section: Images -->

                            <!-- Section: Modals -->
                            <section class="">
                                <!-- Modal 1 -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="ratio ratio-16x9">
                                                 <img class="diapositiva" src="../../assets/img/persona0.png" alt="">
                                            </div>

                                            <div class="text-center py-3">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 2 -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="ratio ratio-16x9">
                                                <img class="diapositiva" src="../../assets/img/persona.jpg" alt="">
                                            </div>

                                            <div class="text-center py-3">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3 -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="ratio ratio-16x9">
                                                <img class="diapositiva" src="../../assets/img/persona2.jpg" alt="">
                                            </div>

                                            <div class="text-center py-3">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Section: Modals -->
                        </section>
                        <!-- Modal gallery -->
                    </main>

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