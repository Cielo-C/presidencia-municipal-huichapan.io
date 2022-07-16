<center>
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
          {section name=Generos loop=$generos}
          <option value="{$generos[Generos].genero_id}"> {$generos[Generos].genero} </option>
          {/section}
        </select>
        <div id="errorValidacion"></div>
      </td>
    </tr>
    <tr>
      <td><b>Editorial: </b></td>
      <td>
        <select class="form-select" name="editorial_id" id="editorial_id" onchange="borrarValidacion('editorial_id')">
          <option value="0"> -- Selecciona una editorial --</option>
          {section name=Editoriales loop=$editoriales}
          <option value="{$editoriales[Editoriales].editorial_id}"> {$editoriales[Editoriales].editorial} </option>
          {/section}
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
