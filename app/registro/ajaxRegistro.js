$(document).on('ready',function(){
  $('#btn-ingresar').click(function(){

  var pass1 = $("#pass1").value;
  var pass2 = $("#pass2").value;
  var numPass = pass1.length;
  var nombre = $("#nombre").value;
  var usuario = $("#usuario").value;
  var documento = $("#documento").value;
  var telefono = $("#telefono").value;
  var direccion = $("#direccion").value;
  var barrio = $("#barrio").value;
  var ciudad = $("#ciudad").value;

  if(numPass < 7){

      $("#contra").html("La contrseña debe der de minimo 7 caracteres");

  }else{

    if(pass1 != pass2){

      $("#contra").html("Las contraseñas no coinciden");

    }else{

        var parametros = {
                "nombre"   : nombre,
                "usuario"  : usuario,
                "pass"     : pass,
                "documento": documento,
                "telefono" : telefono,
                "direccion": direccion,
                "barrio"   : barrio,
                "ciudad"   : ciudad
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '../registro/registro.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#btn-ingresar").value("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#btn-ingresar").value("Registro exitoso");
                }
        });

      });

    });

    }
  }
