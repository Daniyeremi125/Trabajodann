<?php 
// Creacion de la clase Gato

class Gato{

    //Atributos
    public $color;
    public $rasa;
    public $sexo;
    public $edad;
    public $peso;

    //Metodos
    public function maulla(){
        echo "<br>Miauuu";
    }
    public function ronronea() {
        echo "<br>Mrrrrrrr";
    }

    //Un metodo come pero solo come pescado
    public function come($comida){
        if($comida=="pescado"){
            echo "<br>Lo siento, yo soslo como pescado";
        }
    }
    //Poner a pelear a dos gatos, solo se van a pelear dos gatosmatos machos 

    public function peleacon(gato $rival){
    if ($rival -> sexo=="macho" ){
        echo "<br> pelea";
    }else{
        echo "<br> no pelea";
    }
    }

}

$silvestre = new gato;
$ton = new gato;
$Alejandra = new gato;

echo "Hola gatito";
$silvestre->ronronea();
echo "<br> toma tus croquetas";
$silvestre->come("croquetas");
echo "<br> mejor te doy pescado";
$silvestre->come ("pescado");

echo "veo otro gatito";
$ton ->sexo="macho";

$silvestre ->peleaCon($ton);

$Alejandra -> sexo ="hembra";
$alejandra ->peleaCon($alejandra);

?>