<?php
/* Smarty version 3.1.40, created on 2021-11-28 23:41:24
  from 'C:\xampp\htdocs\programacion_web\proyecto_de_libros\05_desarrollo\aplicacion_web_capas\templates\borrar_libro.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a40594194ea8_76020063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fcef419fcdd06e2d06dba3d38d8678200a34d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_web\\proyecto_de_libros\\05_desarrollo\\aplicacion_web_capas\\templates\\borrar_libro.html.tpl',
      1 => 1638097185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a40594194ea8_76020063 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">

  var boton_aceptar = "<button class ='btn btn-danger' onclick='borrarLibro(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;'> Borrar </button>";
  var boton_cancelar = "<button class ='btn btn-primary' onclick='irAListadoLibros();'> Ir a listado </button>";

  Fancybox.show ([
    {
      src: "<center>¡Atención! Está a punto de borrar el libro: <br /><b><?php echo $_smarty_tpl->tpl_vars['tituloLibro']->value;?>
</b><p>" + boton_aceptar + " " + boton_cancelar + "</center>",
      type: "html",
    },
  ]);

<?php echo '</script'; ?>
>
<?php }
}
