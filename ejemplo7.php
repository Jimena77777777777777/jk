<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de constantes</title>
</head>
<body>
<header>
    <h3>MANEJO DE CONSTANTES</h3>
   </header> 

   <section>
    <?PHP
    define("PI", 3.1416);
    define("IGV",0.18);

    $radio =12;
    $valorVenta= 250.50;

    echo "El área del circulo con radio $radio es";
    $area= PI*$radio*$radio;
    $impuesto= $valorVenta * IGV;

    echo "<br> El area del circulo con radio $radio es $area";
    echo "<br> El impuetso a la venta de $valorVenta es $impuesto";

    ?>
   </section>



</body>
</html>