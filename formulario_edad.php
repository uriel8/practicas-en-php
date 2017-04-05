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
         <br/>
        <br/>
        <br/>
        <?php
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            echo 'Tu nombre es: '.$nombre.'.     ';
            if($edad<=18) 
            {
                echo 'Eres mayor de edad, tienes: '.$edad.' ';
            }else 
            {
                echo 'Eres menor de edad, tienes: '.$edad.' ';
            }
        ?>
        <br/>
        <p class="piePagina">NOMBRE DEL ALUMNO: Uriel Gurria Malpica</p>
    </body>
</html>