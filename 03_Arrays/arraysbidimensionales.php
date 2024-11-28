<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Bidimensionales</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $array = [1,2,3,4];
        $videojuegos = [
            ["Disco Elysium", "RPG", 9.99],
            ["Dragon Ball Kakarot", "Acción", 59.99],
            ["Persona 3", "RPG", 24.99],
            ["Commando 2", "Estrategia", 24.99],
            ["Hollow Knight", "Metroidvania", 9.99],
            ["Stardew Valley", "Gestion de recursos", 7.99]
        ];
        $nuevo_juego = ["Octopath Traveler", "RPG", 29.95];
        array_push($videojuegos, $nuevo_juego);

        //unset($videojuegos[3]); //Borra la posicion 3 por completo hay que reasignar con array_values
        $videojuegos = array_values($videojuegos);
        array_push($videojuegos, ["Dota 2", "Metroidvania", 0]);
        array_push($videojuegos, ["Ender Lilies", "MOBA", 24.99]);
        array_push($videojuegos, ["Fall Guys", "Plataforma", 0]);
        array_push($videojuegos, ["Rocket League", "Deporte", 0]);
        array_push($videojuegos, ["Lego Fornite", "Acción", 0]);

        for($i = 0; $i < count($videojuegos); $i++){
            if($videojuegos[$i][2] == 0){
                $videojuegos[$i][3] = "Gratis!!";
            }else{
                $videojuegos[$i][3] = "PAGO";
            }
        }

        //PARA ORDENAR UN ARRAY POR COLUMNAS
        $_titulo = array_column($videojuegos, 0);
        $_categoria = array_column($videojuegos, 1);
        $_precio = array_column($videojuegos, 2);

        //Si fuera descendente se pone SORT_DESC
        array_multisort($_titulo, SORT_ASC, $videojuegos);

        $_titulo = array_column($videojuegos, 0);
        $_categoria = array_column($videojuegos, 1);
        $_precio = array_column($videojuegos, 2);
        array_multisort($_categoria, SORT_ASC, 
                        $_precio, SORT_DESC, 
                        $_titulo, SORT_DESC,
                        $videojuegos);

    ?>  
    <table>
        <thead>
            <tr>
                <th>Videojuego</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Oferta</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($videojuegos as $videojuego){
                    //print_r($videojuego); No se usa
                    //echo "$videojuego[0]"; Mejor usarlo asi
                    echo "<br><br>";
                    list($titulo, $categoria, $precio, $oferta) = $videojuego;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$categoria</td>";
                    echo "<td>$precio</td>";
                    echo "<td>$oferta</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>


</body>
</html>