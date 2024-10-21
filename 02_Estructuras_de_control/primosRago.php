<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primosRango</title>
</head>
<body>
<form action=""method="post">
        <label>desde</label>
        <input type="text" name="desde"><br>
        <label>hasta</label>
        <input type="text" name="hasta"><br>  
        <input type="submit" name="calcular primos"><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $desde = $_POST["desde"];
        $hasta = $_POST["hasta"];
        echo "<ul>";
    }
    ?>
    
</body>
</html>