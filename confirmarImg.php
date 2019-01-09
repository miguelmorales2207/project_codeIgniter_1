<?php

session_start();   

error_reporting(1);
ini_set('display_errors', 1);
include('includes/comunes.php');
require('includes/class.conexion.php');

$confirm = $_POST['confirm'];
$user = $_SESSION['user'];

if ($confirm === 'confirmImg' && isset($_SESSION['user'])) {                              
    
    $db = new conexion();   

    $sql = $db->query("SELECT foto_perfil FROM usuarios WHERE id_user='$user';");   
    
    $img = "";
    
    if($db->rows($sql) > 0){
        while ($row = mysqli_fetch_row($sql)) {
            echo "<img src='$row[0]' >";
        }
    }else{
        echo "<h4> No hay imagen en la base de datos...</h4>";
    }
}
?>