<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 3</title>
</head>
<body>
<header>
        <h3> Casoo 3</h3>
        </header>
    <section>
    <form action=" Caso 3.php">
            <table border="0" cellspacing = "0" align="center" cellspadding ="0">
        <tr>
            <td>Cantidad: </td>
            <td><input type="text" name="txtCantidad"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"> <input type="reset"></td>
        </tr>
        <?php
        error_reporting(0);
        $Cantidad=$_GET['txtCantidad'];
        
        
        ?>
        <tr>
            <td>Precio del producto: </td>
            <td></td>
        </tr>
        <tr>
            <td>Cantidad:</td>
            <td>
                <?php
                echo $Cantidad;
                ?>
            </td>
        </tr>
        <tr>
            <td>Importe de Compra:</td>
            <td></td>
        </tr>
        <tr>
            <td>Importe de descuento: </td>
            <td></td>
        </tr>
        <tr>
            <td>Importe Neto: </td>
            <td></td>
        </tr>



    </section>

        
    
</body>
</html>