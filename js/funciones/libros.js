function validar(){
  /*validar con un color en la caja de texto*/
var red='#FF7B7B';

  if($("#titulo").val()=='')
  {
    $("#titulo").css('background',red);
    $("#titulo").focus();

    return false;
  }
  if($("#autor").val()=='')
  {
    $("#autor").css('background',red);
    $("#autor").focus();

    return false;
  }
  /*Validar un compos*/
  if($("#genero_id").val()== 0)
  {
    $('#errorValidacion').css('color',red).html('<div class="alert alert-danger" role="alert"> *Falta elegir el genero </div>');

    return false;
  }

  if($("#editorial_id").val()== 0)
  {
    $('#errorValidacionEditorial').css('color',red).html('<div class="alert alert-danger" role="alert">  *Falta elegir la editorial </div>');

    return false;
  }

  if($("#fecha_publicacion").val()== "")
  {
    $("#fecha_publicacion").css('background',red);
    $("#fecha_publicacion").focus();

    return false;
  }

  if($("#isbn").val()=='')
  {
    $("#isbn").css('background',red);
    $("#isbn").focus();

    return false;
  }

  if($("#costo").val()=='')
  {
    $("#costo").css('background',red);
    $("#cost0").focus();

    return false;
  }

  if($("#cantidad_inventario").val()=='')
  {
    $("#cantidad_inventario").css('background',red);
    $("#cantidad_inventario").focus();

    return false;
  }

  if($('input:radio[name=estado_libro]:checked').val() == undefined)
  {
  $("#errorValidacionEstadoLibro").css('color',red).html('<span>*Favor de seleccionar una opcion ya que al parecer no la has seleccionado</span>');

    return false;
  }


}


/*borrar validacion*/
 function borrarValidacion(control){

   var color="#FFFFFF";
   $("#"+ control).css('background',color);

   if(control== 'genero_id'){

$("#errorValidacion").html("<div id='errorValidacion'></div>");

   }

   if(control== 'editorial_id'){

$("#errorValidacionEditorial").html("<div id='errorValidacionEditorial'></div>");

   }
   if (control == 'radioEstadoLibro'){
     $("#errorValidacionEstadoLibro").html('<div id="errorValidacionEstadoLibro"> </div>');

   }

 }
 function volverARegistrarLibro(){
   window.location.href = "index.php?modulo=registroLibros";
 }
 function irAListadoLibros(){
   window.location.href = "index.php?modulo=listarLibros";
 }

 function borrarLibro(idLibro){

   $.ajax({
     type: "POST",
     url: "ajax_jquery/ajax_borrarLibro.php",
     data:{id:idLibro},
     complete: function(response){
       if(response.responseText == "ok"){
         window.location.href = "index.php?modulo=listarLibros";
        }
      }
    });
}
