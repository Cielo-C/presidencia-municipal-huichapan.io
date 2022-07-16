<?php
/* Smarty version 3.1.40, created on 2021-11-03 16:12:59
  from '/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/templates/layout.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6182b50b8f71b2_47819217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04e663868a82bcafe52bfe913d6156400e96f9c' => 
    array (
      0 => '/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/templates/layout.html.tpl',
      1 => 1635955976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.html.tpl' => 1,
    'file:piepagina.html.tpl' => 1,
  ),
),false)) {
function content_6182b50b8f71b2_47819217 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

      <title>Plataforma base de libros - [<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
]</title>

      <link rel="icon" type="image/png" href="imgs/icono.png">
      <link rel="stylesheet" type="text/css" href="js/material_design/css/bootstrap.min.css" />

      <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js" ><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="js/material_design/js/bootstrap.bundle.min.js" ><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones/libros.js"><?php echo '</script'; ?>
>

  </head>

  <body>
  	<?php $_smarty_tpl->_subTemplateRender("file:menu.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
    	<?php $_smarty_tpl->_assignInScope('template', ("templates/").($_smarty_tpl->tpl_vars['contenido']->value));?>
    	<?php if (!empty($_smarty_tpl->tpl_vars['contenido']->value) && file_exists($_smarty_tpl->tpl_vars['template']->value)) {?>
    	   <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    	<?php } else { ?>
        	<div class="row">
        		<div class="col-sm-4 col-md-6 col-md-offset-3 alert alert-danger">
        	  		La plantilla <?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
 no existe
        		</div>
        	</div>
    	<?php }?>
    	<div class="row">
    	    <?php $_smarty_tpl->_subTemplateRender("file:piepagina.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    	</div>
    </div>
  </body>
</html>
<?php }
}
