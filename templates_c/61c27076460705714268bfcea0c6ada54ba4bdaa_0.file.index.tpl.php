<?php /* Smarty version 3.1.24, created on 2016-02-06 02:30:54
         compiled from "./estilos/templates/public/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:737156b54cce9e8439_06874868%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c27076460705714268bfcea0c6ada54ba4bdaa' => 
    array (
      0 => './estilos/templates/public/index.tpl',
      1 => 1441220746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '737156b54cce9e8439_06874868',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b54ccea3a4c1_17888902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b54ccea3a4c1_17888902')) {
function content_56b54ccea3a4c1_17888902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '737156b54cce9e8439_06874868';
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