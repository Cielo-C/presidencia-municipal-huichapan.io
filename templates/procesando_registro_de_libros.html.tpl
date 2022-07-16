<script type="text/javascript">

  var boton_registrar = "<button class ='btn btn-success' onclick='volverARegistrarLibro();'> Nuevo registro </button>";
  var boton_cancelar = "<button class ='btn btn-danger' onclick='irAListadoLibros();'> Ir a listado </button>";

  Fancybox.show([
    {
      src: "<center>¡Registro exitoso! <br />" + boton_registrar + " " + boton_cancelar + "</center>",
      type: "html",
    },
  ]);
  
</script>
