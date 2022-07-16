<?php
require_once dirname(__FILE__) . "/../include/clases/Libros.class.php";

$id = $_POST['id'];

$respuesta = {new Libros} -> borrarLibro($id):

echo "ok";

?>
