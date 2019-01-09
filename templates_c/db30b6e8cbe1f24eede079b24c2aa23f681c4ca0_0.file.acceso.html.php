<?php /* Smarty version 3.1.24, created on 2019-01-08 03:40:56
         compiled from "./estilos/templates/acceso.html" */ ?>
<?php
/*%%SmartyHeaderCode:283675c340db8865bd9_46542207%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db30b6e8cbe1f24eede079b24c2aa23f681c4ca0' => 
    array (
      0 => './estilos/templates/acceso.html',
      1 => 1493158756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283675c340db8865bd9_46542207',
  'variables' => 
  array (
    'user' => 0,
    'error' => 0,
    'error2' => 0,
    'error1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5c340db88c4075_08104448',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c340db88c4075_08104448')) {
function content_5c340db88c4075_08104448 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '283675c340db8865bd9_46542207';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>APLICACION WEB</title>              
        <meta charset="utf-8"/>
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            $('document').ready(function () {
                function hora() {
                    $.ajax({
                        type: 'GET',
                        url: 'hora.php',
                        success: function ($hora) {
                            $('#hora').html($hora);
                            setTimeout(hora(), 1000);
                        }
                    });
                }
                setTimeout(hora(), 1000);
            });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrar() {
                document.getElementById('desp').style.display = 'block';
            }
            function cerrar() {
                document.getElementById('desp').style.display = 'none';
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrar1() {
                document.getElementById('desp1').style.display = 'block';
            }
            function cerrar1() {
                document.getElementById('desp1').style.display = 'none';
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrar2() {
                document.getElementById('desp2').style.display = 'block';
            }
            function cerrar2() {
                document.getElementById('desp2').style.display = 'none';
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrar3() {
                document.getElementById('desp3').style.display = 'block';
            }
            function cerrar3() {
                document.getElementById('desp3').style.display = 'none';
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrarU() {    
                
                $.ajax({
                    url: 'mostrar.php',
                    type: 'POST',
                    data: 'mostrar=mostrarU'   
                }).done(function (resul) {
                    $("#lista").html(resul);
                });
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function mostrarV() {

                var form = $('#formulario');
                var user = $('.i_one').val();

                var data = 'user=' + user;  

                $.ajax({
                    url: 'mostrarV.php',  
                    type: 'POST',
                    data: data
                }).done(function (resul1) {
                    $("#lista1").html(resul1);
                });
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            /*$(function () {
                $("#formularioImg").on("change", function (e) { 
                    e.preventDefault();
                    var f = $(this);
                    var formData = new FormData($("#formularioImg")[0]);
                    //formData.append('file',$("#formularioImg"));
                    $.ajax({
                        url: "imagen-ajax.php",
                        type: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function (res) {
                        $("#imgActual").html(res);
                       });
                });
            });*/
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            /*$(function(){
                 $("#formularioImg").on("submit",function(){
                     var f = $(this);
                     var formData = new FormData($("#formularioImg")); 
                     //formData.append('file',$("#formularioImg"));
                     var ruta = "imagen-ajax.php";
                     $.ajax({
                         url: ruta,
                         type: "POST",
                         data: formData,
                         contentType: false,
                         processData: false,
                         success: function(dato){
                             $("#idimg").html(dato);
                         }
                     })
                })      
            } */
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function confirmarImg(){
                $.ajax({
                    url: 'confirmarImg.php',
                    type: 'POST',
                    data: 'confirm=confirmImg'
                }).done(function (resul) {
                    $("#imgActual").html(resul);
                });
            }
        <?php echo '</script'; ?>
>
        <meta name="viewport" content="width=device-width, initial-scale=1"/> 
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>   
        <link rel="stylesheet" href="css/font-awesome.min.css"/>  
        <link rel="stylesheet" href="css/acceso.css"/>                             
    </head>
    <body onload="confirmarImg()">   
        <div>
            <nav class="n"> 
                <div class="one_div">
                    <a class="a_one" href="index.html"><i class="fa fa-home">Todo en venta</i></a>
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
            <aside>
                <div class="three_div">
                    <nav class="n_cuatro">
                        <a class="" href="#" onclick="mostrar2()"><i class="fa fa-car">Vende tu vehiculo</i></a>
                    </nav>
                    <nav class="n_cinco">
                        <a class="" href="#" onclick="mostrar3()"><i class="fa fa-eye">Ver tus ventas</i></a> 
                    </nav>
                    <nav class="n_six">
                        <a class="" href="#" onclick="mostrar1()"><i class="fa fa-users" >Ver los usuarios</i></a> 
                    </nav>
                </div>    
            </aside>
            <section>
                                <!-- Cargar la imagen al servidor -->                               

                <form method="post" id="formularioImg" enctype="multipart/form-data">
                    <input name="file" type="file"/>
                    <div id="imgActual" ></div>
                    <!--<img id="img" src=""/>-->
                    <!--<input type="submit" value="Subir archivos"/>-->
                    <!--<div id="idimg" ></div>-->
                </form>
                  
                <h2 class="hdos_one">Bienvenido <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>     
                <div id="hora"></div>

                <div>
                    <nav class="n_tres">     
                        <a class="" href="#" onclick="mostrar()"><i class="fa fa-user">Editar perfil</i></a>  
                    </nav> 
                    <!-- formulario editar -->  
                    <div id="desp" style="display:none;">
                        <h4 class="h_cinco">Digite los campos:</h4>                                                
                        <h4><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 
                            <?php }?></h4>
                        <div id="despf">
                            <form action="index.php?modo=edit" method="POST">                                                             
                                <input class="i3" type="text" name="email" placeholder="tu email"><br /><br />
                                <input class="i1" type="text" name="user" placeholder="tu usuario"><br /><br />
                                <input class="i2" type="text" name="apell" placeholder="tu apellido"><br /><br /> 
                                <input class="i3" type="text" name="ced" placeholder="tu cedula"><br /><br />
                                <input class="i5" type="text" name="tel" placeholder="tu telefono"><br /><br />   
                                <input class="i6" type="password" name="password" placeholder="tu password"><br /><br /> 
                                <input type="hidden" name="edit" value="1"/> 
                                <input class="isix" type="submit" value="editar"/><br /><br />     
                                <input id ="btn" type="button"  value="cerrar" onclick="cerrar()">  
                            </form>                       
                        </div>
                    </div>
                    <!-- formulario ver usuarios --> 
                    <div id="desp1" style="display: none;">   
                        <form>

                            <div id="lista"> </div> 

                            <input class="btn1" type="button"  value="mostrar" onclick="mostrarU()"><br/><br/>
                            <input class="btn2" type="button"  value="cerrar" onclick="cerrar1()">  
                        </form>  
                    </div>
                    <!-- formulario mostrar ventas --> 
                    <div id="desp3" style="display: none;">   
                        <h4><?php if (isset($_smarty_tpl->tpl_vars['error2']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['error2']->value;?>
 
                            <?php }?></h4> 
                        <h3 class="hcuatro">TUS VENTAS</h3>  
                        <div id="desptres">  
                            <form id="formulario" method="POST"> 
                                <label>Usuario:</label><input class="i_one" type="text" name="user" placeholder="tu usuario"><br/>
                                <center><input id="btn5" type="button"  value="mostrar" onclick="mostrarV()"></center><br/><br/>
                                <input class="btn6" type="button"  value="cerrar" onclick="cerrar3()"><br/><br/>
                                <div id="lista1"></div> 
                            </form> 
                        </div>
                    </div>
                    <!-- formulario vender --> 
                    <div id="desp2" style="display:none;">  
                        <h3 class="htres">INCLUYE TU VEHICULO</h3>
                        <h4><?php if (isset($_smarty_tpl->tpl_vars['error1']->value)) {?>                                    
                            <?php echo $_smarty_tpl->tpl_vars['error1']->value;?>
 
                            <?php }?></h4>
                        <div id="despdosf">   
                            <form action="index.php?modo=vender" method="POST">
                                <label>Placa:</label><input class="i_i" type="text" name="placa" placeholder="escribe la placa"/><br />
                                <label>Tipo de vehiculo:</label>
                                <SELECT NAME="tipo" SIZE="1"> 
                                    <OPTION VALUE="carro">Carro</OPTION> 
                                    <OPTION VALUE="moto">Moto</OPTION>                  
                                    <OPTION VALUE="camion">Camion</OPTION>                                                         
                                </SELECT> <br/>
                                <label>Marca:</label><input class="i_uno" type="text" name="marca" placeholder="selecciona una marca"/><br />
                                <label>Modelo:</label><input class="i_dos" type="text" name="modelo" placeholder="selecciona un modelo"/><br />
                                <label>Año:</label><input class="i_tres" type="text" name="año" placeholder="selecciona el año"/><br />
                                <label>Estado:</label><input class="i_cuatro" type="text" name="estado" placeholder="selecciona el estado"/><br />
                                <label>Precio:</label><input class="i_cinco" type="text" name="precio" placeholder="coste del vehiculo"/> 
                                <label>Usuario:</label><input class="i_seis" type="text" name="user" placeholder="usuario del vendedor"/>
                                <input type="hidden" name="vender" value="1"/> 
                                <input class="btn3" type="submit" value="enviar"/><br /><br />     
                                <input class="btn4" type="button"  value="cerrar" onclick="cerrar2()">
                            </form> 
                        </div>    
                    </div>
                </div>
            </section>
            <div id="footer">
                <footer> 
                    <div>
                        
                    </div>
                </footer>
            </div>
        </div>
        <?php echo '<script'; ?>
 src="js/jquery-1.11.2.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>  
        <?php echo '<script'; ?>
 src="js/npm.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>