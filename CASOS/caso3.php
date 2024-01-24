<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo.css">
    <title>Caso 3</title>
</head>
<body>
    <header>
        <h3> CASO 3</h3>
        </header>
    <section>
    <form action=" Caso 3.php">
            <table border="0" cellspacing = "0" align="center" cellspadding ="0">
                <tr>
                    <td>Cantidad:</td>
                    <td><input type="text" name="txtCantidad"></td>
                </tr>
                  <?php
                error_reporting(0);
                $Cantidad=$_GET['txtCantidad'];
               ?>

                <tr>
                    <td></td>
                    <td><input type="submit"> <input type="reset"></td>
                </tr>
                <tr>
                    <td>Precio de producto: </td>
                    <td>

                    </td>
                </tr>


                 <tr>
                    <td>Cantidad: </td>
                    <td>
                        <?
                        echo $Cantidad;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe de compra:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>importe de descuento:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>importe neto:</td>
                    <td></td>
                </tr>
    </section>

    <footer> <h6> Selin Flores</h6></footer>
</body>
</html>