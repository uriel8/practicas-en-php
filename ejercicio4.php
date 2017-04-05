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
        <h4>Mostrar en pantalla cual es el mayor de dos números</h4>
        <?php
            $n1=54;
            $n2=10;
            if($n1>$n2)
            {
                echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
            }else if($n1==$n2)
            {
                echo "El primer número (".$n1.") es igual que el segundo (".$n2.")";
            }else
            {
                echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
            }
        ?>
        <br/>
    <p class="piePagina">NOMBRE DEL ALUMNO: Uriel Gurria Malpica</p>
    </body>
</html>