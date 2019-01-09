<?php /* Smarty version 3.1.24, created on 2017-04-25 22:11:08
         compiled from "./estilos/templates/public/claveperdida.html" */ ?>
<?php
/*%%SmartyHeaderCode:2869458ffad5c840fd1_26563585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be25b7fa2e60d8671da7c2b5e95366038dbe9b9c' => 
    array (
      0 => './estilos/templates/public/claveperdida.html',
      1 => 1493149940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2869458ffad5c840fd1_26563585',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ffad5c89ad61_88393869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ffad5c89ad61_88393869')) {
function content_58ffad5c89ad61_88393869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2869458ffad5c840fd1_26563585';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>APLICACION WEB</title>  
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/> 
    <link rel="stylesheet" href="css/recuperar_pass.css"/> 
</head>
<body>
    <div>
        <nav class="n"> 
           <div class="one_div">
            <a class="a_one" href="index.html"><i class="fa fa-home">Todo en venta</i></a>
            <a class="a_two" href="index.php?modo=registro"><i class="fa fa-user">Registro</i></a>   
            <a class="a_three" href="index.php"><i class="fa fa-play-circle">Ingresar</i></a>
           </div>
        </nav>
        <nav class="n_dos"> 
            <img src="imagenes/descarga1.jpg" width="300" height="60"/>
            <div class="two_div">
                <a class="a_four" href="index.php?modo=carros"><i class="fa fa-car">Autos en venta</i></a>          
                <a class="a_five" href="index.html"><i class="fa fa-motorcycle">Motos en venta</i></a>         
                <a class="a_six" href="index.html"><i class="fa fa-truck">Vehiculos comerciales</i></a>                                     
           </div>
        </nav>
        <section>
           <h2 class="hdos_one" >Recuperar Contraseña</h2>      
            <div class="three_div">
                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                   <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 
                <?php }?>
             <form action="index.php?modo=claveperdida" method="POST">
              <input class="i_two" type="email" name="email" placeholder="tu correo electronico"/><br /><br />  
              <input class="i_three" type="submit" value="Recuperar Contraseña"/><br /><br /> 
              <hr class="hr_one"/> 
              <hr class="hr_two"/>
              <a class="a_night" href="index.php?modo=registro">¿Aun no eres miebro?...¡Registrate!</a><br /><br />     
             </form>
            </div>        
        </section>
        <footer>
            <div>
              
            </div> 
        </footer>
    </div>
</body>
</html><?php }
}
?>