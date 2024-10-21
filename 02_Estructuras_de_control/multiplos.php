<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplos</title>
</head>
<body>
<form action=""method="post">
        <label>desde</label>
        <input type="text" name="desde"><br>
        <label>hasta</label>
        <input type="text" name="hasta"><br>
        <label>multiplo</label>
        <input type="text" name="multiplo"><br>   
        <input type="submit" name="sacar máximo"><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $desde = $_POST["desde"];
        $hasta = $_POST["hasta"];
        $multiplo = $_POST["multiplo"];

        echo "<ul>";
        for($i = $desde;$i <=$hasta;$i++){
            if($i % $multiplo == 0){
                echo"<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>