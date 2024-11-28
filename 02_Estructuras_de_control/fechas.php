<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
        $numero = "2";
        $numero = (int)$numero;
        
        if($numero === 2){
            echo"Exito";
        }else{
            echo"No Exito";
        }

        $hora = (int)date("G");
        #var_dump($hora);
        $dia = "";        
        if($hora >=6 and $hora <=11){
            $dia = "estamos de mañana";
        }elseif($hora >=12 and $hora <=14){
            $dia = "es mediodia";
        }elseif($hora >=15 and $hora <=20){
            $dia = "es por la tarde";
        }elseif($hora >=20 and $hora =0){
            $dia = "es de noche";
        }elseif($hora >=1 and $hora <=5){
            $dia = "es madrugada";
        }
        echo" ahora mismo $dia";
        

        $hora_exacta = date("H:i:s");
        echo "<h1>$hora_exacta</h1>";



        $diasem = date("l");
        var_dump($diasem);

        switch($diasem){
            case "Monday":
            case "Wednesday":
            case "Friday":
                echo "Tenémos clase.";
                break;
            default:
                echo "No tenémos clase";                                
        }

    ?>
    
</body>
</html>