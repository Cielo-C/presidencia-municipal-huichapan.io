<?php
/* Smarty version 3.1.40, created on 2021-11-28 11:37:14
  from 'C:\xampp\htdocs\programacion_web\proyecto_de_libros\05_desarrollo\aplicacion_web_capas\templates\piepagina.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a35bdacf8207_28150176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9fe2e49f46662f6bd8e3a050c02bb1876d48faf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_web\\proyecto_de_libros\\05_desarrollo\\aplicacion_web_capas\\templates\\piepagina.html.tpl',
      1 => 1638095832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a35bdacf8207_28150176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\programacion_web\\proyecto_de_libros\\05_desarrollo\\aplicacion_web_capas\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<footer class="py-3 my-4">
		<p class="text-center text-muted"><img src="imgs/gpl_v3.png" width="10%" height="10%" /></p>
		<p class="text-center text-muted">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <a href="www.saulinkx.net" >Cielo</a></p>
</footer>
<?php }
}
