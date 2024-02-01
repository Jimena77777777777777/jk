<?php
/**pradigma es un conjunto de creencias, valores y prácticas 
   que constituyen una forma particular de ver e interpretar el mundo 
   *
   *    1)   atributos o propiedades: son carateristicas}
   *    2)   methodo: cosas que puedo realizar con es objeto 
   *    3)   clase: representa la idea que yo teng8 eb ese objeto (plantilla del cual voy a crear varios obejtos)
   * 
   * programing
   * 
   * clases: un plantilla de la cual se basara para crear un objeto
   * objeto: elemento del mundo real
   * 
   */
  /*
  mala practica:

   $nombre="Yu-jin";
   $edad=25;
   $pais="Perú";

   $nombre1="Mi-nho";
   $edad1=20;
   $pais1="Chile";
*/
/*---------------------------------------------------------------------------------------
class Persona{
    
    //atributos o propiedades
    public $nombre;
    public $edad;
    public $pais;

}

$persona1=new Persona; // instanciar crear un obketo de la clase persona
$persona2=new Persona; 

$persona1 ->nombre="Melissa";
$persona1 ->edad=25;
$persona1 ->pais="Chile";

$persona2 ->nombre="Vanessa";
$persona2 ->edad=19;
$persona2 ->pais="Venezuela";

echo $persona1-> nombre. "<br>". "tiene ".$persona1->edad."años";
echo "<br>";
echo $persona2-> nombre. "<br>"."tiene ".$persona2->edad."años";
-----------------------------------------------------------------------------------------------
*/
/////////////////////////////////////////////////////////////////////
//crear una clase automovil

/*
class Automovil{
    public $marca;
    public $modelo;
    public $placa;
    public $color;
    public $tip_combustible;
}
$auto1=new Automovil;
$auto2=new Automovil;

$auto1 -> marca="Toyota";
$auto1 -> modelo="Rav4 Hibrido";
$auto1 -> placa ="A1A-707";
$auto1 -> color="Rojo";
$auto1 -> tip_combustible="Gasolina";

$auto2 -> marca="Mercedes benz";
$auto2 -> modelo="Clase G";
$auto2 -> placa ="S*G 1000B";
$auto2 -> color="Negro";
$auto2 -> tip_combustible="Petroleo";

echo $auto1->  marca."<br>". " Modelo : ".   $auto1 -> modelo ."<br>". " Placa : ".  $auto1 -> placa. "<br>"."Color : ". $auto1 -> color. "<br>"."Tipo de combustible: ".  $auto1 -> tip_combustible
*/
///////////////////////////////////////////////////////////////////////////////////

class Persona{
    //Atributos - Propiedades
    public $nombre;
    public $edad;
    public $pais;
    
    //Metodos
    public function mostrarInformacion(){
        //echo "Hola Mundo!!!";
        echo $this->nombre." tiene ".$this->edad." años.";
    }

    public function comer($comida){
        if($comida=="ceviche"){
            echo "<br>Hmmmm, que rico gracias";
        }else {
            echo "<br>Lo siento, yo solo como ceviche";
        }
    }

    public function dormir(){
        echo "<br>Zzzzzzzzzz";
    }

}

$persona1 = new Persona; // instanciar
$persona2 = new Persona;

$persona1->nombre = "Juan";
$persona1->edad = 25;
$persona1->pais = "Perú";

$persona1->mostrarInformacion();
$persona1->dormir();
$persona1->comer("Chicharron");

/////////////////////////

class Automovil{
    public $marca;
    public $modelo;
    public $placa;
    public $color;
    public $tip_combustible;
}
$auto1=new Automovil;
$auto2=new Automovil;

$auto1 -> marca="Toyota";
$auto1 -> modelo="Rav4 Hibrido";
$auto1 -> placa ="A1A-707";
$auto1 -> color="Rojo";
$auto1 -> tip_combustible="Gasolina";

$auto2 -> marca="Mercedes benz";
$auto2 -> modelo="Clase G";
$auto2 -> placa ="S*G 1000B";
$auto2 -> color="Negro";
$auto2 -> tip_combustible="Petroleo";



?>


