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

<?php
 class Auto{
    public $placa;
    public $marca;
    public $color;
    public $modelo;
    public $OnOff="0"; //cuando este apagadoe
    public $ArrDet="0";
    public $km="0";

    function __construct($placa_, $color_, $modelo_)
    {
        $this ->placa =$placa_;
        $this ->color=$color_;
        $this->modelo=$modelo_;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function setPlaca($placa_){
        $this->placa=$placa_;
    }

    public function getModelo(){
       return $this->modelo;
    }

    public function setModelo($modelo_){
        $this->modelo=$modelo_;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color_){
        $this->color=$color_;
    }

    function EncenderApgar(){
        if($this->OnOff=="0"){
            $this->OnOff="1";
            print "<br> El se encuentra encendidoooo ";
        }else{
            $this->OnOff="0";
            print "<br> El auto se encuentra apagafo ";
        }
    }

    function ArranDetAuto(){
        if($this->OnOff=="0"){
            print "<br> Primero debe encender el auto";
        }else{
            if($this->ArrDet=="0"){
                $this->ArrDet="1";
                print "<br> El auto de encendio";
            }else{
                $this->ArrDet="0";
                $this->km=0;
                print "<br> El auto se detuvo";
            }
        }
    }

    function Acelerar(){
        if($this->ArrDet=="1"){
            $this->km++;
            print "<br>Ahora vamos a :" .$this->km- "km por hora";
        }else{
            print "<br> el auto debe estar en movimiento para acelerar";
        }
    }

    function MostrarDatos(){
       print "Mostrar los datos del auto \n" ;
       print "Placa: ".$this-> placa."\n";
       print "Marca: ".$this-> marca. "\n";
       print "Modelo: ".$this-> modelo."\n";
    }










 }


?>
