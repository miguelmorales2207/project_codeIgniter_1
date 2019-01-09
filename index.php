<?php

error_reporting(1);
ini_set('display_errors', 1);
include('includes/comunes.php');
require('includes/class.conexion.php');

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default'; 

switch ($modo) {
    case 'login':   ///////////////////   LOGIN   /////////////////////    
        if (isset($_POST['login'])) {
            if (!empty($_POST['user']) and ! empty($_POST['pass'])) {

                include('includes/class.acceso.php');
                $login = new acceso($_POST['user'], $_POST['pass'], '');
                $login->login();
            } else {
                header('location: index.php?error=campos_vacios');
            }
        } else {
            header('location: index.php');
        }
        break;      ///////////////////////////////////////////////////////

    case 'registro':    ////////////////   REGISTRO   /////////////////

        if (isset($_POST['registro'])) {
            if (!empty($_POST['user']) and ! empty($_POST['email']) and ! empty($_POST['pass'])) {
                include('includes/class.acceso.php');
                $registro = new acceso($_POST['user'], $_POST['pass'], $_POST['email']);
                $registro->registro();
            } else {
                header('location: index.php?modo=registro&error=campos_vacios');
            }
        } else if (isset($_GET['error']) and $_GET['error'] == 'campos_vacios') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'ERROR: debes llenar todos los campos para poder registrarte'
            ));
            $template->display('../estilos/templates/public/registro.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'usuario_usado') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'ERROR: El usuario ingresado ya existe'
            ));
            $template->display('../estilos/templates/public/registro.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'email_usado') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'ERROR: El email ingresado ya existe'
            ));
            $template->display('../estilos/templates/public/registro.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'email_user_usado') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'ERROR: El usuario y el email ingresados ya existen, ¿has olvidado tu cuenta? <a href="index.php?modo=claveperdida">Recuperala</a>'
            ));
            $template->display('../estilos/templates/public/registro.html');
        } else {
            $template = new miguel();
            $template->display('../estilos/templates/public/registro.html');
        }

        break;          /////////////////////////////////////////////////////

    case 'claveperdida':  /////////////  CLAVE PERDIDA   ///////////////

        if (isset($_POST['email'])) {
            if (!empty($_POST['email'])) {
                include('includes/class.acceso.php');
                $recuperar = new acceso('', '', $_POST['email']);
                $recuperar->claveperdida();
            } else {
                header('location: index.php?modo=claveperdida&error=campo_vacio');
            }
        } else if (isset($_GET['error']) and $_GET['error'] == 'campo_vacio') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'ERROR: debes llenar el campo de email'
            ));
            $template->display('../estilos/templates/public/claveperdida.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'email_inexistente') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'ERROR: el email que has ingresado no existe.'
            ));
            $template->display('../estilos/templates/public/claveperdida.html');
        } else if (isset($_GET['succes']) and $_GET['succes'] == 'ok') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'Muy bien. Hemos enviado una nueva contraseña.'
            ));
            $template->display('../estilos/templates/public/claveperdida.html');
        } else {
            $template = new miguel();
            $template->display('../estilos/templates/public/claveperdida.html');
        }

        break;   ///////////////////////////////////////////////////////////////////

    case 'edit':   ///////////////////   LOGIN   /////////////////////    
        if (isset($_POST['edit'])) {
            if (!empty($_POST['user']) and ! empty($_POST['apell']) and ! empty($_POST['ced']) and ! empty($_POST['email']) and ! empty($_POST['tel']) and ! empty($_POST['password'])) {
                //dumpx($_POST);
                include('includes/class.enAcceso.php');
                $editar = new enAcceso($_POST['user'], $_POST['apell'], $_POST['ced'], $_POST['email'], $_POST['tel'], $_POST['password'], '', '', '', '', '', '', '');
                $editar->editP();
            } else {
                header('location: index.php?error=field_empty');                                
            }
        } else if (isset($_GET['succes']) and $_GET['succes'] == 'ok') {
            $template = new miguel();
            $template->assign(array(
                'error' => 'Muy bien. Hemos actualizado tu perfil.'
            ));
            $template->display('../estilos/templates/acceso.html');
        } else {
            $template = new miguel();
            $template->display('../estilos/templates/public/acceso.html');
        }
        break;      //////////////////////////////////////////////////////////////

    case 'mostrarV':   ///////////////////   Mostrar ventas   /////////////////////    
        if (isset($_POST['mostrarV'])) {
            if (!empty($_POST['user'])) {
                //dumpx($_POST);
                include('includes/class.enAcceso.php');
                $mostrar = new enAcceso($_POST['user'], '', '', '', '', '', '', '', '', '', '', '', '');
                $mostrar->mostrarVentas();
            } else {
                header('location: index.php?error=c_v');
            }
        } else if (isset($_GET['succes']) and $_GET['succes'] == 'ok') {
            $template = new miguel();
            $template->assign(array(
                'error2' => 'Muy bien. Hemos mostrado tus ventas.'
            ));
            $template->display('../estilos/templates/acceso.html');
        } else {
            $template = new miguel();
            $template->display('../estilos/templates/public/acceso.html');  
        }
        break;      //////////////////////////////////////////////////////////////

    case 'vender':   ///////////////////   LOGIN   /////////////////////    
        if (isset($_POST['vender'])) {
            if (!empty($_POST['placa']) and ! empty($_POST['tipo']) and ! empty($_POST['marca']) and ! empty($_POST['modelo']) and ! empty($_POST['año']) and ! empty($_POST['estado']) and ! empty($_POST['precio']) and ! empty($_POST['user'])) {
                //dumpx($_POST);
                include('includes/class.enAcceso.php');
                $vender = new enAcceso($_POST['user'], '', '', '', '', '', $_POST['placa'], $_POST['tipo'], $_POST['marca'], $_POST['modelo'], $_POST['año'], $_POST['estado'], $_POST['precio']);
                $vender->vender();             
            } else {
                header('location: index.php?error=fields_emptys');
            }
        } else if (isset($_GET['succes']) and $_GET['succes'] == 'ok') {
            $template = new miguel();
            $template->assign(array(
                'error1' => 'Muy bien. Hemos registrado tu coche a la venta.'
            ));
            $template->display('../estilos/templates/acceso.html');
        } else {
            $template = new miguel();
            $template->display('../estilos/templates/public/acceso.html');
        }
        break;      //////////////////////////////////////////////////////////////
        
        case 'carros':     ///////////////////   LOGIN   /////////////////////   
            
            $template = new miguel();
            $template->display('../estilos/templates/public/vCarros.html');
        
        break;      //////////////////////////////////////////////////////////////

    default: ////////////////////////  DEFAULT  //////////////////////////////

        if (isset($_GET['error']) and $_GET['error'] == 'campos_vacios') {       //ingresar
            $template = new miguel();
            $template->assign(array('error' =>
                'ERROR: Debes llenar los campos'));
            $template->display('../estilos/templates/public/index.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'c_v') {  //mostrar
            $template = new miguel();
            $template->assign(array(
                'error2' => 'ERROR: Los campos estan vacios.'
                ));
            $template->display('../estilos/templates/acceso.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'd_i') {  //mostrar
            $template = new miguel();
            $template->assign(array(
                'error2' => 'ERROR: Tu dato es incorrecto.'
                ));
            $template->display('../estilos/templates/acceso.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'datos_incorrectos') { //ingresar
            $template = new miguel();
            $template->assign(array('error' =>
                'ERROR: Datos incorrectos'));
            $template->display('../estilos/templates/public/index.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'acceso') {     //ingresar
            $template = new miguel();
            $template->assign(array('error' =>
                'ERROR: La sesion ha caducado o no has iniciado sesion'));
            $template->display('../estilos/templates/public/index.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'field_empty') {  //editar
            $template = new miguel();
            $template->assign(array('error' =>
                'ERROR: Debes llenar los campos'));
            $template->display('../estilos/templates/acceso.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'fields_emptys') {  //vender
            $template = new miguel();
            $template->assign(array('error' =>
                'ERROR1: Debes llenar todos los campos para poder registrar tu auto a la venta'));
            $template->display('../estilos/templates/acceso.html');
        } else if (isset($_GET['error']) and $_GET['error'] == 'files_incorrectos') {  //editar
            $template = new miguel();
            $template->assign(array('error' =>
                'ERROR: Tus datos son incorrectos'));
            $template->display('../estilos/templates/acceso.html');
        } else {
            $template = new miguel();
            $template->display('../estilos/templates/public/index.html');
        }
        break;
}   ////////////////////////////////////////////////////////////////////////////
?>