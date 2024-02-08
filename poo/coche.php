<?php

class Coche {
    private $combustible;
    private $velocidad;
    private $combustibleEnDeposito;

    public function __construct($combustible = 'Gasolina') {
        $this->combustible = $combustible;
        $this->velocidad = 0;
        $this->combustibleEnDeposito = 0;
    }

    public function acelerar($litros) {
        if ($this->combustibleEnDeposito < 10) {
            return 0; 
        }
        $this->velocidad += $litros;
        return $this->velocidad;
    }

    public function repostar($tipoCombustible, $litros) {
        if ($tipoCombustible == $this->combustible) {
            return $this->combustibleEnDeposito; 
        }
        $this->combustibleEnDeposito += $litros;
        return $this->combustibleEnDeposito;
    }

    public function estado() {
        if ($this->velocidad > 0) {
            return "Moviéndose";
        } else {
            return "Parado";
        }
    }
}


$miCoche = new Coche('Gasoil');


echo "<br> Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10) . "\n";
echo "<br> Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", 40) . "\n";
echo "<br> Combustible después de echar 40 litros de gasóleo: " . $miCoche->repostar("Gasoil", 40) . "\n";
echo "<br> Velocidad después de acelerar con combustible en el depósito: " . $miCoche->acelerar(10) . "\n";
echo "<br> Estado del coche: " . $miCoche->estado();

?>
