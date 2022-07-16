<?php
session_start ();
/**
*** Última modificación: 03 de noviembre de 2021
*** @utor: S@ulinkx
**/
ini_set ("display_errors", "Off");

header("Content-type: text/html; charset=UTF-8");
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

require_once dirname(__FILE__) . "/include/smarty.php";

// Obtiene el nombre del modulo desde la URL
$modulo = isset ($_GET ["modulo"]) ? $_GET ["modulo"] : "";

// Si no se especifico un nombre de modulo asigna
// como modulo predeterminado a inicio

if (empty ($modulo)) {
	$modulo = "inicio";
}

$archivoModulo = dirname(__FILE__) . "/modulos/mod_" . $modulo . ".php";
$oSmarty -> assign ("errorMensaje",  "");

if (file_exists ($archivoModulo)) {

    require_once $archivoModulo;
    $estado = execute ($oSmarty);

    if (isset ($estado))
    {
        $datosPlantilla = $plantillas [$modulo][$estado];
        $oSmarty -> assign ("contenido", $datosPlantilla ["plantilla"]);
        $oSmarty -> assign ("titulo", $datosPlantilla ["titulo"]);
    }

} else {

	$oSmarty -> assign ("modulo", $modulo);
	$oSmarty -> assign ("contenido", "moduloNoEncontrado.html.tpl");

}

$oSmarty -> display ("layout.html.tpl");
?>
