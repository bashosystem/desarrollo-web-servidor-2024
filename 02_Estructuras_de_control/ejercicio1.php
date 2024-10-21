<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
    <?php

    error_reporting (E_ALL);
    ini_set("display_errors",1);

    ?>
</head>
<body>
    <?php
   
    $animes = [
        ["Tragones y mazmorras","Comedia",2023,20,"Ya disponible"],
        ["Dandadan","Acción",2025,12,"Próximamente"]
        ];

        unset($animes[1]);
        $_año = array_column($animes,random_int(1990,2030),3);
        $_episodios = array_column($animes,random_int(1,99)4);
        $_estreno = array_column($animes,5);
        for($i=0;   $i<count($animes); $i++){
            if($animes[$i][1]<2024){
                $animes[$i][4]= "Ya disponible";
            } else{
                    $animes[$i][5]="Próximamente";
            }
        }
        ?>
        
    <table>
        <caption>Animes</caption>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Año</th>
                    <th>Episodios</th>
                    <th>Disponibilidad</th>
                </tr>
            </thead> 
            <tbody>
            <tr>
                <td>
                    Dandadan
                </td>
                <td>
                    Acción
                </td>
                <td>
                    2025
                </td>
                <td>
                    12
                </td>
                <td>
                    Próximamente
                </td>
            </tr>
            <tr>
                <td>
                    Tragones y mazmorras
                </td>
                <td>
                    Comedia
                </td>
                <td>
                    2023
                </td>
                <td>
                    20
                </td>
                <td>Ya disponible</td>
            </tr>              
        <?php
            foreach($animes as $animes){
                list($Genero,$Año,$Título)=$animes;?>
                <tr>
                    <td><?php echo $Género ?></td>   
                    <td><?php echo $Año ?></td> 
                    <td><?php echo $Título ?></td>              
                </tr>
            <?php}?> 
        </tbody>
    </table>       
</body>
</html>