<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*
//forma 1 
    $numero = 1;
    if($numero >0){
    echo "<p>1 El numero $numero es mayor que cero</p>";

    }elseif($numero ==0){
        echo  "<p>1 El numero $numero cero</p>";
    }
    else{
        echo "<p>1 El numero $numero es menor que cero</p>";
    } 
    //forma 2
    if($numero >0 )echo "<p>2 El numero $numero es mayor que cero</p>";
    elseif($numero ==0 )echo"<p>2 El numero $numero cero</p>";
    else echo "<p>2  El numero $numero es menor que cero</p>";


    //forma 3
     if($numero >0):
        echo "<p>3 El numero $numero es mayor que cero</p>";
        elseif($numero ==0):
            echo"<p>3 El numero $numero es cero</p>";
    else: 
        echo "<p>3 El numero $numero es menor que cero</p>";
    endif;
*/
    ?>

    <?php
    # Rangos [-10,0),[0,10],(10,20]
    $num =-7;
    # and o && para la conjuncion
    if($num >= -10 && $num <=10):
        echo"<p>El numero $num esta en el rango [-10.0]</p>";
    elseif($num>=0 && $num<=10):
        echo "<p>El numero $num esta en el rango[0,10]</p>";
    elseif($num >10 and  $num <20):
        echo "<p>El numero $num esta fuera en el rango [10,20]</p>";
    else:
        echo "<p>El numero $num esta fuera del rango</p>";
    endif;

/*
comprobar de tres formas diferentes , con la estructura if,si el numero 
aleatorio tiene 1,2 o 3 digitos
*/
    #
    $numero_aleatorio=rand(1,200);
    $numero_aleatorio_decimales = rand(10,100)/10;
    $NumeroAleatorio;
    $digitos=null;

    #FORMA 1
    if ($numero_aleatorio>= 1 && $numero_aleatorio <= 9) {
        $digitos = 1;
    } elseif ($numero_aleatorio >= 10 && $numero_aleatorio <= 99) {
        $digitos = 2;
    } elseif ($numero_aleatorio >= 100 && $numero_aleatorio <= 999) {
        $digitos = 3;
    } else {
        $digitos = "error";
    }

    echo "<p>El numero tiene $digitos digitos</p>";
    #FORMA 2
    $digtos_texto;
    if($digitos ==1) & digitos_texto = digito;
     echo"<p>el numero $numero_aleatorio tiene $digitos"

    #FORMA 3
    if ($numero_aleatorio>= 0 && $numero_aleatorio <= 9) :
        echo "El número tiene 1 dígito.";
     elseif ($numero_aleatorio >= 10 && $numero_aleatorio <= 99): 
        echo "El número tiene 2 dígitos.";
    elseif ($numero_aleatorio >= 100 && $numero_aleatorio <= 999): 
        echo "El número tiene 3 dígitos.";
    else: 
        echo "El número tiene más de 3 dígitos o es negativo.";
    endif;


 

    ?>
    
</body>
</html>