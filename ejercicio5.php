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
        <h4>Mostrar en pantalla cual es el mayor de tres números</h4>
        <?php
            $n1=54;
            $n2=10;
            $n3=36;
            if($n1>$n2 && $n1<$n3)
            {
                echo "El primer número (".$n1.") es mayor que el segundo (".$n2.") y es menor que el tercer numero (".$n3.")";
            }else if($n2>$n1 && $n2<$n3)
            {
                echo "El segundo número (".$n2.") es mayor que el primero (".$n1.") y es menor que el tercer numero (".$n3.")";
            }else if($n3>$n2 && $n3<$n1)
            {
                echo "El tercer número (".$n3.") es mayor que el segundo (".$n2.") y es menor que el primer numero (".$n1.")";
            }
        ?>
        <br/>
    <p class="piePagina">NOMBRE DEL ALUMNO: Uriel Gurria Malpica</p>
    </body>
</html>