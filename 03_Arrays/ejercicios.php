<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <!-- Ejercicio 1
        Desarrollo Servidor => Alejandra
        Desarrollo Cliente => José Miguel
        Interfaces => José Miguel
        Despliegues => Jaime
        Empresas => Andrea
        Inglés => Virginia

        Mostrarlo todo en una tabla   -->

        <?php
            $asignaturas = [
                "Desarrollo Servidor" => "Alejandra",
                "Desarrollo Cliente" => "José Miguel",
                "Interfaces" => "José Miguel",
                "Despliegues" => "Jaime",
                "Empresas" => "Andrea",
                "Ingles" => "Virginia",
            ];
        ?>
        <table>
            <thead>
                <tr>
                    <th>Asignatura</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    krsort($asignaturas);
                    foreach($asignaturas as $asignatura => $profesor){
                        echo "<tr>";
                        echo "<td>$asignatura</td>";
                        echo "<td>$profesor</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>



    <!--  Ejercicio 2

        Francisco => 3
        Daniel => 5
        Aurora => 10
        Luis => 7
        Samuel => 9
        
        Mostrarlo en una tabla con 3 columnas   alumno/tabla/notas(suspenso-aprobado)   -->
        <?php
        $alumnos = [
            "Francisco" => "3",
            "Daniel" => "5",
            "Aurora" => "10",
            "Luis" => "7",
            "Samuel" => "9",
            "Ismael" => "0",
            "Vicente" => "1",
            "Juanjo" => "2",
        ];
        ?>
        <br><br><br>
        <table>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($alumnos as $alumno => $nota){ ?>
                <tr class="<?php if($nota < 5) echo "suspenso";
                else echo "aprobado"; ?>">
                    <td><?php echo $alumno ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota < 5) echo "Suspenso";
                        else echo "Aprovado";
                        ?>
                    </td>
                </tr>
               <?php } ?>
        </tbody>
    </table>
    <?php
    /*
        Insertar dos nuevos estudiantes con notas entre 0 y 10
        Borrar un estudiante por su clave
        Mostrar en una nueva tabla todo ordenado por los nombres en orden alfabeticamente
        Mostrar en una tabla todo ordenado por la nota de 10 a 0
        */

        $alumno["Paula"] = rand(0,10);
        $alumno["Waluis"] = rand(0,10);

        unset($alumnos["Vicente"]);

        krsort($alumnos);        
    ?>
    <table>
        <caption>Estudiantes ordenados de menor a mayor por nota</caption>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($alumnos as $alumno => $nota){ ?>
                <tr class="<?php if($nota < 5) echo "suspenso";
                else echo "aprobado"; ?>">
                    <td><?php echo $alumno ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota < 5) echo "Suspenso";
                        else echo "Aprovado";
                        ?>
                    </td>
                </tr>
               <?php } ?>
        </tbody>
    </table>

    <br><br><br>

    <table>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($alumnos as $alumno => $nota){ ?>
                <tr class="<?php if($nota < 5) echo "suspenso";
                else echo "aprobado"; ?>">
                    <td><?php echo $alumno ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota < 5) echo "Suspenso";
                        else echo "Aprovado";
                        ?>
                    </td>
                </tr>
               <?php } ?>
        </tbody>
    </table>
</body>
<html>