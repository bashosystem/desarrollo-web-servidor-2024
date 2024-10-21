<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
      error_reporting( E_ALL );
      ini_set( "display_errors", 1 );
  ?>
</head>
<body>
    <?php
/*
crear un formulario que reciba el nombre y la edad de una
persona 
- si la edad es menor que 18 , se mostrara el nombre y que es menor de edad

- si la edad esta entre 18 y 65 , se mostrara el nombre y que es mayor de edad

- si la edad es mas de 65, se mostrara el nombre y que se ha jubilado

*/
?>

<form action="" method="post">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="introduzca la nombre"><br><br> 
    <label for="edad">edad</label>
    <input type="text" name="edad" id="edad" placeholder="introduzca la edad"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
 
 if($edad<18){
    echo "<h1>$nombre es menor de edad </h1>";
 }elseif($edad>=18&&$edad<=65){
    echo "<h1>$nombre es mayor de edad </h1>";
 }elseif($edad>65){
    echo "<h1>$nombre se ha jubilado </h1>";
 }
}
?>
</body>
</html>