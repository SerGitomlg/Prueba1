<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de un Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $tmp_titulo = ($_POST["titulo"]);
            $tmp_paginas = ($_POST["paginas"]);
            $tmp_sinopsis = ($_POST["sinopsis"]);




            //TITULO
            if($tmp_titulo == ''){
                $err_titulo = "El titulo es un campo OBLIGATORIO";
            }else{
                if(strlen($tmp_titulo) < 1 || strlen($tmp_titulo) > 40) {
                    $err_titulo = "El nombre debe tener entre 2 y 40 caracteres";
                }else{
                    $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
                    if(!preg_match($patron, $tmp_titulo)){
                        $err_titulo = "El nombre solo puede contener letras y espacios
                            en blanco";
                    }else{
                        $titulo = $tmp_titulo;
                    }
                }
            }

            //PAGINAS
            if($tmp_paginas == ''){
                $err_paginas = "El número de páginas es obligatorio";
            }else{
                if(filter_var($tmp_paginas, FILTER_VALIDATE_INT) === FALSE){
                    $err_paginas = "El numero de páginas debe ser un número";                                       
                }else{
                    if($tmp_paginas > 10 || $tmp_paginas < 9999){
                        $paginas = $tmp_paginas;
                    }else{
                        $err_paginas = "El numero de páginas debe estar entre 10 y 9999";
                    }                    
                }
            }

            //GENERO
            if(isset($_POST["genero"])) {
                $tmp_genero = $_POST["genero"];
            }else{
                $tmp_genero = "";
            }
            if($tmp_genero == ''){
                $err_genero = "El género es obligatorio";
            }else{
                $generos_validas = ["fantasia","ficcion","romance","drama"];
                if(!in_array($tmp_genero, $generos_validas)) {
                    $err_consola = "La consola no es válida";
                }else{
                    $genero = $tmp_genero;
                }
            }


            //SECUELAS
            if(isset($_POST["secuela"])) {
                $tmp_secuela = ($_POST["secuela"]);
            }else{
                $tmp_secuela = "";
            }
            if($tmp_secuela == ''){
                $secuela = "no";
            }else{
                $secuelas_validas = ["si","no"];
                if(!in_array($tmp_secuela, $secuelas_validas)) {
                    $err_secuela = "La secuela no es válida";
                }else{
                    $secuela = $tmp_secuela;
                }
            }


            //SINOPSIS
            if($tmp_sinopsis == ''){
                $sinopsis = "";
            }else{
                if(strlen($tmp_sinopsis) > 200){
                    $err_sinopsis = "La sinopsis no debe superar los 200 caracteres";
                }else{
                    $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
                    if(!preg_match($patron, $tmp_sinopsis)){
                        $err_sinopsis = "El nombre solo puede contener letras y espacios
                            en blanco";
                    }else{
                        $sinopsis = $tmp_sinopsis;
                    }
                }
            }



            //FECHA PUBLICACION
            if($tmp_fecha_publicacion == ''){
                $fecha = "";
            }else{
                $patron = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";
                if(!preg_match($patron, $tmp_fecha_publicacion)){
                    $err_fecha = "Formato de fecha incorrecto";
                }else{
                    list($anno_publicacion, $mes_publicacion, $dia_publicacion) = explode('-',$tmp_fecha_publicacion);
                    if($anno_publicacion < 1800){
                        $err_fecha = "El año no puede ser anterior a 1800";
                    }else{
                        $anno_actual = date("Y");
                        $mes_actual = date("m");
                        $dia_actual = date("d");
    
                        if($anno_publicacion - $anno_actual < 3){
                            $fecha = $tmp_fecha_publicacion;
                        } elseif($anno_publicacion - $anno_actual > 3){
                            $err_fecha = "La fecha debe ser anterior a dentro de 3 años";
                        } elseif($anno_publicacion - $anno_actual == 3){
                            if($mes_publicacion - $mes_actual < 0) {
                                $fecha = $tmp_fecha_publicacion;
                            } elseif($mes_publicacion - $mes_actual > 0) {
                                $err_fecha = "La fecha debe ser anterior a dentro de 3 años";
                            } elseif($mes_publicacion - $mes_actual == 0) {
                                if($dia_publicacion - $dia_actual <= 0) {
                                    $fecha = $tmp_fecha_publicacion;
                                } elseif($dia_publicacion - $dia_actual > 0) {
                                    $err_fecha = "La fecha debe ser anterior a dentro de 3 años";
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>

        <h1>Formulario Libros</h1>

        <form class="col-4" action="" method="post">
            
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input class="form-control" type="text" name="titulo">
                <?php if(isset($err_titulo)) echo "<span class='error'>$err_titulo</span>" ?>
            </div>  

            <div class="mb-3">
                <label class="form-label">Páginas</label>
                <input class="form-control" type="text" name="paginas">
                <?php if(isset($err_paginas)) echo "<span class='error'>$err_paginas</span>" ?>
            </div> 

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="fantasia">
                    <label class="form-check-label">Fantasía</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="ficcion">
                    <label class="form-check-label">Ciencia Ficción</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="romance">
                    <label class="form-check-label">Romance</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="drama">
                    <label class="form-check-label">Drama</label>
                </div>
                <?php if(isset($err_genero)) echo "<span class='error'>$err_genero</span>" ?>
            </div>

            <div class="mb-3">
                <label>Tiene secuelas</label>
                <select name="secuela"> 
                    <option value="si">SI</option> 
                    <option value="no">NO</option> 
                </select>
                <?php if(isset($err_secuela)) echo "<span class='error'>$err_secuela</span>" ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Publicación</label>
                <input class="form-control" type="date" name="fecha">
                <?php if(isset($err_fecha)) echo "<span class='error'>$err_fecha</span>" ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <input class="form-control" type="text" name="sinopsis">
                <?php if(isset($err_sinopsis)) echo "<span class='error'>$err_sinopsis</span>" ?>
            </div>


            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
        <?php
        if(isset($titulo) && isset($paginas) && isset($genero) && isset($secuela) && isset($fecha) && isset($sinopsis)){ ?>
            <h1><?php echo "El titulo es: $titulo" ?></h1>
            <h1><?php echo "Tiene: $paginas páginas" ?></h1>
            <h1><?php echo "Es un libro de $genero" ?></h1>
            <h1><?php echo "Secuelas $secuela" ?></h1>
            <h1><?php echo "La fecha es: $fecha" ?></h1>
            <h1><?php echo "Sinopsis: $sinopsis" ?></h1>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>