<?php /* Smarty version 3.1.24, created on 2017-04-25 22:11:01
         compiled from "./estilos/templates/public/registro.html" */ ?>
<?php
/*%%SmartyHeaderCode:440158ffad55516c92_03689264%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f568bbd3e650e7ec08f80eb8f4413979ffa45fb7' => 
    array (
      0 => './estilos/templates/public/registro.html',
      1 => 1493149953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440158ffad55516c92_03689264',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ffad556e7a86_36953939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ffad556e7a86_36953939')) {
function content_58ffad556e7a86_36953939 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '440158ffad55516c92_03689264';
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
    <link rel="stylesheet" href="css/registro.css"/>   
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
           <h2 class="hdos_one" >Registro</h2>      
            <div class="three_div">
                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                   <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 
                <?php }?>
             <form action="index.php?modo=registro" method="POST">   
              <input class="i_one" type="text" name="user" placeholder="tu usuario"/><br /><br />   
              <input class="i_two" type="email" name="email" placeholder="tu correo electronico"/><br /><br />
              <input class="i_four" type="password" name="pass" placeholder="tu contraseña"/><br /><br />
              <input type="hidden" name="registro" value="1"/>  
              <input class="i_three" type="submit" value="Registrarme"/><br /><br />  
              <hr class="hr_one"/> 
              <hr class="hr_two"/>
              <a class="a_eight" href="index.php?modo=claveperdida">¿Olvido su contraseña?</a><br /><br />     
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