<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Practica Grupal</title>
</head>
<body>
    <header>
        <h1>Practica Grupal</h1>
        <div class="wrapper">
            <div class="select-btn">
                <span>Selecciona Caso</span>
                <i class="uil uil-angle-down"></i>
            </div>
            <div class="content">
                <div class="search">
                    <i class="uil uil-search"></i>
                    <input type="text" spellcheck="false" placeholder="Buscar">
                </div>
                <ul class="options"></ul>
            </div>
        </div>
    </header>
    <nav>
        
    </nav>
    <section>
        <h2>Integrantes</h2>
        <ul>
            <li>Hector Ferro Dávalos</li>
            <li>Alejandra Jimena</li>
            <li>Dany Yeremy</li>
        </ul>
    </section>
    <br><br>
    <section>
        <h2>Funciones para variables</h2>
        <form action="">
            <?php
            error_reporting(0);
            $lista3 = $_GET['txtLista'];
            $variable = $_GET['txtVariable'];
            $Potencia = $_GET['txtPotencia'];
            $valores = $_GET['txtvalores'];
            $cantidad = $_GET['txtcantidad'];

            if ($variable==null) {
                $variable = null;
            }

            switch ($lista3) {
            case 1:
                    $funcion = 'Función exp';
                    if (isset($variable)) {
                        $resultado = exp($variable);
                    } else {
                        $resultado = 'La variable no esta definida';
                    }
                    break;

             case 2:
                     $funcion = 'Función Floor';
                    if (is_numeric($variable)) {
                        $resultado = floor($variable);
                     } else {
                         $resultado = 'La variable no es un número';
                     }
                     break;

             case 3:
                    $funcion = 'Función abs';
                    $resultado = abs($variable);
                    break;         

              case 4:
                  $funcion = 'Función ceil';
                  $resultado = ceil($variable);
                    break;
   
             case 5:
                    $funcion = 'Función getrandmax';
                    $resultado = getrandmax();
                     break;
             case 6:
                    $funcion = 'Función max';
                    $array = array(1, 2, 3, 4, 5);
                     $resultado = max($array);
                    break;
                    case 7:
                        $funcion = 'Función min';
            
                        // Se solicita al usuario que ingrese la cantidad de valores
                        echo "Ingrese la cantidad de valores: ";
                        $cantidad = trim(fgets(STDIN));
            
                        // Se crea un array para almacenar los valores
                        $valores = array();
            
                        // Se solicita al usuario que ingrese cada valor
                        if ($cantidad > 0) {
                            for ($i = 0; $i < $cantidad; $i++) {
                                echo "Ingrese el valor " . ($i + 1) . ": ";
                                $valor = trim(fgets(STDIN));
                                $valores[] = $valor;
                            }
            
                            // Se llama a la función min() para obtener el valor mínimo del array
                            if (!empty($valores)) {
                                $minimo = min($valores);
                            } else {
                                echo "Debe ingresar al menos un valor";
                            }
                        } else {
                            echo "Debe ingresar al menos un valor";
                        }
                        break;
                }
    
                ?>
    
                <fieldset>
                <legend>Formulario</legend>
                    <table align="center">
                        <tr>
                            <td>Variable</td>
                            <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable?>"></td>
                            <td></td>
                        </tr>
                
                    <tr>
                        <td>Monto prestado</td>
                        <td>
                        <select name="txtLista">
                            <option value="0" <?php echo $sel0;?>>Funciónes Numericas</option>
                            <option value="1" <?php echo $sel1;?>>Función exp</option>
                            <option value="2" <?php echo $sel2;?>>Función floor</option>	
                            <option value="3" <?php echo $sel3;?>>Función abs</option>
                            <option value="4" <?php echo $sel4;?>>Función ceil</option>
                            <option value="5" <?php echo $sel5;?>>Función getrandmax</option>
                            <option value="6" <?php echo $sel6;?>>Función max</option>
                            <option value="7" <?php echo $sel7;?>>Función  min</option>
                            <option value="8" <?php echo $sel8;?>>Función mt_rand</option>
                            <option value="9" <?php echo $sel9;?>>Función pi</option>
                            <option value="10" <?php echo $sel10;?>>Función pow</option>
                            <option value="11" <?php echo $sel11;?>>Función round</option>
                            <option value="12" <?php echo $sel12;?>>Función sqrt</option>
                                   
                    </select>
    
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" id="button" value="Mostrar"></td>
                        <td></td>
                    </tr>
                
                </table>
            </fieldset>
            <fieldset id="blanco">
                    <legend><h3>Resultado</h3></legend>
                <table align = "center">
                    <tr>
                        <td>Función</td>
                        <td>Resultado</td>
                        <td></td>
                    </tr>
                    <?php
    
                        echo "<tr>";
                            echo "<td>";
                            echo $funcion;
                            echo "</td>";
                            echo "<td>";
                            if ($lista3 == 7) {
                                echo "El valor mínimo es: " . $minimo;
                            } else {
                                echo $resultado;
                            }
                            echo "</td>";
                            echo "<td>";
                            
                            echo "</td>";
                        echo "</tr>";
                       
                    ?>
                    
                </table>
            </fieldset>  
            </form>
           
        </section>
        <br>
        <footer>
            <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
        </footer>
        <script src="../html/js/script.js"></script>
    </body>
    </html>
    
    