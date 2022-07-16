<center>
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
    {section name=Libros loop=$libros}
    <body>
    <tr>
        <td>{$libros[Libros].titulo}</td>
        <td>{$libros[Libros].autor}</td>
        <td>{$libros[Libros].editorial}</td>
        <td>{$libros[Libros].genero}</td>
        <td><center>{$libros[Libros].fecha_publicacion}</center></td>
        <td><center>{$libros[Libros].isbn}</center></td>
        <td>{if $libros[Libros].estado_libro =='n'}
            Nuevo
            {else if $libros[Libros].estado_libro =='u'}
            Usado
            {/if}
        </td>
        <td>{$libros[Libros].costo}</td>
        <td align="center">{$libros[Libros].cantidad_inventario}</td>
        <td>{$libros[Libros].costo * $libros[Libros].cantidad_inventario}
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
          <a href="index.php?modulo=borrarLibro&id={$libros[Libros].libro_id}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
          </a>
        </td>
      </tr>
    </body>
    {/section}

  </table>
