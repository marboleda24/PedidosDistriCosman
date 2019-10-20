
function agregaproductos(id)
{
    
    $('#id_img').val(id);
 
}

function ingresaProducto()
{
    
    titulo = $('#titulo').val();
    referencia = $('#referencia').val();
    precio = $('#precio').val();
    proveedor = $('#proveedor').val();
    id_img = $('#id_img').val(); 
    
    if(proveedor == 0)
    {
        alert('Selecciona un proveedor');
    }
    else{
        cadena = "titulo=" + titulo +
             "&referencia=" + referencia +
             "&precio=" + precio +
             "&proveedor=" + proveedor +
             "&id_img=" + id_img;
    
    $.ajax({
        
        type:"POST",
        url:"ajax/ingresar/ajaxIngresar.php",
        data:cadena,
        success:function(r)
        {
            
            if(r==1)
            {
                $('#titulo').val('');
                $('#referencia').val('');
                alertify.success("Producto ingresado con exito!");
                
            }
            else
            {
                
                alertify.error("Fallo el servidor :( ");
                
            }
            
        }
        
    

    
    });
        
    }
}