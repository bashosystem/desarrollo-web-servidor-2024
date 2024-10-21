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

 
 //Forma 2
 if ($numero_aleatorio < 10):
    echo "<p>$numero_aleatorio tiene 1 digito</p>";
elseif ($numero_aleatorio > 9 and $numero_aleatorio <100):
    echo "<p>$numero_aleatorio tiene 2 digitos</p>";
else:
    echo "<p>$numero_aleatorio tiene 3 digitos</p>";
endif:



    /*
con una estructura switch cambiar la cariable dia a español
reescribir wl swith de los dias de clase con la viable en español


*/

    //Ejercicios 2 :  MOSTRAR ES UNA LISTA LOS NUMEROS MULTIPLOS DE 3 USANDO 
    //WHILE E
    <ul>
    <?php
        $i = 1;
        while ($i<=100):
            if($i % 3==0):
                echo "<li>$i</li>";
            endif;
        endwhile;
    ?>
    </ul>

    <h3>Ejercicios 3</h3>
    <p>calcular la suma de los numeros pares entre 1 y 20</p>
    <?php
    $i = 1;
    $suma =0;
    while($i<=20){
        if($i %2 <=20){
            $suma += $i;
        }
        i++;
    }
    echo "<p>SOlucion : la suma es $suma </p>";
    ?>


<h3>Ejercicio 4 </h3>
<p>calcular el factorial de 6 con while</p>
<?php
// 3! 1x2x3 =  6;
// 4! 1x2x3x = 24;
$factorial =6;
$resultado = 1;
$i = 1;
while ($i <= $factorial){
    $resultado *= $i;  #resultado =  $resultado * $i
    i++;
}
echo "<p>SOLUCION: el factorial de $factorial es $resultado </p>"
?>


<h1>Lista con FOR alternativa</h1>
<?php
for($i = 1; $i<=10; $i++){
    echo "<li>$i</li>";
endfor;    
}
echo "</ul>";


?>
<h1>lista con for y break cursed</h1>
<?php

echo "<ul>";  

for( ; ; ){
    if($i >10){

    }
  }

  <h3>ejercicio 5</3>

  <p>muestra por pantalla los 50 primeros numeros primos</>
  <?php
  /**
   * 4 % 2 =0;  4 no es primo
   * 4 % 3 =1;
   * 
   * 5 % 2 =1;  5 si es primo
   * 5 % 3 =2;
   * 5 % 4 =1
   * 
   * bucle de 2 a N-1 
   */

   $numero =2;
   $esprimo = true;
    for($i = 2; $i < $numero; $i++){
            if($numero % $si == 0){
            // no es primo
            $esprimo = false;
            break;
        }
    }
    var_dump ($esprimo);

    //bucle desde 2 hasta infinito y mas alla
    $numero=2;
    $numerosPrimos = 1;
    echo "<ol>";

    while($numerosPrimos <50){
        $esprimo = true;
        for($i 2; $i <$numero ; $i++){
            if($numero % $i ==0){
                $esprimo = false ;
            }

        }
        if($esprimo){
            $numerosPrimos ++;
            echo "<li>$numeros</li>"
        }
        $numeros++;
    }
    echo"</ol>";

    //N*N -> 0(N^2)

    //var_dump($esPrimo);

/**
 * Todos los arrays en php son asociados , como
 * los Map de java
 * 
 * Tiene pares clave-valor
 * 
 * 
 */
<?php
 $numeros =[5,10,9,6,7,4];
 $numeros = array(6,10,9,4,3);
 print_r($numeros);

 echo "<b></b>";

 $animales = ["perro","gato","ornitorrinco","Suricato","capibara"];
 $animales =[
    "A01"=> "Perro"
    "A02"=> "Gato",
    "A03"=> "Ornitorrinco",
    "A04"=> "Suricato",
    "A05"=> "Capibara",
 ];
 print_r($animales) =[
 1.4=> "Perro";
 true => "Gato";
false => "Ornitorrinco";
2e2 => "Suricato";
"A05" => "Capibara";
];
 ?>
 <?php

 $asignaturaas ={
 "ejercicio1 desarollo web en entorno servidor" =>"alejandra", 
 "desarrollo web en entorno cliente" => "jose miguel",
 "diseño de interfaces web" => "jose miguel",
 "despligue de aplicaciones" => "jaime",
 "empresa e iniciativa emprendedora"=> "convalidado",
 "ingles"=>"virnigia"
    ];
    ?>

    <table>
        <thead> 
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            kshort($asinaturas);
            //asort($asignaturas);ordena al revez
            //sort($asignaturas); los ordena por m
            foreach($asignaturas as $asignatura =>$profesor) {
                echo "<tr>";
                echo "<td>$asignaturas</td>" ;
                echo "<td>$profesor</td>";   
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

            <?php
            //EJERCICIO 2
            
            $estudiantes = [
                "francisco"=>3,
                "Daniel"=>5,
                "aurora"=>10,
                "ismael"=>0,
                "luis"=>7,
                "samuel"=>9,
                "juanjo"=>2,
                "vicente"=>1,

 
            ]    
            ?>
            <tbale>
                <thead>
                    <tr>
                        <th>$estudiante</th>
                        <th>$Nota</th>       
                    </tr>
</thead>
    </tbale>
        <tbody>
            <?php
                //if($nota <5)echo"<tr class='suspenso'>";
                //else echo "<tr class='aprobado'>";
            foreach ($estudiantes as $estudiante =>$nota){
                    ($nota <5)echo"<tr class='suspenso'>";//crea una etiqueta tr
                    else echo "<tr class='aprobado'>";
                    <td><?php echo $estudiante ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota<5)echo"suspenso";
                        elseif($nota >=5)echo "Aprobado";
                        ?>
                    </td>                                           
                
           <?php } ?>
        </tbody>
    </table>
    <?php
    /**
     * INSERTAR DOS NUEVOS ESTUDIANTES , CON NOTAS ALEATORIAS ENTRE 0 Y 10
     * 
     * BORRAR UN ESTUDIANTE (EL QUE PEOR OS CAIGA) POR LA CLAVE
     * 
     * MOSTRAR EN UNA NUEVA TABLA TODO ORDENADO POR LOS NOMBRES EN ORDEN 
     * ALFABETICAMENTE INVERSO
     * 
     * MOSTRAR EN UNA NUEVA TABLA  TODO ORDENADO POR LA NOTA DE 10 A 0(ORDEN INVERSO)
     */


     $estudiantes ["Paula"]=rand(0,10);
     $estudiantes ["Waulis"]=rand(0,10);


     unset($estudiantes["Vicente"]);

     krsort($estudiantes);

     <table> 
                <caption>Estudiantes ordenados por el nombre al revés</caption> 
                <thead>
                <tr>
                    <th>Estuadiante</th>
                    <th>nota</th>
                    <th>resultado</th>
                </tr>
            </thead>
        </tbody>
        <tbody>
            <?php
            arsort($estudiantes)
            foreach ($estudiantes as $estudiante =>$nota){
                    ($nota <5)echo"<tr class='suspenso'>";//crea una etiqueta tr
                    else echo "<tr class='aprobado'>";
                    <td><?php echo $estudiante ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota<5)echo"suspenso";
                        elseif($nota >=5)echo "Aprobado";
                        ?>
                    </td>                                           
                
           <?php } ?>
        </tbody>
     </table>
    ?>

</body>
</html>