<?php 

require_once("./config/config.php");

function getBaseURL(){
    return BASE_URL;    
}
function getNombreSistema(){
    return NOMBRE_SISTEMA;
}
function getSiglasEvento(){
    return SIGLAS_EVENTO;
}
function onlyEvent(){
    $arrayEvent = explode(" ",SIGLAS_EVENTO);
    return $arrayEvent[0];
}

?> 