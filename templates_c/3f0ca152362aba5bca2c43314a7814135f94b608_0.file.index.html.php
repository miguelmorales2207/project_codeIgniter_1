<?php /* Smarty version 3.1.24, created on 2016-02-28 20:30:21
         compiled from "./estilos/templates/public/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2952956d34acdd94229_36536914%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0ca152362aba5bca2c43314a7814135f94b608' => 
    array (
      0 => './estilos/templates/public/index.html',
      1 => 1456687721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2952956d34acdd94229_36536914',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56d34acde76b52_72984663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d34acde76b52_72984663')) {
function content_56d34acde76b52_72984663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2952956d34acdd94229_36536914';
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
    <link rel="stylesheet" href="css/estilo.css"/>   
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
                <a class="a_four" href="index.html"><i class="fa fa-car">Autos en venta</i></a>          
                <a class="a_five" href="index.html"><i class="fa fa-motorcycle">Motos en venta</i></a>
                <a class="a_six" href="index.html"><i class="fa fa-truck">Vehiculos comerciales</i></a>                                         
           </div>
        </nav>
        <section>
           <h2 class="hdos_one" >Iniciar Sesion</h2>      
            <div class="three_div">
                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                   <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 
                <?php }?>
             <form action="index.php?modo=login" method="POST">
              <input class="i_one" type="text" name="user" placeholder="tu correo electronico"/><br /><br />    
              <input class="i_two" type="password" name="pass" placeholder="tu contraseña"/><br /><br />  
              <input type="hidden" name="login" values="1"/>
              <input class="i_three" type="submit" value="Iniciar Sesion"/><br /><br />
              <hr class="hr_one"/> 
              <hr class="hr_two"/>
              <a class="a_eight" href="index.php?modo=claveperdida">¿Olvido su contraseña?</a><br /><br />
              <a class="a_night" href="index.php?modo=registro">¿Aun no eres miebro?...¡Registrate!</a><br /><br />     
             </form>
            </div>        
        </section>
        <footer>  
            <div>
               Miguel Morales 2016 © all rights reserverd
            </div> 
        </footer>
    </div>
</body>
</html><?php }
}
?>