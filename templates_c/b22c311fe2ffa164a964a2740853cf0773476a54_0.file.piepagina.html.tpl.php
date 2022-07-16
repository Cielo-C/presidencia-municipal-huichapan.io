<?php
/* Smarty version 3.1.40, created on 2021-11-03 16:29:38
  from '/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/templates/piepagina.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6182b8f2e03424_95793702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22c311fe2ffa164a964a2740853cf0773476a54' => 
    array (
      0 => '/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/templates/piepagina.html.tpl',
      1 => 1635956977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6182b8f2e03424_95793702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<footer class="py-3 my-4">
		<p class="text-center text-muted"><img src="imgs/gpl_v3.png" width="10%" height="10%" /></p>
		<p class="text-center text-muted">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <a href="www.saulinkx.net" >S@ulinkx</a></p>
</footer>
<?php }
}
