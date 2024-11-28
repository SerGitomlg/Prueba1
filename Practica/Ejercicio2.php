<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
        ?>
        
    </head>
    <body>
            <?php
                $array = [];
                $array1 = [];
                $array2 = [];

                for($i = 0; $i < 5; $i++){
                    $array1[$i] = rand(1,10);  
                    $array2[$i] = rand(10,100); 
                }    
                $array = $array1;   
                /*
                for($i = 0; $i < 5; $i++){
                    $array[1][$i] = $array2[$i];
                }*/

                for($i = 0; $i < 5; $i++){
                    echo "<p>" . $array1[$i] . ", </p>";
                }
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Género</th>
                        <th>Año</th>
                        <th>Duración</th>
                        <th>Estreno</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($animes as $anime){
                            list($titulo, $genero, $anio, $tiempo, $estreno) = $anime;
                            echo "<tr>";
                            echo "<td>$titulo</td>";
                            echo "<td>$genero</td>";
                            echo "<td>$anio</td>";
                            echo "<td>$tiempo</td>";
                            echo "<td>$estreno</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
    </body>
</html>