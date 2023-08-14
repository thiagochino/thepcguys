$(function(){
    $('#btn_cargar').click(function(){
                      var form_data = new FormData();                 
             //             form_data.append("ext_arch", ext);
                          form_data.append("Nombre",  $('#id_nombre').val());
                          form_data.append("informacion",    $('#id_informacion').val());
                          form_data.append("Categoria",    $('#id_categoria').val());
                          form_data.append("Precio",   $('#id_precio').val());
                          form_data.append("Stock",   $('#id_stock').val());
                          form_data.append("Img",   $('#id_img').val());
                        console.log(form_data);
                         jQuery.ajax({
                                 url        : 'Mod_cargar.php',
                                 data       : form_data,
                                 cache      : false,
                                 contentType: false,
                                 processData: false,
                                 type       : 'POST',
                                 success: function(data){
                                     console.log ('estoy en success');
                                     console.log (data);
                                 }

                                });
                                                                   
    });
});
