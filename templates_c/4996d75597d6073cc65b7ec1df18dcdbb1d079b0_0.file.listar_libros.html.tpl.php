<?php
/* Smarty version 3.1.40, created on 2021-11-28 10:34:51
  from 'C:\xampp\htdocs\programacion_web\proyecto_de_libros\05_desarrollo\aplicacion_web_capas\templates\listar_libros.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a34d3b0de091_90271540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4996d75597d6073cc65b7ec1df18dcdbb1d079b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_web\\proyecto_de_libros\\05_desarrollo\\aplicacion_web_capas\\templates\\listar_libros.html.tpl',
      1 => 1638091973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a34d3b0de091_90271540 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
  <h2>
    <b>Listado de Libros</b>
  </h2>
</center>

  <table class="table table-hover table-striped table-bordered " border="0" align="center" bgcolor="#DAD0C2">

    <tr>
      <th><center>Titulo</center></th>
      <th><center>Autor</center></th>
      <th><center>Editorial</center></th>
      <th><center>Género</center></th>
      <th><center>Fecha de publicación</center></th>
      <th><center>ISBN</center></th>
      <th><center>Estado del libro</center></th>
      <th><center>Costo</center></th>
      <th><center>Cantidad en inventario</center></th>
      <th><center>Costo del invenario</center></th>
      <th><center>Editar</center></th>
      <th><center>Eliminar</center></th>
    </tr>
    <?php
$__section_Libros_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['libros']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_Libros_0_total = $__section_Libros_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_Libros'] = new Smarty_Variable(array());
if ($__section_Libros_0_total !== 0) {
for ($__section_Libros_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] = 0; $__section_Libros_0_iteration <= $__section_Libros_0_total; $__section_Libros_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']++){
?>
    <body>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['titulo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['autor'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['editorial'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['genero'];?>
</td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['fecha_publicacion'];?>
</center></td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['isbn'];?>
</center></td>
        <td><?php if ($_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['estado_libro'] == 'n') {?>
            Nuevo
            <?php } elseif ($_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['estado_libro'] == 'u') {?>
            Usado
            <?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['costo'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['cantidad_inventario'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['costo']*$_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['cantidad_inventario'];?>

        </td>
        <td align="center">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </a>
        </td>
        <td align="center">
          <a href="index.php?modulo=borrarLibro&id=<?php echo $_smarty_tpl->tpl_vars['libros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Libros']->value['index'] : null)]['libro_id'];?>
">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
          </a>
        </td>
      </tr>
    </body>
    <?php
}
}
?>

  </table>
<?php }
}
