
function agregaform(datos)
{
    
    d = datos.split('||');
    
    $('#id').val(d[0]);
    $('#titulo').val(d[1]);
    $('#referencia').val(d[2]);
    $('#precio').val(d[3]);
    
}

function actualizaDatos()
{
    
    id = $('#id').val();
    referencia = $('#referencia').val();
    precio = $('#precio').val();
    titulo = $('#titulo').val(); 
    
    cadena = "id=" + id +
             "&referencia=" + referencia +
             "&precio=" + precio +
             "&titulo=" + titulo;
    
    $.ajax({
        
        type:"POST",
        url:"ajax/actualizar/ajaxActualizar.php",
        data:cadena,
        success:function(r)
        {
            
            if(r==1)
            {
                
                //alertify.success("Actualizado con exito :) ");
                location.reload();
                
            }
            else
            {
                
                alertify.error("Fallo el servidor :( ");
                
            }
            
        }
        
    });
}