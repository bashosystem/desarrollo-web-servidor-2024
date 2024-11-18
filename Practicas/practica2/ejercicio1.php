<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-practica</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );
    ?>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $tmp_titulo = depurar($_POST["titulo"]);
            $tmp_paginas = depurar($_POST["paginas"]);
            $tmp_genero = depurar($_POST["genero"]);
            $tmp_secuela = depurar($_POST["secuela"]);
            $tmp_fechapublicacion = depurar($_POST["fechapublicacion"]);
           
            //titulo
            if ($tmp_titulo == "") {
                $err_titulo = "El titulo es obligatorio";
            } else {
                if (strlen($tmp_titulo) < 1 or strlen($tmp_titulo) > 40) {
                    $err_titulo = "El titulo debe contener entre 1 y 40 caracteres";
                } else {
                    $patron = "/^[0-9][a-zA-Z áéíóúÁÉÍÓÚñÑüÜ.]+$/";
                    if (!preg_match($patron, $tmp_titulo)) {
                        $err_nombre = "El titulo solo puede contener letras, espacios y puntos";
                    } else {
                        $titulo = ucwords(strtolower($tmp_titulo));
                    }
                }
            }
            //paginas
            if ($tmp_paginas == "") {
                $err_paginas = "El número de paginas es obligatorio";
            } else {
                if ($tmp_paginas < 10 or $tmp_paginas > 9999) {
                    $err_paginas = "El número de paginas debe ser de 10 a 9999";
                } else {
                    $numero_paginas = $tmp_paginas;
                }
            }

            //genero
            if ($tmp_genero == "") {
                $err_genero = "El genero tiene que ser seleccionado";
            } else {
                $generos_seleccionados = ["Fantasia", "Ciencia Ficcion","Romance","Drama"];
                if (!in_array($tmp_genero, $generos_seleccionados)) {
                    $err_genero = "Generos no válidos";
                } else {
                    $genero = strtolower($tmp_genero);
                }
            }

            //fecha de publicacion

            if ($tmp_fechapublicacion == "") {
                $err_fechapublicacion = "La fecha de publicaion es obligatoria";
            } else {
                $patron = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
                if (!preg_match($patron, $tmp_fechapublicacion)) {
                    $err_fechapublicacion= "Formato de fecha incorrecto";
                } else {
                    $fecha_actual = date("Y-m-d");
                    $fecha_limite = "1800-01-01";

                    if ($tmp_fechapublicacion >= $fecha_actual) {
                        $err_fechapublicacion = "La fecha debe ser menor al día de hoy";
                    } elseif ($tmp_fechapublicacion < $fecha_limite) {
                        $err_fechapublicacion = "La fecha debe ser igual o mayor al 01-01-1800";
                    } else {
                        $fecha_publicacion= $tmp_fechapublicacion;
                    }
                }
            }

        }
    ?>
    <div class="container">
      <h1>Formulario de libros</h1>
        <form class="col-3" action="" method="post">
            <div clsas="mb-3">
                <label class="form-label">Título</label>
                <input class="form-control" type="text" name="Título">
                <?php if (isset($err_titulo)) echo "<span class='error'>$err_titulo</span>"; ?>
            </div>
            <div clsas="mb-3">
                <label class="form-label">Paginas</label>
                <input class="form-control" type="text" name="paginas">
                <?php if (isset($err_paginas)) echo "<span class='error'>$err_paginas</span>"; ?>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="consola" value="Fantasia">
                    <label class="form-check-label">Fantasia</label>
                    <?php if (isset($err_genero)) echo "<span class='error'>$err_genero</span>"; ?>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="consola" value="Ciencia Ficcion">
                    <label class="form-check-label">Ciencia Ficcion</label>
                    <?php if (isset($err_genero)) echo "<span class='error'>$$err_genero</span>"; ?>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="consola" value="Romance">
                    <label class="form-check-label">Romance</label></label>
                    <?php if (isset($err_genero)) echo "<span class='error'>$$err_genero</span>"; ?>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="consola" value="Drama">
                    <label class="form-check-label">Drama</label>
                    <?php if (isset($err_genero)) echo "<span class='error'>$err_genero</span>"; ?>
                </div>
                 <div clsas="mb-3">
                    <label class="form-label">Tiene secuela?</label>
                <select class="form-select" name="secuela" id="secuela">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
                <?php if (isset($err_titulo)) echo "<span class='error'>$err_titulo</span>"; ?>
            </div>
            <div clsas="mb-3">
                <label class="form-label">Fecha de publicacion</label>
                <input class="form-control" type="date" name="fecha_publicacion">
                <?php if (isset($err_fechapublicacion)) echo "<span class='error'>$err_fechapublicacion</span>"; ?>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div> 
</body>
</html>