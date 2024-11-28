<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Ejemplo</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="mensaje">
        <input type="submit" value="Enviar">
        <input type="text" name="veces">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Este codigo se ejecuta cuando el servidor recibe una peticion POST
            $mensaje = $_POST["mensaje"];           
            $veces = $_POST["veces"];

            //Añadir al formulario un campo de texto para introducir un numero
            //Mostrar el mensaje tantas veces como pida el numero
            for($i = 0; $i < $veces; $i++){
                echo "<p>$mensaje</p>";
            }
        }
    ?>
    
</body>
</html>