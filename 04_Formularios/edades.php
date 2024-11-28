<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <!--
        Crear un formulario que reciba el nombre y la edad, si es menor de 18 
        se mostrara el nombre y que es menor de edad- Si esta entre 18 y 65 
        nombre y es may0r de edad y si es mas de 65 nombre y jubilado
    -->
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre"><br><br>

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad" placeholder="Introduce tu edad"><br><br>
        
        <input type="submit" value="Enviar">

    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Este codigo se ejecuta cuando el servidor recibe una peticion POST
            $nombre = $_POST["nombre"];           
            $edad = $_POST["edad"];
            $mensaje = "";
            
            $resultado = match (true) {
                $edad < 18 => "menor de edad",
                $edad >= 18 and $edad <=65 => "mayor de edad",
                $edad > 65 => "jubilado",
            };
            echo "<h1>$nombre eres $resultado</h1>";
        }        
    ?>

</body>
</html>