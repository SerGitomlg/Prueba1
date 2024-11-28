<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
        <form action="" method="post">

        <label>Introduce un número</label>
        <input type="text" name="numero"><br><br>

        <label>Unidad original</label>
        <select name="opcion">
            <option value="S">Sumatorio</option>
            <option value="F">Factorial</option>
        </select><br><br>        
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero = $_POST["numero"];           
                $opcion = $_POST["opcion"]; 


                if($opcion == "S"){
                    $resultadoSum = 1;
                    $i = 1;
                    while($i <= $numero){
                        $resultadoSum += $i;
                        $i++;
                    }
                    echo "<p> El sumatorio de $numero es: $resultadoSum</p>";
                }elseif($opcion == "F"){
                    $resultadoFac = 1;
                    $i = 1;
                    while($i <= $numero){
                    $resultadoFac *= $i;
                    $i++;
                    }
                    echo "<p> El factorial de $numero es: $resultadoFac</p>";
                }
            }       
        ?>
    </body>
</html>