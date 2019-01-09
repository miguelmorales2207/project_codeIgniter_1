<?php

require_once('mostrarContenido.php');           

$mostrar = $_POST['mostrar'];              

if($mostrar === 'mostrarU'){
    $inst = new Acceso();
    $inst->mostrarUsers();
    //print_r($arreglo);
}

?> 