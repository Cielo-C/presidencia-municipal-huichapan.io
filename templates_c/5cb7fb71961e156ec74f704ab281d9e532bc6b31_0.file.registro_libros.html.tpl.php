<?php
/* Smarty version 3.1.40, created on 2021-12-02 10:52:06
  from 'C:\xampp\htdocs\programacion_web\proyecto_de_libros\05_desarrollo\aplicacion_web_capas\templates\registro_libros.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a89746d175a6_81059572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb7fb71961e156ec74f704ab281d9e532bc6b31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\programacion_web\\proyecto_de_libros\\05_desarrollo\\aplicacion_web_capas\\templates\\registro_libros.html.tpl',
      1 => 1638091669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a89746d175a6_81059572 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
  <h2>
    <b>Registro de Libros</b>
  </h2>
</center>

<form name="registrolibros" id="registrolibros" method="post" action="index.php?modulo=registrolibros" onsubmit="return validar();">
  <table border="0" align="center">
    <tr>
      <td><b>Titulo del libro: </b></td>

      <td><input class="form-control" type="text" name="titulo" id="titulo" onkeypress="borrarValidacion('titulo');"/></td>
    </tr>
    <tr>
      <td><b>Autor: </b></td>
      <td><input class="form-control"  type="text" name="autor" id="autor" onkeypress="borrarValidacion('autor');"/></td>
    </tr>
    <tr>
      <td><b>Género: </b></td>
      <td>
        <select class="form-select" name="genero_id" id="genero_id" onchange="borrarValidacion('genero_id')">
          <option value="0"> -- Selecciona un género --</option>
          <?php
$__section_Generos_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['generos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_Generos_0_total = $__section_Generos_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_Generos'] = new Smarty_Variable(array());
if ($__section_Generos_0_total !== 0) {
for ($__section_Generos_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_Generos']->value['index'] = 0; $__section_Generos_0_iteration <= $__section_Generos_0_total; $__section_Generos_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_Generos']->value['index']++){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['generos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Generos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Generos']->value['index'] : null)]['genero_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['generos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Generos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Generos']->value['index'] : null)]['genero'];?>
 </option>
          <?php
}
}
?>
        </select>
        <div id="errorValidacion"></div>
      </td>
    </tr>
    <tr>
      <td><b>Editorial: </b></td>
      <td>
        <select class="form-select" name="editorial_id" id="editorial_id" onchange="borrarValidacion('editorial_id')">
          <option value="0"> -- Selecciona una editorial --</option>
          <?php
$__section_Editoriales_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['editoriales']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_Editoriales_1_total = $__section_Editoriales_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_Editoriales'] = new Smarty_Variable(array());
if ($__section_Editoriales_1_total !== 0) {
for ($__section_Editoriales_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_Editoriales']->value['index'] = 0; $__section_Editoriales_1_iteration <= $__section_Editoriales_1_total; $__section_Editoriales_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_Editoriales']->value['index']++){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['editoriales']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Editoriales']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Editoriales']->value['index'] : null)]['editorial_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['editoriales']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Editoriales']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Editoriales']->value['index'] : null)]['editorial'];?>
 </option>
          <?php
}
}
?>
        </select>
        <div id="errorValidacionEditorial"></div>
      </td>
    </tr>
    <tr>
      <td><b>Fecha de publicación: </b></td>
      <td><input class="form-control" type="date" name="fecha_publicacion" id="fecha_publicacion"onchange="borrarValidacion('fecha_publicacion')"/></td>
    </tr>
    <tr>
      <td><b>ISBN: </b></td>
      <td><input class="form-control" type="text" name="isbn" id="isbn" onkeypress="borrarValidacion('isbn')"/></td>
    </tr>
    <tr>
      <td><b>Costo del libro: </b></td>
      <td><input class="form-control" type="text" name="costo" id="costo" onkeypress="borrarValidacion('costo')"/></td>
    </tr>
    <tr>
      <td><b>Cantidad en inventario: </b></td>
      <td><input class="form-control" type="text" name="cantidad_inventario" id="cantidad_inventario" onkeypress="borrarValidacion('cantidad_inventario')"/></td>
    </tr>
    <tr>
      <td><b>Estado del libro: </b></td>
      <td>

        <input type="radio" name="estado_libro" id="estado_libro" value="N" onclick="borrarValidacion('radioEstadoLibro');"/><b>Nuevo</b>
        <input type="radio" name="estado_libro" id="estado_libro" value="U" onclick="borrarValidacion('radioEstadoLibro');"/><b>Usado</b>
        <div id="errorValidacionEstadoLibro"></div>
       </td>
    </tr>
    <tr>
      <td></td>
      <td align="right"><input class="btn btn-secondary" type="submit" name="action" id="action" value="Registrar" /></td>
    </tr>
  </table>
</form>
<?php }
}
