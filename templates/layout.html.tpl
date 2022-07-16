<!DOCTYPE HTML>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

      <title>Plataforma base de libros - [{$titulo}]</title>

      <link rel="icon" type="image/png" href="imgs/icono.png">
      <link rel="stylesheet" type="text/css" href="js/material_design/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

      <script type="text/javascript" src="js/jquery.min.js" ></script>
      <script type="text/javascript" src="js/material_design/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
      <script type="text/javascript" src="js/funciones/libros.js"></script>

  </head>

  <body>
  	{include file="menu.html.tpl"}
    <div class="container">
    	{assign var="template" value="templates/"|cat:$contenido}
    	{if not empty($contenido) and file_exists ($template)}
    	   {include file=$contenido}
    	{else}
        	<div class="row">
        		<div class="col-sm-4 col-md-6 col-md-offset-3 alert alert-danger">
        	  		La plantilla {$contenido} no existe
        		</div>
        	</div>
    	{/if}
    	<div class="row">
    	    {include file="piepagina.html.tpl"}
    	</div>
    </div>
  </body>
</html>
