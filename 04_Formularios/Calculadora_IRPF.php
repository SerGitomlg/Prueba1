<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRPF</title>
    <?php
        require('../05_FUNCIONES/economia.php');
    ?>
</head>
<body>
    <form action="" method="post">
                    <label>Salario NETO</label>
                    <input type="text" name="salario" placeholder="Introduce tu salario NETO"><br><br>
                    <input type="submit" value="Calcular salario bruto"><br><br>
                    </form>

                    <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $tmp_salario = $_POST["salario"];  

                        if($tmp_salario == ''){                
                            echo "<p>El salario es obligatorio</p>";
                        }else{
                        if(filter_var($tmp_salario, FILTER_VALIDATE_INT) === FALSE){
                            echo "<p>El salario debe ser un número</p>";
                        }else{
                            if($tmp_salario <= 0){
                                echo "<p>El salario debe ser mayor 0</p>";                            
                            }else{
                                $salario = $tmp_salario;
                            } 
                        }
                    }
                    if(isset($salario))
                        $pagado = calcularIRPF($salario);

                        echo "<p>Ganas $salario neto y vas a ganar $pagado bruto</p>";                        
                        echo "<h2>PRINGAO</h2>";      
                    }   
                ?>
    
</body>
</html>