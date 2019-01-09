<?php /* Smarty version 3.1.24, created on 2015-08-17 00:29:54
         compiled from "C:/xampp/htdocs/PhpProject1/miguel/estilos/templates/public/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2125055d10ee294d138_70692127%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e102c8253dfab084891261801c73845bf6f7d5' => 
    array (
      0 => 'C:/xampp/htdocs/PhpProject1/miguel/estilos/templates/public/index.tpl',
      1 => 1439761713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125055d10ee294d138_70692127',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55d10ee2b317a5_00316250',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d10ee2b317a5_00316250')) {
function content_55d10ee2b317a5_00316250 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2125055d10ee294d138_70692127';
?>
<html>
<head><title>MIGUEL</title><head>
<body>
    <h1>LOGIN</h1>
    <form action="index.php?modo=login" method="POST">
    <label>User:</label><input type="text" name="user"/>    
    <label>Pass:</label><input type="password" name="pass"/>
    <input type="hidden" name="login" values="1"/>
    <input type="submit" value="Iniciar Sesion"/>
    </form>
</body>     
</html><?php }
}
?>