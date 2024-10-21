<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peliculas</title>
</head>
<body>
    <?php
    $peliculas = [
        ["karata a muerte en torremolinos","accion",1975],
        ["sharkando 1-5","accion",2015],
        ["princesa por sorpresa 2","comedia",2008],
        ["temblores  4","terror",2018],
        ["cariño, he encogido a los niños","aventura",2001],
        ["stuar little","infantil",2000]
    ];
    /**
     * 1.  AÑADIR CON UN RAND, LA DURACION DE CADA PELICULA . 
     *     LA DURACION SERA UN NUMERO ALEATORIO ENTRE 30 Y 240.
     * 
     * 2.  AÑADIR COMO UNA NUEVA COLUMNA , EL TIPO DE PELICULA.
     *      EL TIPO SERA:
     *      -CORTOMETRAJE , SI LA DURACION ES MENOR QUE 60
     *      -LARGOMETRAJE , SI LA DURACION ES MAYOR O IGUAL QUE 60
     * 
     * 3.  MOSTRAR EN OTRA TABLA, TODAS LAS COLUMNAS , Y ORDENAR
     *      ADEMAS EN ESTE ORDEN:
     *      1.GENERO
     *      2.AÑO
     *      3.TITULO(TODO ALFABETICAMENTE , Y EL AÑO MAS RECIENTE A MAS ANTIGUO)
     *  
     */



    ?>
if($_SERVER["RESQUEST_METHOD"]=="POST"){
    
/**
ESTE CODIGO SE EJEECUTA  
*/

}


    <table>
        <thead>
            <tr>
                <th>titulo</th>
                <th>genero</th>
                <th>año lanzamiento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($peliculas as $pelicula){
                list($titulo,$genero,$duraco¡ion ,$anno)=$pelicula;?>
                <tr>
                    <td><?php echo $titulo ?></td>   
                    <td><?php echo $genero ?></td> 
                    <td><?php echo $anno ?></td>              
                </tr>
            <?}?>
        </tbody>
    </table>
</body>
</html>