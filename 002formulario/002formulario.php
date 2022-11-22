<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php

$nombre =$_GET["nombre"];
$apellido =$_GET["apellido"];
$email =$_GET["email"];
$url =$_GET["url"];
$sexo =$_GET["sexo"];
$aficiones =$_GET["aficiones"];
$lenguajes =$_GET["lenguajes"];
?>
<div class="table-responsive w-25">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Datos del formulario</th>

            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">
                    <?php echo($nombre) ?>
                </td>

            </tr>
            <tr class="">
                <td scope="row">
                <?php echo($apellido) ?>
                </td>

            </tr>
            <tr class="">
                <td scope="row">
                <?php echo($email) ?>
                </td>

            </tr>
            <tr class="">
                <td scope="row">
                <?php echo($url) ?>
                </td>

            </tr>
            <tr class="">
                <td scope="row"><?php echo($sexo) ?>
            </td>

            </tr>
            <tr class="">
                <td scope="row"><?php foreach($aficiones as $aficion){echo ($aficion).", ";} ?>
            </td>

            </tr>
            </tr>
            <tr class="">
                <td scope="row"><?php foreach($lenguajes as $lenguaje){echo ($lenguaje).", ";} ?>
            </td>

            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
