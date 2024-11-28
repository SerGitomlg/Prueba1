<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    <?php
    require('../05_FUNCIONES/potencias.php');
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" name="base" id="base" placeholder="Introduce la base"><br><br>

        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" id="exponente" placeholder="Introduce el exponente"><br><br>
        
        <input type="submit" value="Elevar">

    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "<p>Entramos en la respuesta</p>";
            $tmp_base = $_POST["base"];           
            $tmp_exponente = $_POST["exponente"];

            if($tmp_base == ''){
                echo "<p>La base es obligatoria</p>";
            }else{
                if(filter_var($tmp_base, FILTER_VALIDATE_INT) === FALSE){
                    echo "<p>La base debe ser un número</p>";                                       
                }else{
                    $base = $tmp_base; 
                }
            }
            
            if($tmp_exponente == ''){                
                    echo "<p>El exponente es obligatorio</p>";
            }else{
                if(filter_var($tmp_exponente, FILTER_VALIDATE_INT) === FALSE){
                    echo "<p>El exponente debe ser un número</p>";
                }else{
                    if($tmp_exponente < 0){
                        echo "<p>El exponente debe ser mayor o igual que 0</p>";                            
                    }else{
                        $exponente = $tmp_exponente;
                    } 
                }
            }
            if(isset($base) && isset($exponente)){
                $resultado = potencia($base, $exponente);
                echo "<h1>El resultado es $resultado</h1>";
            }            
        }        
    ?>
</body>
</html>