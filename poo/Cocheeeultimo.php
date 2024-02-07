<?php


class Cocheeeultimo {
//atributos
    public $color;
    public $potencia;
    public  $velocidad = 0;
    public  $combustible;
    public  $litrosCombustible = 0;

    public function __construct($combustible = "Gasolina") {
        $this->combustible = $combustible;
    }

    public function __destruct() {
        echo "Objeto destruido.\n";
    }

    public function acelerar($incremento) {
        if ($this->velocidad == 0 && $this->litrosCombustible >= 10) {
            $this->velocidad += $incremento;
            $this->litrosCombustible -= 10;
            return $this->velocidad;
        } else {
            return 0;
        }
    }

    public function repostar($tipoCombustible, $litros) {
        if ($this->combustible == $tipoCombustible) {
            $this->litrosCombustible += $litros;
            return $this->litrosCombustible;
        } else {
            return 0;
        }
    }

    public function enReserva() {
        return $this->litrosCombustible < 10;
    }

    public function estaEnMarcha() {
        return $this->velocidad > 0;
    }

    public function estado() {
        return $this->estaEnMarcha() ? "Moviéndose" : "Parado";
    }
}

$miCoche = new Cocheeeultimo('Gasoil');

echo "<br> Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10). "\n";
echo "<br> Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", 40)."\n";
echo "<br> Combustible después de echar 40 litros de gasóleo: " . $miCoche->repostar("Gasoil", 40) . "\n";
echo "<br> Velocidad después de acelerar con combustible en el depósito: " . $miCoche->acelerar(10) . "\n";
echo "<br> Estado del coche: " . $miCoche->estado() . "\n";

?>



