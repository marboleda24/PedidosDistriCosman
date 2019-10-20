function agregaform(datos)
{
    
    d = datos.split('||');
    
    $('#id').val(d[0]);
    $('#titulo').val(d[1]);
    $('#precio').val(d[2]);
    $('#referencia').val(d[3]);
    $('#proveedor').val(d[4]);
    
    
    id_producto = $('#id_producto').val();
    referencia = $('#referencia').val();
    titulo = $('#titulo').val(); 
    cantidad = $('#cantidad').val();
    precio = $('#precio').val();
    proveedor = $('#proveedor').val();
    
    cadena = "id_producto=" + id_producto +
             "&referencia=" + referencia +
             "&cantidad=" + cantidad +
             "&precio=" + precio +
             "&proveedor=" + proveedor +
             "&titulo=" + titulo;
    
    $.ajax({
        
        type:"POST",
        url:"ajax/agregarProducto/ajaxAgregar.php",
        data:cadena,
        success:function(r)
        {
            
            if(r)
            {
                
                //cantidad = $('#cantidad').val(1);
                alertify.success("Producto agregado :) ");
                //location.reload();
                
            }
            else
            {
                
                alertify.error("Fallo el servidor :( ");
                
            }
            
        }
        
    });
}