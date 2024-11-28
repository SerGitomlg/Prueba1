    <h3>Ejercicio 5</h3>
    <p> Muestra por pantalla los 50 primeros numeros primos</p>
    <?php        
        $n = 2;
        $contador = 0;

        echo "<ol>";
        while($contador < 50){
            $primo = true;            
            for($i = 2; $i <= $n/2; $i++){
                if($n % $i == 0){
                    $primo = false;
                    break;
                }                               
            }
            if($primo){
                $contador++;
                echo "<li>$n</li>";
            }
            $n++;
        }
        echo "</ol>";
    ?>

</body>
</html>