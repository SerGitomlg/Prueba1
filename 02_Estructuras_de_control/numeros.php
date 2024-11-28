<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
</head>
<body>
    
    <?php
        $numero = 2;
        #Forma 1
        if($numero > 0){
            echo "<p>1- El número $numero es mayor que cero</p>";
        }
        #Forma 2
        if($numero > 0)echo "<p>2- El número $numero es mayor que cero</p>";
        #Forma 3
        if($numero > 0):
            echo "<p>3- El número $numero es mayor que cero</p>";
        endif;



        $numero1 = -4;
        #Forma 1
        if($numero1 > 0){
            echo "<p>1- El número $numero1 es mayor que cero</p>";
        }else{
            echo "<p>1- El número $numero1 es menor que cero</p>";
        }
        #Forma 2
        if($numero1 > 0)echo "<p>2- El número $numero1 es mayor que cero</p>";
        else echo "<p>2- El número $numero1 es menor que cero</p>";
        #Forma 3
        if($numero1 > 0):
            echo "<p>3- El número $numero1 es mayor que cero</p>";
        else:
            echo "<p>3- El número $numero1 es menor que cero</p>";
        endif;




        $numero2 = 0;
        #Forma 1
        if($numero2 > 0){
            echo "<p>1- El número $numero2 es mayor que cero</p>";
        }elseif ($numero2==0){
            echo "<p>1- El número $numero2 es igual que cero</p>";
        }
        else{
            echo "<p>1- El número $numero2 es menor que cero</p>";
        }
        #Forma 2
        if($numero1 > 0)echo "<p>2- El número $numero2 es mayor que cero</p>";
        elseif ($numero2==0) echo "<p>1- El número $numero2 es igual que cero</p>";
        else echo "<p>2- El número $numero2 es menor que cero</p>";
        #Forma 3
        if($numero2 > 0):
            echo "<p>3- El número $numero2 es mayor que cero</p>";
        elseif($numero2==0):
            echo "<p>1- El número $numero2 es igual que cero</p>";
        else:
            echo "<p>3- El número $numero2 es menor que cero</p>";
        endif;
    ?>

    <?php
        #Forma 1
        $num = 9;
        if($num >=-10 and $num < 0):
            echo "<p>3- El número $num esta en el rango [-10,0)</p>";
        elseif ($num >= 0 and $num <= 10):
            echo "<p>3- El número $num esta en el rango [0,10]</p>";
        elseif ($num > 10 and $num <= 20):
            echo "<p>3- El número $num esta en el rango (10,20]</p>";
        else: 
            echo "<p>3- El número $num esta fuera del rango</p>";
        endif;

        #Forma 2
        $num = 9;
        if($num >=-10 and $num < 0){
            echo "<p>3- El número $num esta en el rango [-10,0)</p>";
        }elseif ($num >= 0 and $num <= 10){
            echo "<p>3- El número $num esta en el rango [0,10]</p>";
        }elseif ($num > 10 and $num <= 20){
            echo "<p>3- El número $num esta en el rango (10,20]</p>";
        }else{
            echo "<p>3- El número $num esta fuera del rango</p>";
        }

        #Forma 3
        $num = 9;
        if($num >=-10 and $num < 0) echo "<p>3- El número $num esta en el rango [-10,0)</p>";
        elseif ($num >= 0 and $num <= 10) echo "<p>3- El número $num esta en el rango [0,10]</p>";
        elseif ($num > 10 and $num <= 20) echo "<p>3- El número $num esta en el rango (10,20]</p>";
        else echo "<p>3- El número $num esta fuera del rango</p>";


        /* Comprobar de tres formas diferentes (con IF) cuantos digitos tiene el numero aleatorio */

        $numero_aleatorio = rand(1,200);
        $digitos = 0;
        if($numero_aleatorio >= 1 and $numero_aleatorio < 10){
            $digitos = 1;
        }elseif ($numero_aleatorio >= 10 and $numero_aleatorio < 100){
            $digitos = 2;
        }elseif($numero_aleatorio >= 100 and $numero_aleatorio <= 200){
            $digitos = 3;
        }

        $texto = "dígitos";
        if($digitos==1){

        }
        echo "<p>3- El número $numero_aleatorio tiene 1 dígito</p>";

        if($numero_aleatorio >= 1 and $numero_aleatorio <= 9):
            echo "<p>3- El número $numero_aleatorio tiene 1 dígito</p>";
        elseif ($numero_aleatorio >= 10 and $numero_aleatorio <= 99):
            echo "<p>3- El número $numero_aleatorio tiene 2 dígitos</p>";
        elseif($numero_aleatorio >= 100 and $numero_aleatorio <= 200):
            echo "<p>3- El número $numero_aleatorio tiene 3 dígitos</p>";
        endif;

        if($numero_aleatorio >= 1 and $numero_aleatorio < 10) echo "<p>3- El número $numero_aleatorio tiene 1 dígito</p>";
        elseif ($numero_aleatorio >= 10 and $numero_aleatorio < 100) echo "<p>3- El número $numero_aleatorio tiene 2 dígitos</p>";
        elseif($numero_aleatorio >= 100 and $numero_aleatorio <= 200) echo "<p>3- El número $numero_aleatorio tiene 3 dígitos</p>";

        $numero_aleatorio_decimal = rand(10,100)/10;

        $n = rand(1,3);

        switch($n){
            case 1:
                echo "El número es 1";
                break;
            case 2:
                echo "El número es 2";
                break;
            default:
                echo "El número es 3";                                
        }
    ?>
    
    <h3>Ejercicio 3</h3>
    <p> Calcular la suma de los numeros pares entre 1 y 20</p>
    <?php
        $i = 1;
        $suma = 0;
        while($i <= 20){
            $suma += $i;
        }
        $i++;
        echo "<p> La suma es : $suma</p>";
    ?>



    <h3>Ejercicio 4</h3>
    <p> Calcular el factorial de 6 con while</p>
    <?php
        $factorial = 6;
        $i = 1;
        while($i <= $factorial){
            $resultado * $i;
            $i++;
        }
        echo "<p> El factorial de $factorial es: $resultado</p>";
    ?>




    <h3>Lista con FOR</h3>
    <?php
        echo "<ul>";
        for($i = 1; $i <= 10; $i++){
            echo "<li>$i</li>";
        }
        echo "</ul>";
    ?>


    <h3>Lista con FOR con BREAK cursed</h3>
        <?php
            echo "<ul>";
            //Código ofuscado
            for($i = 1; ; ){
                if($i > 10){
                    break;
                }
                echo "<li>$i</li>";
                $i++;
            }
            echo "</ul>";
        ?>
    */
