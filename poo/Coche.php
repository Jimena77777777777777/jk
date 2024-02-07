<?php

class Coche {

    private $color;
    private $potencia;
    private $velocidad = 0;
    private $combustible;
    private $litrosCombustible = 0;

    public function __construct($combustible = "<br>Gasolina") {
        $this->combustible = $combustible;
    }

    public function __destruct() {
        echo "<br>Objeto destruido.\n";
    }

    public function acelerar($incremento) {
        if ($this->velocidad == 0 && $this->litrosCombustible >= 10) {
            $this->velocidad += $incremento;
            $this->litrosCombustible -= 10;
            echo "<br>Acelerando...\n";
        } else {
            echo "<br>No se puede acelerar, el coche está parado o en reserva.\n";
        }
    }

    public function repostar($tipoCombustible, $litros) {
        if ($this->combustible == $tipoCombustible) {
            $this->litrosCombustible += $litros;
            echo "<br>Repostando...\n";
        } else {
            echo "<br>No se puede repostar, tipo de combustible incorrecto.\n";
        }
    }

    public function enReserva() {
        return $this->litrosCombustible < 10;
    }

    public function estaEnMarcha() {
        return $this->velocidad > 0;
    }

    public function mostrarTipoCombustible() {
        return $this->combustible;
    }

    public function mostrarEstado() {
        echo "<br>Estado del coche:\n";
        echo "<br>Combustible: " . $this->litrosCombustible . " litros de " . $this->combustible . "\n";
        echo "<br>Velocidad: " . $this->velocidad . " km/h\n";
        echo "<br>En Reserva: " . ($this->enReserva() ? "Sí" : "No") . "\n";
        echo "<br>En Marcha: " . ($this->estaEnMarcha() ? "Sí" : "No") . "\n";
    }
}

$miCoche = new Coche("Gasolina");
echo "El coche usa " . $miCoche->mostrarTipoCombustible() . PHP_EOL;

$miCoche->mostrarEstado();

$miCoche->repostar("<br> Gasolina", 50);
$miCoche->acelerar(20);

$miCoche->mostrarEstado();

$miCoche->repostar("<br>Diesel", 30);
$miCoche->acelerar(15);

$miCoche->mostrarEstado();

?>
