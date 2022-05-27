$(document).ready(function() {
    ajaxVerUsuario();
    }) 

function ajaxVerUsuario(){
   $.ajax({
        url: "../controlador/accion/ajax_verUsuario.php",
        success: function(result){
            mostar(parse(result));  
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
    }});
}
function mostar(result){
    document.getElementById("nombre").innerHTML="Nombre: "+result.nombre+' '+result.apellido;
    document.getElementById("correo").innerHTML="Correo: "+result.correo;
}
function insertarDatosUsuarioEnModal(){
    $("#editar").on("click",function(){
        $.ajax({
            type: "POST",
            url: "../controlador/accion/ajax_verUsuario.php",
            success: function(data){
                let usuario = JSON.parse(data)
                $("#modalEditarUsuario").modal('show');
                $("#modalEditarUsuario input[name='nombre']").val(usuario.nombre)
                $("#modalEditarUsuario input[name='correo']").val(usuario.correo)
                $("#modalEditarUsuario input[name='contrasena']").val(usuario.contrasena)
              
            }
        })
    })
}
var modal = document.getElementById('editarModal')
modal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  $.ajax({
    type: "POST",
    url: "../controlador/accion/ajax_verUsuario.php",
    success: function(data){
        let usuario = JSON.parse(data)
        
        $("#editarModal input[id='Nombre']").val(usuario.nombre)
        $("#editarModal input[id='Correo']").val(usuario.correo)
        $("#editarModal input[id='Contrasena']").val(usuario.contrasena)
    }
})
})
function actualizar(){
    let nombre=$('#Nombre').val();
    let correo=$('#Correo').val();
    let contrasena=$('#Contrasena').val();
    $.ajax({
        type: "POST",
        data: {"nombre" : nombre,
        "correo" : correo,
        "contrasena" : contrasena},
        url: "../controlador/accion/ajax_editarUsuario.php",
        success: function(respuesta){
           ajaxVerUsuario();
           if(respuesta==1)
           {
            //alert("Actualizado")
           }
           else {
               alert ("No se pueden dejar campos vacios")
            }
        }
    })
}