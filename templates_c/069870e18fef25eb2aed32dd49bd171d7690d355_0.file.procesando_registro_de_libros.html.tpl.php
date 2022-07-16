<?php
/* Smarty version 3.1.40, created on 2021-11-26 23:48:04
  from 'C:\xampp\htdocs\programacion_web\proyecto_de_libros\05_desarrollo\aplicacion_web_capas\templates\procesando_registro_de_libros.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a16424e55605_89047645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '069870e18fef25eb2aed32dd49bd171d7690d355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_web\\proyecto_de_libros\\05_desarrollo\\aplicacion_web_capas\\templates\\procesando_registro_de_libros.html.tpl',
      1 => 1637966536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a16424e55605_89047645 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">

  var boton_registrar = "<button class ='btn btn-success' onclick='volverARegistrarLibro();'> Nuevo registro </button>";
  var boton_cancelar = "<button class ='btn btn-danger' onclick='irAListadoLibros();'> Ir a listado </button>";

  Fancybox.show([
    {
      src: "<center>¡Registro exitoso! <br />" + boton_registrar + " " + boton_cancelar + "</center>",
      type: "html",
    },
  ]);
  
<?php echo '</script'; ?>
>
<?php }
}
