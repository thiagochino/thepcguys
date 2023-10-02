<?php
    include("conexion.php");
    $buscar= $_POST["a_buscar"];
    if (!empty($buscar)){
      $query="select `Idarticulo`, `Nombre`, `Informacion`, `Categoria`, `Precio`, `Stock` from productos where estado = 1 and Informacion=".$buscar;
      $result=mysqli_query($conexion,$query);
      if(!$result){
        die("error".mysqli_error($conexion));
      };
      $json=array();
      while($row=mysqli_fetch_array($result)){
        $json[]=array("Idarticulo"=>$row["Idarticulo"],
                      "Nombre"=>$row["Nombre"],
                      "Informacion"=> $row['Informacion'],
                      "Categoria"=>$row["Categoria"],
                      "Precio"=>$row["Precio"]
                      "Stock"=>$row["Stock"]
                    );
                      
      };
      //$(document).on("clic",.boton",function(){
      //$(this).attr("data_pk");
      //})
      //$json="hola";
      $json_string=json_encode($json);
      echo $json_string;
      //echo $buscar;
    };
?>  