<?php
/*
Equipos de la liga

- Nombre (letras con tilde, ñ, espacios en blanco y punto)
- Inicial (3 letras)

- Liga (select con las opciones: Liga EA Sports, Liga Hypermotion, Liga Primera RFEF)
- Ciudad (letras con tilde, ñ, ç y espacios en blanco)
- Tiene titulo liga (select con si o no)
- Fecha de fundación (entre hoy y el 18 de diciembre de 1889)
- Número de jugadores (entre 19 y 32) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de un Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
    ?>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        function depurar(string $entrada) : string{  //Obliga a que entre un String y salga un String
            $salida = htmspecialchars($entrada);
            $salida = trim($salida);
            $salida = stripslashes($salida);
            $salida = preg_replace('!\s+!', ' ', $salida);
            return $salida;
        }
    ?>
    <div class="container">

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $tmp_nombre = depurar($_POST["nombre"]);
            $tmp_ciudad = depurar($_POST["ciudad"]);




            //NOMBRE
            if($tmp_nombre == ''){
                $err_nombre = "El titulo es un campo OBLIGATORIO";
            }else{
                if(strlen($tmp_nombre) < 2 || strlen($tmp_nombre) > 40) {
                    $err_nombre = "El nombre debe tener entre 2 y 40 caracteres";
                }else{
                    $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
                    if(!preg_match($patron, $tmp_nombre)){
                        $err_nombre = "El nombre solo puede contener letras y espacios
                            en blanco";
                    }else{
                        $nombre = ucwords(strtolower($tmp_nombre));
                    }
                }
            }



            //LIGA
            if(isset($_POST["liga"])) {
                $tmp_liga = depurar($_POST["liga"]);
            }else{
                $tmp_liga = "";
            }
            if($tmp_liga == ''){
                $err_liga = "La ciudad es obligatoria";
            }else{
                $ligas_validas = ["ea","hy","rf"];
                if(!in_array($tmp_liga, $ligas_validas)) {
                    $err_liga = "La consola no es válida";
                }else{
                    $liga = $tmp_liga;
                }
            }


            //CIUDAD
            if($tmp_ciudad == ''){
                $err_ciudad = "El titulo es un campo OBLIGATORIO";
            }else{
                if(strlen($tmp_ciudad) < 2 || strlen($tmp_ciudad) > 30) {
                    $err_ciudad = "La ciudad debe tener entre 2 y 30 caracteres";
                }else{
                    $ciudad = $tmp_ciudad;
                } 
            }




            //COPA
            if(isset($_POST["copa"])) {
                $tmp_copa = depurar($_POST["copa"]);
            }else{
                $tmp_copa = "";
            }
            if($tmp_copa == ''){
                $err_copa = "La copa es obligatoria";
            }else{
                $validas = ["si","no"];
                if(!in_array($tmp_copa, $validas)) {
                    $err_copa = "La consola no es válida";
                }else{
                    $copa = $tmp_copa;
                }
            }


            //FECHA
            if($tmp_fecha == ''){
                $err_fecha = "La fecha de fundación es obligatoria";
            }else{
                $patron = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
                if(!preg_match($patron, $tmp_fecha)){
                    $err_fecha = "Formato de fecha incorrecto";
                }else{
                    list($anno, $mes, $dia) = explode('-',$tmp_fecha);
                    if($anno < 1889){
                        $err_fecha = "El año no puede ser anterior a 1889";
                    }else{
                        $anno_actual = date("Y");
                        $mes_actual = date("m");
                        $dia_actual = date("d");
    
                        if($anno - $anno_actual > 0){
                            $err_fecha = "No estás en el futuro";
                        } elseif($anno - $anno_actual < 0){
                            $err_fecha = "El año no puede ser anterior a 1889";
                        } elseif($anno_lanzamiento - $anno_actual == 5){
                            if($mes_lanzamiento - $mes_actual < 0) {
                                $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                            } elseif($mes_lanzamiento - $mes_actual > 0) {
                                $err_fecha_lanzamiento = "La fecha debe ser anterior a dentro de 5 años";
                            } elseif($mes_lanzamiento - $mes_actual == 0) {
                                if($dia_lanzamiento - $dia_actual <= 0) {
                                    $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                                } elseif($dia_lanzamiento - $dia_actual > 0) {
                                    $err_fecha_lanzamiento = "La fecha debe ser anterior a dentro de 5 años";
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>

        <h1>Formulario usuario</h1>

        <form class="col-4" action="" method="post">
            
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre">
                <?php if(isset($err_nombre)) echo "<span class='error'>$err_nombre</span>" ?>
            </div>

            <div class="mb-3">
                <label>Liga</label>
                <select name="liga"> 
                    <option value="ea">Liga EA Sports</option> 
                    <option value="hy">Liga Hypermotion</option> 
                    <option value="rf">Liga Primera RFEF</option> 
                </select>
                <?php if(isset($err_liga)) echo "<span class='error'>$err_liga</span>" ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input class="form-control" type="text" name="nombre">
                <?php if(isset($err_ciudad)) echo "<span class='error'>$err_ciudad</span>" ?>
            </div>

            <div class="mb-3">
                <label>Campeón de Champions</label>
                <select name="copa"> 
                    <option value="si">SI</option> 
                    <option value="no">NO</option> 
                </select>
                <?php if(isset($err_copa)) echo "<span class='error'>$err_copa</span>" ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Fundación</label>
                <input class="form-control" type="date" name="fecha">
                <?php if(isset($err_fecha)) echo "<span class='error'>$err_fecha</span>" ?>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
        <?php
        if(isset($nombre) && isset($liga) && isset($ciudad) && isset($copa) && isset($fecha)){ ?>
            <h1><?php echo $nombre ?></h1>
            <h1><?php echo $liga ?></h1>
            <h1><?php echo $ciudad ?></h1>
            <h1><?php echo $copa ?></h1>
            <h1><?php echo $fecha ?></h1>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>