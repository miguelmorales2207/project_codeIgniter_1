<?php /* Smarty version 3.1.24, created on 2015-09-03 03:05:47
         compiled from "./estilos/templates/public/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2043155e79ceb613305_36497313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680cb81a0bb00d3505e680ecc8c97c49f23c56ae' => 
    array (
      0 => './estilos/templates/public/index.tpl',
      1 => 1441242345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043155e79ceb613305_36497313',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e79ceb6b7427_46492589',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e79ceb6b7427_46492589')) {
function content_55e79ceb6b7427_46492589 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2043155e79ceb613305_36497313';
?>
<html>
<head><title>MIGUEL</title><head>
<body>
    <h1>LOGIN</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <?php }?>
    <form action="index.php?modo=login" method="POST">
    <label>User:</label><input type="text" name="user"/><br /><br />   
    <label>Pass:</label><input type="password" name="pass"/><br /><br />  
    <input type="hidden" name="login" values="1"/>
        <a href="index.php?modo=registro">Registrarme</a><br /><br /> 
        <a href="index.php?modo=claveperdida">Recuperar Contraseña</a><br /><br />
    <input type="submit" value="Iniciar Sesion"/><br /><br />    
    </form>
</body>
</html><?php }
}
?>