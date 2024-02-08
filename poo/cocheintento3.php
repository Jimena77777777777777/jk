<?php

class Coche
{
    private $combustible;
    private $velocidad;
    private $deposito;

    public function __construct($tipoCombustible = 'Gasolina')
    {
        $this->combustible = $tipoCombustible;
        $this->velocidad = 0;
        $this->deposito = 0;
    }

    public function acelerar($cantidad)
    {
        if ($this->velocidad > 0 && $this->deposito >= 10) {
            $this->velocidad += $cantidad;
        }

        return $this->velocidad;
    }

    public function repostar($tipoCombustible, $litros)
    {
        if ($tipoCombustible === $this->combustible) {
            $this->deposito += $litros;
        }

        return $this->deposito;
    }

    public function estado()
    {
        if ($this->velocidad > 0) {
            return "Moviéndose";
        } else {
            return "Parado";
        }
    }
}

// Inicializar variables
$tipoCombustible = isset($_POST['tipoCombustible']) ? $_POST['tipoCombustible'] : 'Gasolina';
$aceleracion = isset($_POST['aceleracion']) ? $_POST['aceleracion'] : 0;
$repostarTipo = isset($_POST['repostarTipo']) ? $_POST['repostarTipo'] : 'Gasolina';
$repostarCantidad = isset($_POST['repostarCantidad']) ? $_POST['repostarCantidad'] : 0;

// Crear objeto $miCoche
$miCoche = new Coche($tipoCombustible);

// Inicializar mensaje de error
$errorMensaje = '';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar acciones del formulario
    $miCoche->acelerar($aceleracion);

    // Verificar si el tipo de combustible es "Petroleo"
    if ($tipoCombustible === 'Petroleo') {
        $errorMensaje = "Solo se acepta gasolina. Selecciona otro tipo de combustible.";
    } else {
        $miCoche->repostar($repostarTipo, $repostarCantidad);
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoo</title>
</head>
<body>
    <form action="" method="post">
        <label for="tipoCombustible">Tipo de Combustible:</label>
        <select name="tipoCombustible">
            <option value="Gasolina" <?php if ($tipoCombustible == 'Gasolina') echo 'selected'; ?>>Gasolina</option>
            <option value="Petroleo" <?php if ($tipoCombustible == 'Petroleo') echo 'selected'; ?>>Petroleo</option>
        </select>

        <label for="aceleracion">Cantidad de Aceleración:</label>
        <input type="text" name="aceleracion" value="<?= $aceleracion ?>">

        <label for="repostarTipo">Tipo de Combustible a repostar:</label>
        <select name="repostarTipo">
            <option value="Gasolina" <?php if ($repostarTipo == 'Gasolina') echo 'selected'; ?>>Gasolina</option>
            <option value="Petroleo" <?php if ($repostarTipo == 'Petroleo') echo 'selected'; ?>>Petroleo</option>
        </select>

        <label for="repostarCantidad">Cantidad a repostar:</label>
        <input type="text" name="repostarCantidad" value="<?= $repostarCantidad ?>">

        <input type="submit" value="Enviar">
    </form>

    <?php
    // Mostrar resultados solo si se ha enviado el formulario y no hay error
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errorMensaje)) {
        echo "<p>Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar($aceleracion) . "</p>";
        echo "<p>Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", $repostarCantidad) . "</p>";
        echo "<p>Combustible después de echar {$repostarCantidad} litros de {$repostarTipo}: " . $miCoche->repostar($repostarTipo, $repostarCantidad) . "</p>";
        echo "<p>Velocidad después de acelerar con combustible en el depósito: " . $miCoche->acelerar($aceleracion) . "</p>";
        echo "<p>Estado del coche: " . $miCoche->estado() . "</p>";
    } else {
        // Mostrar mensaje de error si existe
        if (!empty($errorMensaje)) {
            echo "<p>{$errorMensaje}</p>";
        }
    }
    ?>
</body>
</html>

