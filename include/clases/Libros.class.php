<?php
require_once dirname(__FILE__) . "/../persistencia/database.php";

class Libros{

  function registrarLibro($data){

      $db = getDb();

      $result = $db -> Execute($data);

      return $result;

  }
  function obtenerLibros(){

      $db = getDb();

      $sql = "SELECT * FROM libros INNER JOIN editoriales ON libros.editorial_id=editoriales.editorial_id INNER JOIN generos ON libros.genero_id=generos.genero_id ORDER BY titulo ASC";

      $result = $db -> GetAll($sql);

      return $result;

  }

  function obtenerNombreDeLibroPorId($idLibro){

      $db = getDb();

      $sql = "SELECT titulo FROM libros WHERE libro_id={$idLibro}";

      $result = $db -> GetAll($sql);

      return $result[0];

    }

    function borrarLibro($id){

        $db = getDb();

        $sql = "DELETE FROM libros WHERE libro_id={$id}";

        $result = $db -> Execute($sql);

        return $result;
      }
  }
?>
