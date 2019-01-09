<?php /* Smarty version 3.1.24, created on 2016-03-21 10:58:29
         compiled from "./estilos/templates/acceso.html" */ ?>
<?php
/*%%SmartyHeaderCode:1563856efc5c58db2d5_76666089%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d69c4645c200e187d63d8aa9c0427c8d03faf1' => 
    array (
      0 => './estilos/templates/acceso.html',
      1 => 1458554307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1563856efc5c58db2d5_76666089',
  'variables' => 
  array (
    'user' => 0,
    'error' => 0,
    'error1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56efc5c59d1481_29842989',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efc5c59d1481_29842989')) {
function content_56efc5c59d1481_29842989 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1563856efc5c58db2d5_76666089';
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
    <?php echo '<script'; ?>
 type="text/javascript">
        function mostrar(){
            document.getElementById('desp').style.display = 'block';
        }
        function cerrar(){
            document.getElementById('desp').style.display = 'none';
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function mostrar1(){
            document.getElementById('desp1').style.display = 'block';
        }
        function cerrar1(){    
            document.getElementById('desp1').style.display = 'none';
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function mostrar2(){  
            document.getElementById('desp2').style.display = 'block';
        }
        function cerrar2(){
            document.getElementById('desp2').style.display = 'none';
        }
    <?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 type="text/javascript">
        function mostrarU(){
           $.ajax({
            url: 'mostrar.php',
            type: 'POST',  
            data: 'mostrar=mostrarU'
           }).done(function(resp){
		       var valores = resp;
		       html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Apellido</th><th>Ced</th><th>Email</th><th>Telefono</th></tr></thead><tbody>";
		       for(i=0;i<valores.length;i++){
			       html+="<tr><td>"+(i+1)+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td></tr>";
		       }
		       html+="</tbody></table>";
		       $("#lista").html(html);   
           });
        }   
    <?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 type="text/javascript">
        function mostrarU(){
           $.ajax({
            url: 'mostrar.php',
            type: 'POST',  
            data: 'mostrar=mostrarU'
           }).done(function($array){
		       var valores = new Array(
               
		       html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Apellido</th><th>Ced</th><th>Email</th><th>Telefono</th></tr></thead><tbody>";
		       for(i=0;i<valores.length;i++){
			       html+="<tr><td>"+(i+1)+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td></tr>";
		       }
		       html+="</tbody></table>";
		       $("#lista").html(html);      
           });
        }   
    <?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 type="text/javascript">
        function mostrarU(){
       $.ajax({
            url: 'mostrar.php',
            type: 'POST',  
            data: 'mostrar=mostrarU'
           }).done(function(resp){
               var valores = resp;
               html ="<div class='col-md-6 col-md-offset-2 main'>";
               html += "<div class='table-responsive'>";
               html += "<table class='table table-bordered'><thead><tr><th>contenido</th><th>contenido</th><th>contenido</th><th>contenido</th><th>contenido</th></tr></thead><tbody>";
               for(i=0;i<valores.length;i++){
			       html += "<tr><td>"+(i+1)+"</td><td>"+valores[i][0]+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td></tr>";
		       }
               html += "</tbody></table>";
               html += "</div></div>";
               //html += "<input type='button' value='dato'>";
		       $("#lista").html(html);
           });
        }   
    <?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 type="text/javascript">
          function copia(valor){ 
               document.getElementById('img') = valor;
               $("#lista").html(valor);
               alert(valor);
          }  
    <?php echo '</script'; ?>
>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>   
    <link rel="stylesheet" href="css/font-awesome.min.css"/>  
    <link rel="stylesheet" href="css/acceso.css"/>                             
</head>
<body>   
    <div>
        <nav class="n"> 
           <div class="one_div">
            <a class="a_one" href="index.html"><i class="fa fa-home">Todo en venta</i></a>
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
             <h2 class="hdos_one">Bienvenido <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>     
             <div id="hora"></div>
             <input id="foto" onchange="nombre(this.value)" type="file" name="adjunto" />
             <img id="img" src="" width="300" height="60"/>
             <div>
               <nav class="n_tres">     
                   <a class="" href="#" onclick="mostrar()"><i class="fa fa-user">Editar perfil</i></a>  
               </nav> 
                 
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
                   <input type="hidden" name="edit" values="1"/> 
                   <input class="isix" type="submit" value="editar"/><br /><br />     
                   <input id ="btn" type="button"  value="cerrar" onclick="cerrar()">  
                   </form>
                   </div>
              </div>
              <div id="desp1" style="display: none;">   
                <form>
                    
                    <div id="lista"></div> 
                    
                   <input class="btn1" type="button"  value="mostrar" onclick="mostrarU()"><br/><br/>
                   <input class="btn2" type="button"  value="cerrar" onclick="cerrar1()">  
                </form>  
              </div>
                 <div id="desp2" style="display:none;">  
                    <h3 clas="htres">INCLUYE TU VEHICULO</h3>
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
                       <input type="hidden" name="vender" values="1"/> 
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
               Miguel Morales 2016 © all rights reserverd 
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