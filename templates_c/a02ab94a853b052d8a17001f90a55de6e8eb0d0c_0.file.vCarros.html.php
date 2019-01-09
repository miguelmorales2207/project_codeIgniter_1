<?php /* Smarty version 3.1.24, created on 2017-04-25 22:11:14
         compiled from "./estilos/templates/public/vCarros.html" */ ?>
<?php
/*%%SmartyHeaderCode:757558ffad6282ae48_81093217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a02ab94a853b052d8a17001f90a55de6e8eb0d0c' => 
    array (
      0 => './estilos/templates/public/vCarros.html',
      1 => 1493149961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '757558ffad6282ae48_81093217',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ffad62884bd5_11230322',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ffad62884bd5_11230322')) {
function content_58ffad62884bd5_11230322 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '757558ffad6282ae48_81093217';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>APLICACION WEB</title>  
        <meta charset="utf-8"/>
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/> 
        <link rel="stylesheet" href="css/vCarros.css"/>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrarCondicion() {
                if (document.getElementById('divCondicion').style.display = 'none') {
                        document.getElementById('divCondicion').style.display = 'block';
                }
            }
        <?php echo '</script'; ?>
>
    </head>    
    <body>
        <div>
            <nav class="n">  
                <div class="one_div">
                    <a class="a_one" href="index.php?modo=carros"><i class="fa fa-home">Todo en venta</i></a>
                    <a class="a_two" href="index.php?modo=registro"><i class="fa fa-user">Registro</i></a>  
                    <a class="a_three" href="index.php?modo=registro"><i class="fa fa-play-circle">Ingresar</i></a> 
                </div>
            </nav>
            <nav class="n_dos"> 
                <img src="imagenes/descarga1.jpg" width="300" height="60"/>
                <div class="two_div">
                    <a class="a_four" href="index.php?modo=carros"><i class="fa fa-car">Autos en venta</i></a>          
                    <a class="a_five" href="index.php?modo="><i class="fa fa-motorcycle">Motos en venta</i></a>
                    <a class="a_six" href="index.php?modo="><i class="fa fa-truck">Vehiculos comerciales</i></a>                                         
                </div>
            </nav>
            <aside id="asideBusqueda">
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-md-2 col-md-offset-2 main'>
                            <div class='table-responsive'>
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr>
                                            <th>
                                    <center><h4><i class="fa fa-search"> Tu busqueda</i></h4></center>
                                    </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <br/>
                                                <a href="#" onclick="mostrarCondicion()"><i class="fa fa-plus">  Condicion  </i></a><br/><br/>
                                                <div id="divCondicion" style="display:none;">
                                                    <form>
                                                        <label>-</label><label>Dañado</label><input class="ic1" type="checkbox"><br/>
                                                        <label>-</label><label>Nuevo</label><input class="ic2" type="checkbox"><br/>
                                                        <label>-</label><label>Usado</label><input class="ic3" type="checkbox"><br><br/>
                                                    </form>
                                                </div>
                                                <a href="#"><i class="fa fa-plus">  Tipo  </i></a><br/><br/>
                                                <div class="divCondicion" style="display:none;">
                                                    <form>
                                                        <label>-</label><label>Dañado</label><input class="ic1" type="checkbox"><br/>
                                                        <label>-</label><label>Nuevo</label><input class="ic2" type="checkbox"><br/>
                                                        <label>-</label><label>Usado</label><input class="ic3" type="checkbox"><br><br/>
                                                    </form>
                                                </div>
                                                <a href="#"><i class="fa fa-plus">  Precio  </i></a><br/><br/>
                                                <div class="divCondicion" style="display:none;">
                                                    <form>
                                                        <label>-</label><label>Dañado</label><input class="ic1" type="checkbox"><br/>
                                                        <label>-</label><label>Nuevo</label><input class="ic2" type="checkbox"><br/>
                                                        <label>-</label><label>Usado</label><input class="ic3" type="checkbox"><br><br/>
                                                    </form>
                                                </div>
                                                <a href="#"><i class="fa fa-plus">  Año  </i></a><br/><br/>
                                                <div class="divCondicion" style="display:none;">
                                                    <form>
                                                        <label>-</label><label>Dañado</label><input class="ic1" type="checkbox"><br/>
                                                        <label>-</label><label>Nuevo</label><input class="ic2" type="checkbox"><br/>
                                                        <label>-</label><label>Usado</label><input class="ic3" type="checkbox"><br><br/>
                                                    </form>
                                                </div>
                                                <a href="#"><i class="fa fa-plus">  Marca  </i></a><br/><br/>
                                                <div class="divCondicion" style="display:none;">
                                                    <form>
                                                        <label>-</label><label>Dañado</label><input class="ic1" type="checkbox"><br/>
                                                        <label>-</label><label>Nuevo</label><input class="ic2" type="checkbox"><br/>
                                                        <label>-</label><label>Usado</label><input class="ic3" type="checkbox"><br><br/>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <section>

            </section>
            <footer>  
                <div>
                    
                </div> 
            </footer>
        </div>
    </body>
</html>
<?php }
}
?>