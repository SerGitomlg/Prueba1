<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios formularios</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
        
        require('../05_FUNCIONES/temperatura.php');
        require('../05_FUNCIONES/edades.php');
    ?>
</head>
<body>
<body>
    <h1>Formulario temperaturas</h1>
    <form action="" method="post">
        <label>Temperatura original</label>
        <input type="text" name="temperatura"><br><br>
        <label>Unidad original</label>
        <select name="inicial">
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Fahrenheit</option>
        </select><br><br>
        <label>Unidad final</label>
        <select name="final">
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Fahrenheit</option>
        </select>
        <br><br>
        <input type="hidden" name="accion" value="formulario_temperaturas">
        <input type="submit" value="Convertir">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        //  Formulario de temperaturas
            if($_POST["accion"] == "formulario_temperaturas"){
                $temperatura = $_POST["temperatura"];
                $inicial = $_POST["inicial"];
                $final = $_POST["final"];

                if($temperatura != ''){
                    if(is_numeric($temperatura)){
                        if($inicial == "C" && $temperatura >= -273.15){
                            echo convertirTemperatura($temperatura, $inicial, $final);
                        }elseif($inicial == "C" && $temperatura < -273.15){
                            echo "<p>La temperatura debe ser mayor a -273.15</p>";
                        }
                        if($inicial == "K" && $temperatura >= 0){
                            echo convertirTemperatura($temperatura, $inicial, $final);
                        }elseif($inicial == "K" && $temperatura < 0){
                            echo "<p>La temperatura debe ser mayor a 0</p>";
                        }
                        if($inicial == "F" && $temperatura >= -459.67){
                            echo convertirTemperatura($temperatura, $inicial, $final);
                        }elseif($inicial == "F" && $temperatura < -459.67){
                            echo "<p>La temperatura debe ser mayor a -459.67</p>";
                        }
                    }else{
                        echo "<p>La temperatura debe ser un número</p>";
                    }
                }else{
                    echo "<p>Falta la temperatura</p>";
                }          
            }
        }   
    ?> 

    <h1>Formulario edades</h1>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad"><br><br>
        <input type="hidden" name="accion" value="formulario_edades">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //  Formulario de edades
        if($_POST["accion"] == "formulario_edades"){
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];
            comprobarEdad($nombre, $edad);
        }        
    }
    ?>
</body>
</html>