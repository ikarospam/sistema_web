function save_user(){
	  event.preventDefault()
	var nombre=document.getElementById("nomb").value
	var apellidos=document.getElementById("app_do").value
	var direccion=document.getElementById("adress").value
	var correo=document.getElementById("email").value
	var numero=document.getElementById("tel").value
	var usuario=document.getElementById("user").value
	var rol=document.getElementById("cargo").value
	var pass1=document.getElementById("pass1").value
	var pass2=document.getElementById("pass2").value
	var url="funciones/usuario/save_user.php";

	if (pass1===pass2) {
	$.ajax({
    type:"POST",
    url:url,
    data:{nombre:nombre,apellidos:apellidos,direccion:direccion,correo:correo,numero:numero,
    usuario:usuario,rol:rol,pass1:pass1},
    success: function(datos){
      $("#resultado_user").html(datos);
      }
    });

	}else{
		Swal.fire({
  icon: 'error',
  title: '¡ Error… !   ',
  text: 'Las contraseñas deben coincidir'
})
	}
}

function ver(id_usuario){
	var url="funciones/usuario/ver_user.php";
	$.ajax({
    type:"POST",
    url:url,
    data:{id_usuario:id_usuario},
    success: function(datos){
      $("#conte_user").html(datos);
      }
    });
}

function upde_user(id_usuario){
  var url="funciones/usuario/form_update.php";
  $.ajax({
    type:"POST",
    url:url,
    data:{id_usuario:id_usuario},
    success: function(datos){
      $("#ude_user").html(datos);
      }
    });

}

function editar_user(){
  var id=document.getElementById("id_user").value
  var nombre=document.getElementById("nomb").value
  var apellidos=document.getElementById("app_do").value
  var direccion=document.getElementById("adress").value
  var correo=document.getElementById("email").value
  var numero=document.getElementById("tel").value
  var rol=document.getElementById("cargo").value
  var url="funciones/usuario/update_user.php";
    Swal.fire({
  title: '¿Desea aplicar los cambios?',
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
   cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
   $.ajax({
     type:"POST",
     url:url,
     data:{id:id,nombre:nombre,apellidos:apellidos,direccion:direccion,correo:correo,numero:numero,rol:rol},
     success: function(datos){
       $("#respuesta_usuario").html(datos);
       }
     });
  }
})

}



function delete_user(id_usuario){
	var url="funciones/usuario/delete_user.php";

	Swal.fire({
  title: '¿Desea eliminar este usuario?',
  text: "Si se completa esta acción no se podrá restablecer los cambios",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
   cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
	$.ajax({
    type:"POST",
    url:url,
    data:{id_usuario:id_usuario},
    success: function(datos){
      $("#respuesta_usuario").html(datos);
      }
    });
  }
})
}

//// fin crup de usuario
///
///
///





  ////////////////////////////////
  ///////////////////////////////
  ///////////// inicio crup usuario
  //////////////////////////////
  /////////////////////////////
  

    function muni(){
    var id=document.getElementById("estado").value
    var url="funciones/clientes/municipios.php";
    
      $.ajax({
    type:"POST",
    url:url,
    data:{id:id},
    success: function(datos){
      $("#municipio").html(datos);
      }
    });
  }


  function save_cliente(){
    event.preventDefault()
    $("#sacli2").remove();
    $("#reset_clientes").prop('disabled', true);
    $("#sacli1").prepend('<button class="btn btn-success" type="button" disabled id="sacli2"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Guardando...</button>');
   var nom=document.getElementById("nom").value
   var app=document.getElementById("apellido").value
   var rfc=document.getElementById("rfc").value
   var adre1=document.getElementById("adres1").value
   var estado=$("#estado option:selected").html();
   var municipio=document.getElementById("municipio").value
   var nacionalidad=document.getElementById("nacionalidad").value
   var tel1=document.getElementById("tel1").value
   var email=document.getElementById("email").value
   var civil=document.getElementById("civil").value
   var ocupacion=document.getElementById("ocupacion").value
   var nom_empre=document.getElementById("nom_empre").value
   var puesto=document.getElementById("puesto").value
   var giro=document.getElementById("giro").value
   var adre2=document.getElementById("adres2").value
   var tel2=document.getElementById("tel2").value
   var adre3=document.getElementById("adres3").value
   var dto=document.getElementById("dto").value
   var url="funciones/clientes/add_clientes.php";

    $.ajax({
    type:"POST",
    url:url,
    data:{nom:nom,app:app,rfc:rfc,adre1:adre1,estado:estado,municipio:municipio,nacionalidad:nacionalidad,tel1:tel1,email:email,
      civil:civil,ocupacion:ocupacion,nom_empre:nom_empre,puesto:puesto,giro:giro,adre2:adre2,tel2:tel2,adre3:adre3,dto:dto},
    success: function(datos){
      $("#sacli2").remove();
      $("#reset_clientes").prop('disabled', false);
      $("#sacli1").prepend('<button type="submit" class="btn btn-success" id="sacli2"><ion-icon name="save-sharp"></ion-icon> Guardar</button>');
      $("#respuesta_clientes").html(datos);
      }
    });

  }


function ver_clientea(id_cliente){
     var url="funciones/clientes/ve_cliente.php";

    $.ajax({
    type:"POST",
    url:url,
    data:{id_cliente:id_cliente},
    success: function(datos){
     
      $("#conte_cliente").html(datos);
      }
    });
}




function upde_cliente(id_cliente){
  var url="funciones/clientes/form_update.php?id_cliente";

$.ajax({
        
            url: url,
            type: 'GET',
            data:{id_cliente:id_cliente},
            dataType: "html",
            async: true,
            success: function(data) {
                $('#contenido').html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });        

}


function muni_upde($jey){
  var estado=document.getElementById("estado").value
  var id=$jey;
  var url="funciones/clientes/muni_update.php"

        $.ajax({
    type:"POST",
    url:url,
    data:{id:id,estado:estado},
    success: function(datos){
      $("#municipio_upddat").html(datos);
      }
    });

}



function editar_cliente(){
   event.preventDefault()
   
var id=document.getElementById("jey").value
var nom=document.getElementById("nom").value
var app=document.getElementById("apellido").value
var rfc=document.getElementById("rfc").value
var adre1=document.getElementById("adres1").value
var estado=$("#estado option:selected").html();
var municipio_upddat=document.getElementById("municipio_upddat").value  
var nacionalidad=document.getElementById("nacionalidad").value
var tel1=document.getElementById("tel1").value
var email=document.getElementById("email").value
var civil=document.getElementById("civil").value
var ocupacion=document.getElementById("ocupacion").value
var nom_empre=document.getElementById("nom_empre").value
var puesto=document.getElementById("puesto").value
var giro=document.getElementById("giro").value
var adre2=document.getElementById("adres2").value
var tel2=document.getElementById("tel2").value
var adre3=document.getElementById("adres3").value
var dto=document.getElementById("dto").value
var url="funciones/clientes/updte_cliente.php";
   

      Swal.fire({
  title: '¿Desea aplicar los cambios?',
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
   cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
   
    $("#reset_clientes").prop('disabled', true);
    $("#sacli2").remove();
   $("#sacli1").prepend('<button type="button" class="btn btn-info" style="align: middle;"  id="sacli2"><ion-icon name="refresh-circle-sharp"></ion-icon> Actualizando ...</button>');
   $.ajax({
     type:"POST",
     url:url,
     data:{id:id,nom:nom,app:app,rfc:rfc,adre1:adre1,estado:estado,municipio_upddat:municipio_upddat,nacionalidad:nacionalidad,tel1:tel1,email:email,
      civil:civil,ocupacion:ocupacion,nom_empre:nom_empre,puesto:puesto,giro:giro,adre2:adre2,tel2:tel2,adre3:adre3,dto:dto},
     success: function(datos){
    //  
    $("#reset_clientes").prop('disabled', false);
    $("#sacli2").remove();
    $("#sacli1").prepend(' <button type="button" class="btn btn-info" style="align: middle;" onclick="editar_cliente();" id="sacli2"><ion-icon name="refresh-circle-sharp"></ion-icon> Actualizar</button>');
       $("#resultform_cliente").html(datos);
        
       }
     });
  }
})

}









function delete_cliente(id_cliente){
     var url="funciones/clientes/delete_cliente.php";
      Swal.fire({
  title: '¿Desea eliminar este registro?',
  text: "Si se completa esta acción no se podrá restablecer los cambios",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
   cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
  $.ajax({
    type:"POST",
    url:url,
    data:{id_cliente:id_cliente},
    success: function(datos){
      $("#respuesta_clientelis").html(datos);
      }
    });
  }
})


}




function excel_cliente(){
  url = "funciones/excel/excel_cliente.php";
$(location).attr('href',url);
}


function excel_usuario(){
url = "funciones/excel/excel_usuario.php";
$(location).attr('href',url);
}

function pdf_usuario(){
url = "funciones/pdfw/usuario/pdf_usuario.php";
$(location).attr('href',url);
}



  ///////////////////////////////
  //////////////////////////////
  ///////////// fin crup usuario
  /////////////////////////////
  ////////////////////////////
  // function genepdf(){
  //   var url="funciones/pdfw/cliente/pdf.php";
  //     $.ajax({
  //   type:"POST",
  //   url:url,
  //   data:{},
  //   success: function(datos){
  //     $("#respuesta_clientelis").html(datos);
  //     }
  //   });
  // }