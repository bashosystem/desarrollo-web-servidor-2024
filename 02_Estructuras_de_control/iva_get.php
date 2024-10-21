<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVA GET</title>
    <?php

    error_reporting (E_ALL);
    ini_set("display_errors",1);

    ?>
</head>
<body>
    <form action="" method="get">
        <label for="Precio">Precio</label>
        <input type="text" name="precio" id="precio">
        <br><br>

        <select name="iva">
            <option value="general">General</option>
            <option value="reducido">reducido</option>
            <option value="superreducido">superreducido</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"]==)
    //isset (is set) devuelve true si la variable existe
    if(isset($_GET["precio"]) and isset($_GET["iva"])) {
        $precio = $_GET["precio"];
        $iva = $_GET["iva"];
        //var_dump($precio);
        //var_dump($iva);
        if( $precio != ''and $iva != '') {
            $pvp = match ($iva) {
                "general" => $precio * GENERAL,
                "reducido" => $precio * REDUCIDO,
                "superreducido" => $precio * SUPERREDUCIDO
        };


            echo "<p>EL PVP ES $pvp</p>";
        } else {
            echo "<p>Te faltan datos</p>";
        }
    }
    ?>
</body>
</html>