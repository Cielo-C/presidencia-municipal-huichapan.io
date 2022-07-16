<?php
require_once dirname(__FILE__) . "/../persistencia/database.php";

class Catalogos{

  function obtenerGeneros(){

    $db = getDb();

    $sql = "SELECT * FROM generos ORDER BY genero ASC";

    $result = $db -> GetAll($sql);

    return $result;

  }

  function obtenerEditoriales(){

    $db = getDb();

    $sql = "SELECT * FROM editoriales ORDER BY editorial ASC";

    $result = $db -> GetAll($sql);

    return $result;

  }

}

?>
