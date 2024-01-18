<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <header>
    <h3>MANEJO DE OPERADORES EN PHP</h3>
   </header> 

    <section>
    <?php

    /**
     * $a= pow(2,5);
     * $b= sqrt(5);
     */

     $trabajador= "menli";
     $fechaNacimiento= "28/03/2004";
     $numerodehijos=1;
     $sueldo=980.50;
     $activo= false;

     echo "<br> Valor de variable". "-". "Tipo de dato";
     echo "<br>". $trabajador. "-". gettype($trabajador);
     echo "<br>" . $fechaNacimiento. "-". gettype($fechaNacimiento);
     echo "<br>" . $numerodehijos. "-". gettype($numerodehijos);
     echo "<br>" . $sueldo. "-". gettype($sueldo);
     echo "<br>" .$activo. "-". gettype($activo);

    ?>
    </section>

    <footer>
        <h6>uwu</h6>
    </footer>
</body>
</html>