<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temperaturas</title>
</head>
<body>
    <form action="" method="post">
        <label>temperaturas original</label>
        <input type="text" name ="temperatura"><br><br>
        <lable>Unidad original</lable>
            <select name="inicial">
                <option value="c">celsius</option>
                <option value="k">kelvin</option>
                <option value="f">fahrenheit</option>
            </select><br><br>
        <label>Unidad final</label>
            <select name="final">
                <option value="c">celsius</option>
                <option value="k">kelvin</option>
                <option value="f">fahrenheit</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $temperatura = $_POST["temperatura"];
            $inicial = $_POST["inicial"];
            $final = $_POST["final"];

        }
        ?>
    
</body>
</html>