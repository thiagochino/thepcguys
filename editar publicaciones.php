<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="css/publis.css">
    <link  rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css"> 
   <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <title>Document</title>
    
</head>
<body>
  
<div class="container mt-4" >
        <div class="row">
            <div class="col">
                <div class="sidebar"> 
                    <ul class="menu">
                        <li><a href="#">Inicio</a></li>   
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Servicios</a></li>   
                        <li><a href="#">Contacto</a></li>   
                    </ul>     
                |</div>
                <div class="input-group mb-3">
                    <input id="input_buscar" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button id="btn_buscar" class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                </div>
                  <div class="container">
                        <table  class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Informacion</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">precio</th>
                                    <th scope="col">stock</th>
                                        <div class="claseboton" > 
                                        <th>mostar</th>
                                        <th>editar</th>
                                        <th>borrar</th>
                                    </div>
                                </tr>
                            </thead>
                            <tbody id="latabla">
                            </tbody>
                        </table>
                    </div>
                
            </div>
        </div>
    </div>
    
      

    <?php 
include_once("phpfuncionales/conexion.php"); 


$pagina = $_GET['pag'];

?>

<div class="caja_popup2"> 
  <form class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2" >Agregar usuario</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnom" autocomplete="off"></td>
            </tr>
			 <tr> 
                <td>DNI</td>
                <td><input type="number" name="txtdni" autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Dirección</td>
                <td><input type="text" name="txtdir" autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Telefono</td>
                <td><input type="number" name="txttel" autocomplete="off"></td>
            </tr>
			  <tr> 
                <td>Correo</td>
                <td><input type="text" name="txtcorreo" autocomplete="off"></td>
            </tr>
            <tr> 	
               <td colspan="2" >
				  <?php echo "<a href=\"../index.php?pag=$pagina\">Cancelar</a>";?>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario');">
			</td>
            </tr>
        </table>
    </form>
 </div>
<?php

		if(isset($_POST['btnregistrar']))
{   
	$vaiusu= $_POST['txtnom'];
	$vaidni= $_POST['txtdni'];
  $vaidir= $_POST['txtdir'];
	$vaitel= $_POST['txttel'];
  $vaiemail= $_POST['txtcorreo'];

	$queryadd	= mysqli_query($conexion, "INSERT INTO usuarios(nom,dni,dir,tel,email) VALUES('$vaiusu','$vaidni','$vaidir','$vaitel','$vaiemail')");
	
 	if(!$queryadd)
	{
		// echo "Error con el registro: ".mysqli_error($conn);
		 echo "<script>alert('DNI duplicado, intenta otra vez');</script>";
		 
	}else
	{
		echo "<script>window.location= 'index.php?pag=1' </script>";
	}
}
?>

<!-- <script src=”/Javascript/javas.js”> -->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="./Javascript/javas.js"></script>
</body>
</html>
