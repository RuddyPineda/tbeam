<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container-fluid">
    <a class="navbar-brand" href="#">TECNOLOGIA BASICA EN ADULTEZ MEDIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">HOME</a>
        </li>
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
        
        
        </li>
      </ul>
    </div>
  </div>
</nav>


  <head>
    <h1 class=" m-3 p-2 d-block bg-info text-white font-italic">CUESTIONARIO: Como crear tu cuenta Gmail.</h1> <hr>
    <p>Responde las siguientes preguntas:</p>
  </head>
 <section>
   <div id="resultado"></div>
   <form action="cuestform" onsubmit="return verificarRespuestas()">
        <h3 class="text-info">1. ¿cuales son las opciones de pestaña con las que podemos separar nuestro correo electronico?</h3>
        <input type="radio" name="p1" value="a">a. social, seguridad, promociones.<br/>
        <input type="radio" name="p1" value="b">b. bandeja de entrada, seguridad, notificaciones. <br/> 
        <input type="radio" name="p1" value="c">c. principal,social, promociones, notificaciones y foros. <br/>
        <input type="radio" name="p1" value="d">d. principal, social, bandeja de entrada y foros. <br/> <hr>
        
        

        <h3 class="text-info">2. ¿en que opcion de ajustes podremos cambiar la aparencia de nuestro Gmail en cuanto a fondo, colores o tematicas?</h3>
        <input type="radio" name="p2" value="a">a. en la opcion de ajustes llamada temas <br/>
        <input type="radio" name="p2" value="b">b. en la opcion de ajustes llamada confirmacion de acciones <br/> 
        <input type="radio" name="p2" value="c">c. en la opcion de ajustes llamada accion de notificaciones<br/>
        <input type="radio" name="p2" value="d">d. en la opcion de ajustes llamado ajustes automaticos<br/> <hr>

        <h3 class="text-info">3. ¿segun lo aprendido en contenido, se puede agregar una firma automatica en Gmail sea propia o logo?
            ?</h3>
          
        <input type="radio" name="p3" value="a">a.SI <br/>
        <input type="radio" name="p3" value="b">b. NO.<br/> 
         <hr>
        

        <h3 class="text-info">4. ¿conteste falso a verdadero segun sea el caso?</h3>
         <p>En Gmail existen extenciones para programar mensajes que seran enviados en una fecha especificada y tambien el autoenvio e mensajes para volverlos a leer en un horario determinado. </p>
        <input type="radio" name="p4" value="a">a. falso. <br/>
        <input type="radio" name="p4" value="b">b. verdadero <br/>  <hr>

        <h3 class="text-info">5. esta configuracion se hace abriendo Gmail, buscando el mensaje seleccionado,y presionando los tres puntos dentro del mensaje, luego dentro del calendario se añadiran una serie de datos y se guardara en la parte superior dandole aceptar.</h3>
        <input type="radio" name="p5" value="a">a. silenciar mensajes <br/>
        <input type="radio" name="p5" value="b">b. destacar mensajes. <br/>
        <input type="radio" name="p5" value="b">c. filtrar mensajes.  <br/>
        <input type="radio" name="p5" value="b">d. crear eventos. <br/> <hr>

        <input type="submit" value="Enviar">
        
        

        
   </form>
 </section>
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