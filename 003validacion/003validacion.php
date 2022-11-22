<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid w-25">

    <form action="">
    <div class="mb-3">
      <label for="lenguajes" class="form-label">Lenguajes</label>
      <select multiple class="form-select form-select-lg" name="lenguajes[]" id="" required>
            
            <option value="js">Js</option>
            <option value="php">Php</option>
            <option value="java">Java</option>
        </select>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="dormir" id="dormir" name="aficiones[]">
      <label class="form-check-label" for="dormir">
        Dormir
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="nadar" id="nadar" name="aficiones[]">
      <label class="form-check-label" for="nadar">
        Nadar
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="leer" id="leer" name="aficiones[]">
      <label class="form-check-label" for="leer">
        Lectura
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="comer" id="comer" name="aficiones[]">
      <label class="form-check-label" for="comer">
        Comer
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre">
      <label class="form-check-label" for="hombre">
        Hombre
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer">
      <label class="form-check-label" for="mujer">
        Mujer
      </label>

    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelpId" required>
      
    </div>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelpId" required>
      
    </div>  
    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelpId" required>
      
    </div>
    <div class="mb-3">
      <label for="url" class="form-label">URL</label>
      <input type="text" class="form-control" name="url" id="url" aria-describedby="emailHelpId" required>
      
    </div>



<input type="submit" value="enviar">

<?php 
$email = $_GET["email"];

$email = filter_var($email,FILTER_SANITIZE_EMAIL);/*Quita todos los carracteres menos !#$%&'*+-=?^_`{|}~@.[]*/

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Email correcto");
}else{
    echo("El email es incorrecto.");
}

if (isset($_GET["aficiones"])) {
  echo("Datos correcto");
}else {
  echo("datos incorrectos");    
}
$nombre = $_GET["nombre"];
if (!filter_var($nombre, FILTER_VALIDATE_INT)) {
  echo("Email correcto");
}else{
  echo("El email es incorrecto.");
}


?>

</form>
</div>
</body>
</html>