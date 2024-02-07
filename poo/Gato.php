<?php

//creacion de la clase gtao

class Gato{
    //atributos
    public $color;
    public $raza;
    public $sexo;
    public $edad;
    public $peso;

    //metodos
    public function maulla(){
        echo "miauuuuuuuuuuuuuu";
    }

    public function ronronea(){
        echo "Mrrrrrrr";
    }
    //un metodo 
    public function comer($comida){
        if($comida=="pesacado"){
            echo "<br> hmmmmm, miau miauuu";
        } else{
            echo "<br> no me gusta, solo como pescado";
        }
    }

    //poner a pelear a dos gatos , solo machos
//-----
    public function pelea($sexo){
        if($sexo=="macho"){
            echo "<br>pelean";
        }else{
            echo"<br>no pelean";
        }
    }
//******
    public function peleacon(Gato $rival){
        if($rival->sexo=="hembra"){
        echo "<br> no peleo con gaticas";
    } else {
        echo"<br> ven te voy desmadrear";
    }
    }
}

    $silvestre = new Gato;
    $tom = new Gato;

    echo "<br>Hola gatico";
    $silvestre->ronronea();
    echo "<br>toma tus croquetas";
    $silvestre->comer("croquetas");
    echo "<br>mejor te doy pescado";
    $silvestre->comer("pescado");

    echo "<br> veo otro gatito";
    $tom->sexo="macho";

    $silvestre->peleacon($tom);

    $alejandra = new Gato;
    $alejandra -> sexo="hembra";
 




?>