<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    
</head>
    <body>
        <?php
                $animes = [
                    ["Dragon Ball", "Aventuras"],
                    ["Shark knight", "Acción"],
                    ["Ataque a los titanes", "Gore"],
                    ["Dead Note", "Misterio"],
                ];
                //Dos formas de añadir animes
                array_push($animes, ["Monster", "Misterio"]); 
                array_push($animes, ["Doraemon", "Infantil"]);   

                //Eliminamos el primer anime
                unset($animes[0]);
                $animes = array_values($animes);



                for($i = 0; $i < count($animes); $i++){
                    $animes[$i][2] = rand(1990,2030);   
                    $animes[$i][3] = rand(1,99); 
                    if($animes[$i][2] <= 2024) $animes[$i][4] = "Ya disponible";
                    else $animes[$i][4] = "Próximamente";
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
                            echo "<br>";
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