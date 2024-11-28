<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $peliculas = [
            ["Karate a muerte en Torremolinos", "Acción", 1975],
            ["Sharknado 1-5", "Acción", 2015],
            ["Princesa por sorpresa", "Comedia", 2008],
            ["Temblores 4", "Terror", 2018],
            ["Cariño he encogido a los niños", "Aventuras", 2001],
            ["Stuart Little", "Infantil", 2000]
        ];
        
        /*
            Añadir con un rand la duracion de cada pelicula nueva columna [30, 240]
            Añadir el tipo de pelicula:
                Cortometraje duracion < 60
                largometraje duracion >= 60
            Mostrar en una tabla todas las columnas y por este orden:
                1 Genero
                2 Año
                3 Titulo(alfabeticamente y el año de mas reciente a mas antiguo)
        */
        for($i = 0; $i < count($peliculas); $i++){
            $peliculas[$i][3] = rand(30,240);   
            if($peliculas[$i][3] < 80) $peliculas[$i][4] = "Cortometraje";
            else $peliculas[$i][4] = "Largometraje";                    
        }       
        $_titulo = array_column($peliculas, 0);
        $_categoria = array_column($peliculas, 1);
        $_anio = array_column($peliculas, 2);

        array_multisort($_categoria, SORT_ASC, $_anio, SORT_DESC, $_titulo, SORT_ASC, $peliculas);

    ?>
    <table>
        <thead>
            <tr>
                <th>Pelicula</th>
                <th>Categoria</th>
                <th>Año</th>
                <th>Duracion</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($peliculas as $pelicula){
                    list($titulo, $categoria, $anio, $duracion, $tipo) = $pelicula;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$categoria</td>";
                    echo "<td>$anio</td>";
                    echo "<td>$duracion</td>";
                    echo "<td>$tipo</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>