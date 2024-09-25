<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    $numero = "2";
    $numero =(int) $numero;

    if($numero == 2){
        echo "exito";
    }else{
        echo "no exito";
    } 


    $hora = date("G");
    //var_dump($hora);
    /*
    si $hora entre 6 y 11 es, mañana
    si $hora entre 12 y 14 es, mediodida
    si $hora entre 15 y 20 es, tarde
    si $hora entre 20 y 5 es, noche
    si $hora entre 1 y 5 es, madrugada
    
    */

    if($hora >= 6 && $hora <=11 ):
        echo "ES MAÑANA";
    endif;
    if($hora >= 12 && $hora <= 14 ):
        echo "ES MEDIODIA";    
    endif;
    if($hora >= 15 && $hora <=20):
        echo "ES TARDDE";   
    endif;


    
 /*
        "2" == 2   "2" es igual a 2
        "2" !==2   "2" no es identico a 2
         2 ===2     2 si es identico a 2
         2!== 2.0   2 no es identico a 2.0
    */

/*
    if($num >= -10 && $num <=10):
        echo"<p>El numero $num esta en el rango [-10.0]</p>";
    elseif($num>=0 && $num<=10):
        echo "<p>El numero $num esta en el rango[0,10]</p>";
    elseif($num >10 and  $num <20):
        echo "<p>El numero $num esta fuera en el rango [10,20]</p>";
    else:
        echo "<p>El numero $num esta fuera del rango</p>";
    endif;
*/

//$numero_aleatorio_decimales = rand (10,100)/10;
$n =rand (1,3);

switch($n){
    case 1:
        echo"El numero es 1";
        break;
        echo"El numero es 2";
        break;
    default:
        echo "El numero es 3";
                
}
        $hora_exacta = date("H:i:s");
        echo "<h1>$hora_exacta</h1>";
        $dia = date("l");
        echo "<h2>hoy es $dia</2>";

/*
tenemmos clases lunes , miercoles y viernes
no tenemos clases el resto
hacer un switch que diga si hoy tenemos clase
*/

switch($dia){
    case "Monday":
        echo "Hoy si tenemos clases";
        break;
    case "Wednesday":
        echo "Hoy si tenemos clases";
        break;
    case "Friday":
        echo "Hoy si tenemos clases";
        break; 
    default:
        echo "HOY NO TENEMOS CLASES";
        break;
}










            ?>

   

    
    
</body>
</html>