<?php
    session_start();
    $_SESSION['modulo'] = 2;
    $qry="SELECT id, numeral, detalle FROM pregunta Where modulo = 2";
    $preguntas = $conexion->prepare($qry);
    $preguntas->execute(array());
    $arrayPreguntas = array();
    while ($pregunta = $preguntas->fetch(PDO::FETCH_ASSOC)) {
        array_push($arrayPreguntas,array (
            'id'=>$pregunta['id'],
            'numeral' =>$pregunta['numeral'],
            'pregunta'=>$pregunta['detalle']
            )
        );
        
    }
   
   foreach ($arrayPreguntas as $key => $value) {
       $qry = "SELECT
                    rs.id, 
                    rs.numeral,
                    rs.detalle,
                    rs.valor,
                    pg.id as id_pregunta 
                FROM 
                    respuesta as rs 
                INNER JOIN 
                    pregunta as pg ON pg.id = rs.id_pregunta 
                WHERE 
                    pg.id = $value[id]
                ";

        $respuestas = $conexion->prepare($qry);
        $respuestas->execute();
        $arrayrespuestas[$value['pregunta']]=[];
        while ($respuesta = $respuestas->fetch(PDO::FETCH_ASSOC)) {
            array_push($arrayrespuestas[$value['pregunta']],$respuesta);            
        }
    }

?>