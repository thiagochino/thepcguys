<?php
     include("conexion.php");
     $cargar= $_POST["form_data"];
       $query="INSERT INTO `productos`(`Nombre`, `Informacion`, `Categoria`, `Precio`, `Stock`, `img`) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['dni']."','".$_POST['fecha de nacimiento']."','".$_POST['correo electronico']."')";
       $result=mysqli_query($conexion,$query);
       if(!$result){
         die("error".mysqli_error($conexion));
       };
       //$(document).on("clic",.boton",function(){
       //$(this).attr("data_pk");
       //})
       //$json="hola";
       $json_string=json_encode($json);
       echo $json_string;
       //echo $buscar;
?>