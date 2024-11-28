<?php
    function comprobarEdad(string $nombre, int $edad){            
            $resultado = match (true) {
                $edad < 18 => "menor de edad",
                $edad >= 18 and $edad <=65 => "mayor de edad",
                $edad >= 67 => "jubilado",
            };
            echo "<h1>$nombre eres $resultado</h1>";
    }
?>