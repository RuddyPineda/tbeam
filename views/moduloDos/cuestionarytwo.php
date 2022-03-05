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


  <head>
    <h1 class=" m-3 p-2 d-block bg-info text-white font-italic">CUESTIONARIO: Como crear tu cuenta Gmail.</h1> <hr>
    <p>Responde las siguientes preguntas:</p>
  </head>
 <section>
   <div id="resultado"></div>
   <form action="cuestform" onsubmit="return verificarRespuestas()">
        <h3 class="text-info">1. ¿cuantos tipos de cuenta de gmail se pueden crear?</h3>
        <input type="radio" name="p1" value="a">a. una cuenta: personal <br/>
        <input type="radio" name="p1" value="b">b. dos cuentas: personal y de empresa. <br/> 
        <input type="radio" name="p1" value="c">c. tres cuentas: personal, comercial y de seguridad. <br/>
        <input type="radio" name="p1" value="d">d. todas las anteriores <br/> <hr>
        
        

        <h3 class="text-info">2. ¿al crear una cuenta de Gmail es necesario proporcionar datos precisos? por que?</h3>
        <input type="radio" name="p2" value="a">a. si, porque asi se podra proteger aun mas la cuenta de posibles plagios <br/>
        <input type="radio" name="p2" value="b">b. No, porque solo se necesita para enviar correos <br/> 
        <input type="radio" name="p2" value="c">c. si, porque al momento de plagio, necesitaran nuestros datos reales<br/>
        <input type="radio" name="p2" value="d">d. depende para que usemos nuestra cuenta<br/> <hr>

        <h3 class="text-info">3. ¿segun la manera correcta de crear una cuenta de gmail. cual es orden correcto del enunciado:
            ?</h3>
            <p>1. Ve a la página de acceso de la Cuenta de Google. <br>
              2.Ingresa tu nombre. <br>
              3. En el campo "Nombre de usuario", ingresa un nombre de usuario. <br>
              4. Haz clic en Crear cuenta. <br>
              5.Agrega y verifica un número de teléfono para la cuenta. <br>
              6. Ingresa y confirma tu contraseña.
              7. Haz clic en Siguiente.

            </p>
        <input type="radio" name="p3" value="a">a. 1,2,3,4,5,6,7 <br/>
        <input type="radio" name="p3" value="b">b. 1,4,2,3,6,5,7<br/> 
        <input type="radio" name="p3" value="c">c. 1,3,2,4,6,5,7<br/>
        <input type="radio" name="p3" value="d">d. 2,3,4,1,6,5,7 <br/> <hr>
        

        <h3 class="text-info">4. ¿conteste falso a verdadero segun sea el caso?</h3>
         <p>Si olvidas la contraseña o alguien usa tu cuenta sin permiso, la puedes recuperar si tienes la informacion de recuperacion actualizada. </p>
        <input type="radio" name="p4" value="a">a. falso. <br/>
        <input type="radio" name="p4" value="b">b. verdadero <br/>  <hr>

        <h3 class="text-info">5. ¿se puede administrar tu informacion y direcciones de correo electronico?</h3>
        <input type="radio" name="p5" value="a">a. No <br/>
        <input type="radio" name="p5" value="b">b. Si <br/> <hr>

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