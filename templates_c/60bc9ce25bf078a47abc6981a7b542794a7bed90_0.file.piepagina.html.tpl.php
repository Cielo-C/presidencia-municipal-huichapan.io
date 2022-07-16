<?php
/* Smarty version 3.1.40, created on 2022-07-15 19:01:40
  from 'C:\xampp\htdocs\programacion_web\presidencia_municipal\05_desarrollo\capas\templates\piepagina.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d19d7487d273_04382389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bc9ce25bf078a47abc6981a7b542794a7bed90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_web\\presidencia_municipal\\05_desarrollo\\capas\\templates\\piepagina.html.tpl',
      1 => 1638095832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d19d7487d273_04382389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\programacion_web\\presidencia_municipal\\05_desarrollo\\capas\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<footer class="py-3 my-4">
		<p class="text-center text-muted"><img src="imgs/gpl_v3.png" width="10%" height="10%" /></p>
		<p class="text-center text-muted">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <a href="www.saulinkx.net" >Cielo</a></p>
</footer>
<?php }
}
