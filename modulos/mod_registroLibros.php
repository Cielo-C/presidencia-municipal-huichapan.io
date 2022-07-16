<?php
require_once dirname(__FILE__) . "/../include/clases/Catalogos.class.php";
require_once dirname(__FILE__) . "/../include/clases/Libros.class.php";

function execute (&$oSmarty)
{

    $action = isset($_POST['action']) ? $_POST['action'] :"";

    if($action =="Registrar"){

      $oLibros = new Libros();

      $titulo = $_POST['titulo'];
      $autor = $_POST['autor'];
      $generoid = $_POST['genero_id'];
      $editorialid = $_POST['editorial_id'];
      $fechapublicacion  = $_POST[('fecha_publicacion')];
      $isbn = $_POST['isbn'];
      $costo = $_POST['costo'];
      $cantidadinventario = $_POST['cantidad_inventario'];
      $estadolibro = $_POST['estado_libro'];
      $fechaactualizacion=date("Y-m-d H:i:s");

      $sql= "INSERT INTO libros(titulo, autor, editorial_id, genero_id,
            fecha_publicacion, isbn, estado_libro, costo, cantidad_inventario,
            fecha_actualizacion)
            VALUES('{$titulo}','$autor','$editorialid','$generoid','$fechapublicacion',
            '$isbn','$estadolibro',$costo,$cantidadinventario,'$fechaactualizacion')";

      $oLibros -> registrarLibro($sql);

      $oSmarty -> assign ("titulo", "Registro de libros");
      $oSmarty -> assign ("contenido", "procesando_registro_de_libros.html.tpl");

      //header("Location: index.php?modulo=listarLibros");

    }else if($action == ""){

      $oCatalogo = new Catalogos();

      $aGeneros     = $oCatalogo -> obtenerGeneros();
      $aEditoriales = $oCatalogo -> obtenerEditoriales();

      $oSmarty -> assign("generos",$aGeneros);
      $oSmarty -> assign("editoriales",$aEditoriales);
      $oSmarty -> assign ("contenido", "registro_libros.html.tpl");
      $oSmarty -> assign ("titulo", "Registro de libros");
    }

    $oSmarty -> assign ("titulo", "Registro libros");

}
?>
