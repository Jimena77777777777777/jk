<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTAS</title>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <header>
        <h3>VENTAS DE PRODUCTOS ELECTRODOMESTICOS </h3>
        <img src="../imagenes/cocina.jpg" width="700" height="480">
    </header>
    <section>
        <form action="caso1clase.php" method="post">
            <?php
            error_reporting(0);
            $cliente = $_POST['txtCliente'];
            $cantidad = $_POST['txtCantidad'];
            $producto = $_POST['selProducto'];

            $precio = 0; 
            switch ($producto) {
                case 'cocina':
                    $precio = 1200;
                    break;
                case 'refrigeradora':
                    $precio = 2500;
                    break;
                case 'television':
                    $precio = 3200;
                    break;
                case 'lavadora':
                    $precio = 1000;
                    break;
                case 'radiograbadora':
                    $precio = 700;
                    break;
            }
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Cliente: </td>
                    <td><input type="text" name="txtCliente" value="<?php echo $cliente; ?>"></td>
                </tr>
                <tr>
                    <td>Producto:</td>
                    <td>
                        <select name="selProducto">
                            <option value="cocina" <?php echo ($producto == 'cocina') ? 'selected' : ''; ?>>Cocina</option>
                            <option value="refrigeradora" <?php echo ($producto == 'refrigeradora') ? 'selected' : ''; ?>>Refrigeradora</option>
                            <option value="television" <?php echo ($producto == 'television') ? 'selected' : ''; ?>>Television</option>
                            <option value="lavadora" <?php echo ($producto == 'lavadora') ? 'selected' : ''; ?>>Lavadora</option>
                            <option value="radiograbadora" <?php echo ($producto == 'radiograbadora') ? 'selected' : ''; ?>>Radiograbadora</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCantidad" value="<?php echo $cantidad; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"> </td>
                </tr>
                <tr>
                    <td>Precio del producto : </td>
                    <td><?php echo $precio; ?></td>
                </tr>
                <tr>
                    <td>Subtotal a pagar : </td>
                    <td><?php echo $precio * $cantidad; ?></td>
                </tr>
                <tr>
                    <td>Monto de descuento :</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Monto a pagar :</td>
                    <td></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <H6>Alee Flores</H6>
    </footer>
</body>
</html>
