<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    
</head>
<body>
    <form action="" method="post">
            <label>Desde</label>
            <input type="text" name="desde"><br><br>
            <label>Hasta</label>
            <input type="text" name="hasta"><br><br>
            <label>Múltiplo</label>
            <input type="text" name="multiplo"><br><br>
            <input type="submit" value="Sacar Múltiplos"><br><br>
            </form>

            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                //Este codigo se ejecuta cuando el servidor recibe una peticion POST
                $desde = $_POST["desde"];           
                $hasta = $_POST["hasta"]; 
                $multiplo = $_POST["multiplo"];

                echo "<ul>";
                for($i = $desde; $i <= $hasta; $i++){
                    if($i % $multiplo == 0){
                        echo "<li>$i</li>";
                    }
                }  
                echo "</ul>";      
            }            
        ?>
</body>
</html>