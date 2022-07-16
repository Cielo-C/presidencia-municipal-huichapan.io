<?php
require_once dirname(__FILE__) . "/../include/clases/Libros.class.php";

function execute (&$oSmarty)
{

      $id_libro = isset($_GET['id']) ? $_GET['id'] : "";

    if(!empty($id_libro)){

      $nombreLibro =(new Libros) -> obtenerNombreDeLibroPorId($id_libro);

      $oSmarty -> assign ("tituloLibro", $nombreLibro['titulo']);
      $oSmarty -> assign ("id", $id_libro);
      $oSmarty -> assign ("titulo", "Borrar libro");
      $oSmarty -> assign ("contenido", "borrar_libro.html.tpl");

    }else {

      header("Location: index.php");

    }

}
?>
