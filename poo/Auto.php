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

