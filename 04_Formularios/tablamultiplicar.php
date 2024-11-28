<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
     <!--
        Formulario que reciba numero y muestre su tabla de multiplicar
    -->
</head>
<body>
    <form action="" method="post">
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" placeholder="Introduce un numero"><br><br>
        <input type="submit" value="Crear Tabla">
    </form>

    <table>
        <thead>
            <tr>
                <th>Número</th>
                <th>Multiplicador</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                //Este codigo se ejecuta cuando el servidor recibe una peticion POST
                
                echo "<tr>";
                for($i = 0; $i < 11; $i++){                    
                    $resultado = $i * $numero;
                    echo "<td>$numero</td>";
                    echo "<td>$i</td>";
                    echo "<td>$resultado</td>"; 
                    $resultado = 1;                   
                }
                echo "</tr>";
            }        
            ?>
        </tbody>
    </table>
    
   

</body>
</html>