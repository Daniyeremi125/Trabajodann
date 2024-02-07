<?php
 class coche{
    public $color;
    public $potencia;
    public $velocidad = 0;
    public $combustible;
    public $litrosCombustible;

    public function __construct( $combustible = "gasolina") {
        $this-> combustible= $combustible;

    }

    public function acelerar ($incremento){
        if ($this->velocidad == 0 && $this->litrosCombustible >=10){
        $this->velocidad += $incremento;
        $micoche->acelerar(10)."\n";
        $this $litrosCombustible -=10;
    }

    

 }
  

?>