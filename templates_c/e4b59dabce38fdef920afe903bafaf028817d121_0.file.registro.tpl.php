<?php /* Smarty version 3.1.24, created on 2015-09-02 20:44:08
         compiled from "./estilos/templates/public/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:353355e743780100c5_38927725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b59dabce38fdef920afe903bafaf028817d121' => 
    array (
      0 => './estilos/templates/public/registro.tpl',
      1 => 1441214821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353355e743780100c5_38927725',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e74378069e50_21445819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e74378069e50_21445819')) {
function content_55e74378069e50_21445819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '353355e743780100c5_38927725';
?>
<html>
<head><title>MIGUEL</title><head>
<body>
    <h1>Registro</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <?php }?>
    <form action="index.php?modo=registro" method="POST">
    <label>User:</label><input type="text" name="user"/><br /><br />   
    <label>Email:</label><input type="email" name="email"/><br /><br />
    <label>Pass:</label><input type="password" name="pass"/><br /><br />
    <input type="hidden" name="registro" values="1"/>  
    <input type="submit" value="Registrarme"/><br /><br />  
    </form>
</body>     
</html><?php }
}
?>