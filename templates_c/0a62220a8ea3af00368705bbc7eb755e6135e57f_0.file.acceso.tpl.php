<?php /* Smarty version 3.1.24, created on 2016-01-24 01:40:48
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:848256a41d901ce347_27292562%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a62220a8ea3af00368705bbc7eb755e6135e57f' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1453480034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848256a41d901ce347_27292562',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a41d90539419_30571791',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a41d90539419_30571791')) {
function content_56a41d90539419_30571791 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '848256a41d901ce347_27292562';
?>
<!DOCTYPE html>
<html>
<head>
    <title>TITULO</title>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $('document').ready(function(){
                function hora(){
                $.ajax({
                type: 'GET',
                url: 'hora.php',
                success: function($hora){
                    $('#hora').html($hora);
                    setTimeout(hora(),1000);
                }
            });
            }
            
            setTimeout(hora(),1000);
        });
    <?php echo '</script'; ?>
>
<head>
<body>
    <div id="hora"></div>
    <h1>Bienvenido <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h1>
</body>
</html><?php }
}
?>