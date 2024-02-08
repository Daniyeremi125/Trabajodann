<?php

class Coche
{
    public $color;
    public $potencia;
    public function acelerar() {
echo "Acelerando";
  }

}

$miCoche = new Coche;
$tuCoche = new Coche;
  $miCoche->color = 'Rojo';
  $tuCoche->color = 'Azul';
    print_r($miCoche);
    print_r($tuCoche);

    
/**.........................................
 * 
 * // cambiar propiedades 
 * 
 * class Coche
*{
*public $color;
*public $potencia;
*public $velocidad = 0;

*       public function acelerar() {
*       $this->velocidad = $this->velocidad + 1;
*   }
*}
*   $miCoche = new Coche;
*   $miCoche->acelerar();

*   print_r($miCoche);

 */
// 


/**................................................

*  class Coche
* {
*  public $color;
*  public $potencia;
*  public $velocidad = 0;

 *     public function acelerar( $incremento ) {
 *     $this->velocidad = $this->velocidad + $incremento;
*    }
*  }
*  $miCoche = new Coche;
*  $miCoche->acelerar();

*  echo "Velocidad actual: {$miCoche->velocidad}\n";

 */


/**CLASE COCHE PARAMETROS //.....................
 * 
 * class Coche
* {
* public function repostar( Gasolina $tipoCombustible, $litros ) {
* echo "Glu, glu";
*  }
* }
*   $miCoche = new Coche;
*   $miCoche->repostar("Gasolina", 10);
 */


/** ....................................................
 * LLAMAR UN METODO DESDE OTRO //
 

 * public function comprobar() {
*       $this->comprobarNivelAceite();
*        $this->comprobarPresionRuedas();
*  }
*   public function comprobarNivelAceite() {
* }
*   public function comprobarPresionRuedas() {
* }
 */


?>