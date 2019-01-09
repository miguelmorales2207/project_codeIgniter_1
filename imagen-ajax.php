<?php

session_start();

error_reporting(1);
ini_set('display_errors', 1);
include('includes/comunes.php');
require('includes/class.conexion.php');

$formData = Array($_FILES['file']);
$user = $_SESSION['user'];

if (isset($_FILES['file'])) {
    $file = $_FILES["file"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $rutaProvicional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($rutaProvicional);
    $width = $dimensiones[0];
    $height = $diemnsiones[1];
    $carpeta = "imagenes-ajax/";

    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
        echo "Error, el archivo no es una imagen";
    } else if ($size > 1024 * 1024) {
        echo "Error, el tamaño maximo permitido es un 1MB";
    } else if ($width > 500 && $width < 60 && $height > 500 && $height < 60) {
        echo "Error, la anchura y la altura de la imagen debe ser inferior a 500px y mayor a 60px";
    } else {

        echo "<h5> exito </h5>";
        $src = $carpeta . $nombre;
        move_uploaded_file($rutaProvicional, $src);
        $db = new conexion();
        //dumpx("UPDATE usuarios SET foto_perfil='$src' WHERE id_user='$user';");
        $sql = $db->query("UPDATE usuarios SET foto_perfil='$src' WHERE id_user='$user';");
        echo "<img src='$src'>";
    }

} else if (!isset($_FILES['file'])) {
    echo "<h5> Ha fallado el proceso...</h5>";
}

?>