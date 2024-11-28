<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

</head>
<body>
    <form action="" method="post">
                <label>Temperatura original</label>
                <input type="text" name="temperatura"><br><br>
                <label>Unidad original</label>
                <select name="inicial">
                    <option value="C">Celsius</option>
                    <option value="K">Kelvin</option>
                    <option value="F">Farenheit</option>
                </select><br><br>
                <label>Unidad final</label>
                <select name="final">
                    <option value="C">Celsius</option>
                    <option value="K">Kelvin</option>
                    <option value="F">Farenheit</option>
                </select><br><br>
                <input type="submit" value="Convertir"><br><br>
                </form>

                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $temperatura = $_POST["temperatura"];           
                        $inicial = $_POST["inicial"]; 
                        $final = $_POST["final"];

                        $temperatura_final = $temperatura;

                        if($inicial == "C"){
                            if($final == "k"){
                                $temperatura_final = $temperatura + 273.15;
                            }elseif($final == "F"){
                                $temperatura_final = $temperatura * (9/5) + 32;
                            }
                        }elseif($inicial == "K"){
                            if($final == "C"){
                                $temperatura_final = $temperatura - 273.15;
                            }elseif($final == "F"){
                                $temperatura_final = ($temperatura - 273) * (9/5) + 32;
                            }
                        }elseif($inicial == "F"){
                            if($final == "C"){
                                $temperatura_final = ($temperatura - 32) * (5/9);
                            }elseif($final == "K"){
                                $temperatura_final = ($temperatura - 32) * (5/9) + 273.15;
                            }
                        } 
                        echo "<p>$temperatura_final</p>";                    
                    }       
                ?>
</body>
</html>