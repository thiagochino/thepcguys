
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <title>login</title>
</head>
<body class="fondo">
    z
  <div class="divformulario">   
    <form class="formulario">
      <h2>Iniciar Sesion</h2>
      <br>
        <div class="form-group">
          <label for="exampleInputEmail1"><b>&#128231; Ingresar Mail</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar mail">
          <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electroncio con nadie mas.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><b>&#128274; Contraseña</b></label>
          <input type="password" class="form-control" id="txtpassword" placeholder="Contraseña">
        </div>
            <div class="ub1">
            <input type="checkbox" onclick="verpassword()" >    Mostrar contraseña
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Continuar</button>
        <br><br>
        <p>¿No posees una cuenta? <a href="registrarse.html" class="link">haz click aqui</a> para crear un cuenta nueva</p>
      </form>

<script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>
      
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
       <!-- <script src="libs/bootstrap/js/bootstrap.min.js"></script> -->
    </body>
  
</html>
