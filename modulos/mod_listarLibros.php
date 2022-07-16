<?php
require_once dirname(__FILE__) . "/../include/clases/Libros.class.php";

function execute (&$oSmarty)
{

      $oLibro = new Libros();

      $aLibros    = $oLibro -> obtenerLibros();

  //  $costo_inventario = $dataLibros['costo'] * $dataLibros ['cantidad_inventario'];

      $oSmarty -> assign ("contenido", "listar_libros.html.tpl");
      $oSmarty -> assign ("libros", $aLibros);
    //  $oSmarty -> assign ("costo_inventario", $costo_inventario);
      $oSmarty -> assign ("titulo", "Listado de libros");

}
?>
