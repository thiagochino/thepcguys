<?php 
include_once("conexion.php"); 
include_once("../editar publicaciones.php");

// $pagina = $_GET['pag'];
?>
<html>
<head>    
		<title>VaidrollTeam</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="caja_popup2"> 
  <form class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2" >Agregar producto</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnom" autocomplete="off"></td>
            </tr>
			 <tr> 
                <td>Informacion</td>
                <td><input type="text" name="txtinfo" autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Categoria</td>
                <td><input type="text" name="txtcat" autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Precio</td>
                <td><input type="number" name="txtprec" autocomplete="off"></td>
            </tr>
			  <tr> 
                <td>Stock</td>
                <td><input type="number" name="txtstoc" autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Img</td>
                <td><input type="text" name="txtimg" autocomplete="off"></td>
            </tr>
            <tr> 	
               <td colspan="2" >
				  <?php echo "<a href=\"../login.php?pag=$pagina\">Cancelar</a>";?>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario');">
			</td>
            </tr>
        </table>
    </form>
 </div>
</body>
</html>
<?php

		if(isset($_POST['btnregistrar']))
{   
	$vainom	= $_POST['txtnom'];
	$vaiinfo	= $_POST['txtinfo'];
        $vaicat	= $_POST['txtcat'];
	$vaiprec 	= $_POST['txtprec'];
        $vaistock	= $_POST['txtstoc'];
        $vaiimg	= $_POST['txtimg'];

	$queryadd	= mysqli_query($conn, "INSERT INTO productos(Nombre,Informacion,Categoria,Precio,Stock,Img) VALUES('$vainom','$vaiinfo','$vaicat','$vaiprec','$vaistock','$vaiimg')");
	
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