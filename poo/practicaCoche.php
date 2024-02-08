<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <link rel="stylesheet" href="/estilo.css">
</head>
<body>
    <header>
        <h3>COCHES</h3>
        <img src="../imagenes/auto.jpg" width="600" height="250"> 
    </header>
    <section>
        <form action="caso4.php" method="post"> 
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Tipo Combustible</td>
                    <td><input type="text" name="txtCombustible"></td>
                </tr>
                <tr>
                    <td>Cantidad Combustible</td>
                    <td><input type="text" name="txtCantidad"></td>
                </tr>
                <tr>
                    <td>Velocidad</td>
                    <td><input type="text" name="txtVelocidad" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Ejecutar"></td>
                </tr>
            </table>
        </form>
    </section>
   

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
     <footer>
        <h6>Todos los derechos reservados @Danny</h6>
    </footer>
</body>
</html>


