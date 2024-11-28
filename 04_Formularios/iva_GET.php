<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVA GET</title>
    <?php
        require('../05_FUNCIONES/economia.php');
    ?>
    
    
</head>
<body>
    <form action="" method="post">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">
        <br><br>
        <select name="iva">
            <option value="GENERAL">General</option>
            <option value="REDUCIDO">Reducido</option>
            <option value="SUPERREDUCIDO">Superreducido</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    //  isset (is set) devuelve true si la variable existe
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmp_precio = $_GET["precio"];
        if(isset($_POST["iva"])) $tmp_iva = $_POST["iva"];
        $tmp_iva = $_GET["iva"];

        if($tmp_precio == ''){                
            echo "<p>El precio es obligatorio</p>";
        }else{
           /* if(filter_var($tmp_precio, FILTER_VALIDATE_FLOAT) === FALSE){
                echo "<p>El precio debe ser un número</p>";
            }else{
                if($tmp_precio <= 0){
                    echo "<p>El salario debe ser mayor 0</p>";                            
                }else{  */
                    $precio = $tmp_precio;
                //} 
            //}
        }  
        if($tmp_iva == ''){                
            echo "<p>El IVA es obligatorio</p>";
        }else{
            $valores_validos_iva = ["GENERAL", "REDUCIDO", "SUPERREDUCIDO"];
            if(!in_array($tmp_iva, $valores_validos_iva)){
                echo "<p>El IVA solo puede ser: GENERAL REDUCIDO O SUPERREDUCIDO</p>";
            }else{
                $iva = $tmp_iva;
            }
        }
        if(isset($precio) && isset($iva)){
            echo calcularPVP($precio, $iva);
        }
        
    }
    ?>
    
    <?php  /*
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $precio = $_GET["precio"];
        $iva = $_GET["iva"]; 

        if($precio != '' and $iva != ''){
            $pvp = match($iva) {
                "general" => $precio * GENERAL,
                "reducido" => $precio * REDUCIDO,
                "superreducido" => $precio * SUPERREDUCIDO
            };
            echo "<p>El PVP ES $pvp</p>";
        }else{
            echo "<p>Te faltan datos</p>";
        }      
    }*/
    ?>
   
</body>
</html>