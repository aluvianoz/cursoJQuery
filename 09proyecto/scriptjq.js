$(document).ready(function() {

  //dialogo agregar usuarios
  var dialogo = $('#agregar').dialog({
    autoOpen: false,
    modal: true,
    title: "Agregar usuario",
    buttons: {
      Cancel: function(){
        $('#formulario')[0].reset();
        $(this).dialog("close");
      },
      "Guardar usuario":function(){
        //codigo ajax para agregar usuario
        var datos = $('#formulario').serialize();
        $.ajax({
          url:'agregar.php',
          type:'POST',
          data: datos

        }).done(function(){
          window.location.replace('crud.php');
        });
      }
    },
  });
//dialogo editar usuarios
  var actualizar = $('#editar').dialog({
    autoOpen: false,
    modal: true,
    title: "Editar usuario",
    buttons: {
      Cancel: function(){
        $('#formulario2')[0].reset();
        $(this).dialog("close");
      },
      "Editar usuario":function(){
        //codigo ajax para editar usuario
        var datos = $('#formulario2').serializeArray();
        var id = $('#user').val();
        datos.push({name: 'id', value: id});

        $.ajax({
          url:'actualizar.php',
          type:'POST',
          data:datos
        }).done(function(){
          window.location.replace('crud.php');
        });
      }
    },
  });

  //dialgo de confirmacion de Eliminar
  var confirmar = $('#dialogo-confirm').dialog({
    autoOpen: false,
    resizable: false,
    modal: true,
    title: "Eliminar usuario",
    buttons: {
      Cancel: function(){

        $(this).dialog("close");
      },
      "Eliminar usuario":function(){
        //codigo ajax para agregar usuario
        var id = $('#user').val();

        $.ajax({
          url:'eliminar.php',
          type:'POST',
          data:{'id':id},

        }).done(function(){
          window.location.replace('crud.php');
        });

      }
    },
  });

//evento click para agregar usuario
  $('#nuevo').button().on("click",function(){
    dialogo.dialog("open");
  });

  //event click muestra eliminar usuario
  $('.eliminar').click(function(event){
    $('#user').val($(this).attr("id"));
    confirmar.dialog("open");
  });

  //eventoclick para editar
  $('.editar').click(function(event){
    //recuperar el valor del id
    var id = $(this).attr("id");
    $('#user').val(id);
    //recuperar la info del usuario
    $.ajax({
      url:'editar.php',
      type:'POST',
      dataType:'json',
      data:{'id':id}
    }).done(function(info){
      $('#usuario').val(info[0].usuario);
      $('#nombre').val(info[0].nombre);
      $('#apellido').val(info[0].app);
      $('#telefono').val(info[0].tel);
      $('#email').val(info[0].email);
      actualizar.dialog("open");

    });



  });







});
