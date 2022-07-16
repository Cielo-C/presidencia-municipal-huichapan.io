<script type="text/javascript">

  var boton_aceptar = "<button class ='btn btn-danger' onclick='borrarLibro({$id};'> Borrar </button>";
  var boton_cancelar = "<button class ='btn btn-primary' onclick='irAListadoLibros();'> Ir a listado </button>";

  Fancybox.show ([
    {
      src: "<center>¡Atención! Está a punto de borrar el libro: <br /><b>{$tituloLibro}</b><p>" + boton_aceptar + " " + boton_cancelar + "</center>",
      type: "html",
    },
  ]);

</script>
