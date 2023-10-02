$(function(){
    $("#btn_buscar").click(function(){
   
        //console.log ("hola soy consola");
        let dato=$("#input_buscar").val();
        //console.log(dato);
       // let info_tabla='<tr><th scope="row">2</th><td>Jacob</td><td>Thornton</td><td>@mod</td></tr>';
       // $("tabla").html(info_tabla);
          //  let dato_busca=$('#input_buscar').val();
        $.ajax({
                url:'mod_buscar.php',
                data:{a_buscar:dato},
                success:function(resp){
                    let info=JSON.parse(resp);
                    console.log(resp);
                    let html='';
                    info.forEach(dato=>{
                        html+=`<tr>
                                    <td>${dato.Idarticulo}</td>
                                    <td>${dato.Nombre}</td>
                                    <td>${dato.Informacion}</td>
                                    <td>${dato.Categoria}</td>
                                    <td>${dato.Precio}</td>
                                    <td>${dato.Stock}</td>
                                </tr>`;
                    }); 
                    
                    $('#latabla').html(html)    
                }
            });

    })
})