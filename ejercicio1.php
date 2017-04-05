<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicios de PHP</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <ul>
            <li><a href="ejercicio1.php">Ejercicio 1</a></li>
            <li><a href="ejercicio2.php">Ejercicio 2</a></li>
            <li><a href="ejercicio3.php">Ejercicio 3</a></li>
            <li><a href="ejercicio4.php">Ejercicio 4</a></li>
            <li><a href="ejercicio5.php">Ejercicio 5</a></li>
            <li><a href="ejercicio6.php">Ejercicio 6</a></li>
            <li><a href="ejercicio7.php">Ejercicio 7</a></li>
            <li><a href="ejercicio8.php">Ejercicio 8</a></li>
            <li><a href="ejercicio9.php">Ejercicio 9</a></li>
            <li><a href="ejercicio10.php">Ejercicio 10</a></li>
        </ul>
        
        <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <h4>Hacer un programa que sume, reste, multiplique y divida dos variables</h4>
        
        <?php
            $numero1=10;
            $numero2=12;
            //sumar
            $suma=$numero1+$numero2;
            echo "$numero1+$numero2"."<br>";
            echo "suma = ".$suma."<br>";
            //restar
            $resta=$numero1-$numero2;
            echo "$numero1-$numero2"."<br>";
            echo "resta = ".$resta."<br>";
            //multiplicar
            $multiplicar=$numero1*$numero2;
            echo "$numero1*$numero2"."<br>";
            echo "multiplicar = ".$multiplicar."<br>";
            //dividir
            $dividir=$numero1*$numero2;
            echo "$numero1/$numero2"."<br>";
            echo "dividir = ".$dividir."<br>";
        ?>
        <br/>
        <p class="piePagina">NOMBRE DEL ALUMNO: Uriel Gurria Malpica</p>
    </body>
</html>