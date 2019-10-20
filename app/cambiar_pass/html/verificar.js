var pass1 = $("#pass1").value();
var pass2 = $("#pass2").value();


    if(pass1 != pass2){
      $("#respuesta").html("Las contraseñas no coinciden");
    }else if (pass1.length < 6) {
      $("#respuesta").html("La contraseña debe tener al menos 6 caracteres");
    }
