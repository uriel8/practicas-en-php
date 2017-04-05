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
            $dia = $_POST['dia'];
            if($dia>=8)
            {
                echo 'El numero es mayor a 7, por favor vuelva a poner el numero de nuevo';
            }
            else
            {
                if($dia==1) 
                {   
                    echo 'Es lunes';
                }
                else if($dia==2) 
                {
                echo 'Es martes';
                }
                else if($dia==3) 
                {
                    echo 'Es miercoles';
                }
                else if($dia==4) 
                {
                    echo 'Es jueves';
                }
                else if($dia==5) 
                {
                    echo 'Es viernes';
                }
                else if($dia==6) 
                {
                    echo 'Es sabado';
                }
                else if($dia==7) 
                {
                    echo 'Es domingo';
                }
            }
        ?>
        <br/>
        <p class="piePagina">NOMBRE DEL ALUMNO: Uriel Gurria Malpica</p>
    </body>
</html>