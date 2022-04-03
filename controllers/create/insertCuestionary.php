<?php   
    session_start();
    include("../conexion.php");
    $id_user = $_SESSION['id_cliente'];
    $modulo = $_SESSION['modulo'];

    $preguntas = $_REQUEST;
    foreach ($preguntas as $key => $value) {
        $qryInsert = "INSERT INTO resultado(`id_users`, `id_pregunta`, `id_respuesta`) VALUES ($id_user,$key,$value)";
        $insertRespuestas= $conexion->prepare($qryInsert);
        $insertRespuestas->execute();
    }
    $qryResult = "SELECT count(rt.valor) as cantidad FROM resultado as rl INNER JOIN respuesta as rt ON rt.id = rl.id_respuesta INNER JOIN pregunta as pg ON pg.id = rl.id_pregunta WHERE rl.id_users = 1 AND rt.valor = 'verdadero' AND pg.modulo = $modulo";
    $correctas = $conexion->prepare($qryResult);
    $correctas->execute();
    while ($correcta = $correctas->fetch(PDO::FETCH_ASSOC)) {
                   
        $respuestasCorrectas = $correcta['cantidad'];
    }
    try {
       $message = "termino su cuestionario tuvo un total de $respuestasCorrectas respuestas correctas";
       header("Location: ../../views/verificacion.php?mensaje=$message");
       die();
    } catch (\Exception $e) {
        echo "failed";
    }
?>