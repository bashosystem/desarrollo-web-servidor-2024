<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays bidimencionales</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php

    error_reporting (E_ALL);
    ini_set("display_errors",1);

    ?>
</head>
<body>
    <?php
    $array = ["a"=>1,2,3,4];
    
    
    $videojuegos = [
        ["DISCO ELYSIUM","RPG",9.99],
        ["DRAGON BALL Z KAKAROT", "ACCION",59.99],
        ["PERSONA 3", "RPG",24.99],
        ["COMANDO 2","ESTRATEGA",4.99],
        ["HOLLOW KNIGHT","METROIDVANIA",9.99],
        ["STARDEW VALLEY","GESTION DE RECURSOS",7.99]
    ];
    

    $nuevo_videojuego=["OCTOPATH TRAVELER","RPG",29.95];
    array_push($videojuegos,$nuevo_videojuego);

    array_push($videojuegos,["ENDER LILIES","METROIDVANIA",9.85]);

    array_push($videojuegos,["dota 2","moba",0]);
    array_push($videojuegos,["fall guys","plataformas",0]);
    array_push($videojuegos,["rocket league","deporte",0]);
    array_push($videojuegos,["lego fornite","accion",0]);

    for($i=0;   $i<count($videojuegos); $i++){
        if($videojuegos[$i][2]==0){
            $videojuegos[$i][3]= "gratis";
        } else{
                $videojuegos[$i][3]="pago";
        }
    }


    
    //unset($videojuegos[3]);
    //$videojuegos = array_values($videojuegos);
    //printf($videojuegos);
    $_titulo = array_column($videojuegos,0);
    //si fuera descente , SORT_DESC(constante)
    array_multisort($_titulo,SORT_ASC,$videojuegos);

    $_titulo = array_column($videojuegoS,0);
    $_categoria = array_column($videojuegos,1);
    $_precio = array_column($videojuegos,2);
    array_multisort($_categoria,SORT_ASC,
                    $_precio,SORT_DESC,
                    $_titulo,SORT_DESC,
                    $videojuegos);
    ?>

    <table>
        <thead>
            <tr>
                <th>videojuego</th>
                <th>categoria</th>
                <th>precio</th>
                <th>estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($videojuegos as $videojuego){               
                //echo $videojuego[0]; --tambien podemos sacar asi las columnas
                list($titulo,$categoria,$precio,$estado)=$videojuego;
                echo"<tr>";
                echo"<td>$titulo</td>";
                echo"<td>$categoria</td>";
                echo"<td>$precio</td>";
                echo "<td>$estado</td>";
                echo"</tr>";
                ?>
             <?php } ?>           
        </tbody>
    </table>
</body>
</html>