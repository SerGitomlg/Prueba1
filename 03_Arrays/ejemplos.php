<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    
</head>
<body>

/**
* TODOS LOS ARRAYS EN PHP SON ASOCIATIVOS, COMO LOS MAP DE JAVA
*/


    <?php
    echo "<br><br>";
        $numeros = [5,10,9,6,7,4];
        $numeros1 = array(6,10,9,4,3);
        print_r($numeros1);
    echo "<br><br>";

        $animales = ["Perro", "Gato", "Ornitorrinco", "Suricato", "Capibara"];

        $animales1 = [
            "A01" => "Perro",
            "A02" => "Gato",
            "A03" => "Capibara",
        ];
        print_r($animales);
        echo "<p>" . $animales[3] . "</p>";

        $animales[2] = "Koala";
        $animales[6] = "Iguana";
        $animales1["A01"] = "Kai";

        //Sirve para añadir en el Array
        array_push($animales,"Morsa", "Foca"); 
        $animales[] = "Ganso";

        //Para borrar de un array
        unset($animales[1]);

        //Sirve para devolver los valores reordenados y reasigna las claves de un Array
        $animales = array_values($animales);
        print_r($animales);

        //Sirve para contar los valores en el Array
        $cantidad_animales = count($animales);
        echo "<h3>Hay $cantidad_animales animales en el array</h3>";





        //Ordenar lista con un FOR!! Lista ordenada
        echo "<ol>";
        for($i = 0; $i < count($animales); $i++){
            echo "<li>" . $animales[$i] . "</li>";
        }
        echo "</ol>";


        //Ordenar lista con un WHILE!! Lista ordenada
        /*echo "<ol>";
        $i = 0
        while($i < count($animales)){
            echo "<li>" . $animales[$i] . "</li>";
            $i++;
        }
        echo "</ol>";
        */








        /**     EJERCICIO ARRAY
        * 
        *   "4312 TDZ" => "Audi TT"
        *   "7619 DTW" => "Audi Q7"
        *   "5781 LQR" => "Audi S5"
        *   CREAR ARRAY CON 3 COCHES, AÑADIR 2 COCHES CON MATRICULA, 1 SIN MATRICULA
        *   RESETEAR LAS CLAVES Y ALMACENAR EL RESULTADO EN OTRO ARRAY
        */

        $audis = [
            "4312 TDZ" => "Audi TT",
            "7619 DTW" => "Audi Q7",
            "5781 LQR" => "Audi S5",
        ];

        print_r($audis);
        echo "<br>";
        $audis["6715 CPT"] = "Audi RS3";
        $audis["3467 NMS"] = "Audi Q5";
        print_r($audis);
        echo "<br>";
        array_push($audis,"Audi Q3");
        print_r($audis);
        echo "<br>";
        unset($audis[0]);
        print_r($audis);
        echo "<br>";




        echo "<h3>FOREACH array</h3>";
        $coches = array_values($audis);
        echo "<ol>";
        foreach($coches as $coche){
            echo "<li>$coche</li>";
        }
        echo "</ol>";

        echo "<ol>";
        foreach($coches as $matricula => $coche){
            echo "<li>$matricula, $coche</li>";
        }
        echo "</ol>";
    ?>    

    <table>
        <caption>Coches</caption>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Coche</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($audis as $matricula => $audi){
                echo "<tr>";
                echo "<td>$matricula</td>";
                echo "<td>$audi</td>";
                echo "</tr>";
            }
            ?>
             
            <?php    //Mezcla de PHP y HTML
            foreach($audis as $matricula => $audi) { ?>
                <tr>
                    <td><?php echo $matricula ?></td>
                    <td><?php echo $audi ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>