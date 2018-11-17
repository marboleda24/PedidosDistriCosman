function preguntarSiNo(id)
{
    
    alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este producto?', 
                  function(){ eliminarDatos(id) }
                , function(){ alertify.error('Cancel')});
    
}

function eliminarDatos(id)
{
    
    cadena = "id=" + id;
    
    $.ajax({
        
        type:"POST",
        url:"ajax/eliminarProducto/ajaxEliminar.php",
        data:cadena,
        success:function(r){
            
            if(r == 1)
            {
                
                //alertify.success("Eliminado con exito!");
                location.reload();
                
            }
            else
            {
                
                alertify.error("Fallo el servidor :( ");
                
            }
            
        }
        
    })
    
}