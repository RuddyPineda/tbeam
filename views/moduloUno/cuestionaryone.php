
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
            <a class="nav-link active" aria-current="page" href="../../index.php">HOME</a>
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
    <h1 class=" m-3 p-3 d-block bg-info text-white font-italic">CUESTIONARIO: Conceptos Generales de Gmail.</h1> <hr>
    <p class="m-4">Responde las siguientes preguntas:</p>
  </head>
 <section class="m4- p-3">
   <div id="resultado"></div>
   <form action="cuestform" onsubmit="return verificarRespuestas()">
        <h3 class="text-info">1. ¿Que es gmail?</h3>
        <input type="radio" name="p1" value="a">a. una libreria virtual <br/>
        <input type="radio" name="p1" value="b">b. un servicio de correo electronico <br/> 
        <input type="radio" name="p1" value="c">c. una red social <br/>
        <input type="radio" name="p1" value="d">d. una aplicacion movil <br/> <hr>
        
        

        <h3 class="text-info">2. ¿En que equipos se puede utilizar Gmail?</h3>
        <input type="radio" name="p2" value="a">a. en un smarphone (ios o android) <br/>
        <input type="radio" name="p2" value="b">b. en equipos de computo de escritorio <br/> 
        <input type="radio" name="p2" value="c">c. en tablets<br/>
        <input type="radio" name="p2" value="d">d. todas las anteriores <br/> <hr>

        <h3 class="text-info">3. ¿Que funciones ofrece Gmail?</h3>
        <input type="radio" name="p3" value="a">a. funciones de enviar y recibir correos <br/>
        <input type="radio" name="p3" value="b">b. funciones de chat<br/> 
        <input type="radio" name="p3" value="c">c. funciones de videoconferencias<br/>
        <input type="radio" name="p3" value="d">d. la respuesta a y b son correctas <br/>
        <input type="radio" name="p3" value="e">e. la respuesta b y c son correctas <br/> <hr>

        <h3 class="text-info">4. ¿en Gmail, como se puede deshacer un correo electronico?</h3>
        <input type="radio" name="p4" value="a">a. se envia un correo y en los tres segundos se da en la opcion deshacer envio. <br/>
        <input type="radio" name="p4" value="b">b. se busca en mensajes enviados y se elimina el correo electronico que acabamos de enviar <br/> 
        <input type="radio" name="p4" value="c">c. No se puede deshacer el envio de un correo<br/>
        <input type="radio" name="p4" value="d">d. se configura el tiempo de cancelacion del envio para poder deshacer el envio. <br/> <hr>

        <h3 class="text-info">5. ¿es necesario tener una cuenta e Gmail para los servicios de google y demas aplicaciones?</h3>
        <input type="radio" name="p5" value="a">a. No <br/>
        <input type="radio" name="p5" value="b">b. Si <br/> 
        <input type="radio" name="p5" value="c">c. A veces<br/> <hr>

        <input type="submit" value="Enviar">
        
        
   </form>
 </section>


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