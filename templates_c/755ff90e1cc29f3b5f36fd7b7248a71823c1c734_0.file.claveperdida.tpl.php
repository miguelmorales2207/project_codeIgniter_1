<?php /* Smarty version 3.1.24, created on 2016-01-24 18:40:43
         compiled from "./estilos/templates/public/claveperdida.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2817156a50c9ba52803_13454118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '755ff90e1cc29f3b5f36fd7b7248a71823c1c734' => 
    array (
      0 => './estilos/templates/public/claveperdida.tpl',
      1 => 1453604510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817156a50c9ba52803_13454118',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a50c9bd11ab6_72208905',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a50c9bd11ab6_72208905')) {
function content_56a50c9bd11ab6_72208905 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2817156a50c9ba52803_13454118';
?>
<html>
<head><title>MIGUEL</title><head>
<body>
    <h1>Recuperar Contraseña</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <?php }?>
    <form action="index.php?modo=claveperdida" method="POST">
    <label>Email:</label><input type="email" name="email"/><br /><br />  
    <input type="submit" value="Recuperar Contraseña"/><br /><br />  
    </form>
</body>     
</html><?php }
}
?>