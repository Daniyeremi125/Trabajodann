<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>PAGO DE EMPLEADOS</h3>
    </header>
    <SEction>
        <form action="caso2.php" method="get">
            <table border="0" cellspacing="0" cellpading="0">
            <tr>
                <td>Empleado: </td>
                <td>
                    <input type="text" name=txtEmpleado>
                </td>
            </tr>
            <tr>
                <td>Horas Trabajadas: </td>
                <td>
                <input type="text" name=txtHoras>
                </td>
            </tr>
            <tr>
                <td>Tarifa Por Hora: </td>
                <td> <input type="text" name=txtTarifa>
            </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit"> 
                <input type="reset">
            
                </td>
            </tr>
            <?php
                error_reporting(0);
                $Empleado = $_GET['txtEmpleado'];
                $Horas = $_GET['txtHoras'];
                $Tarifa = $_GET['txtTarifa'];
                
                ?>
            <tr>
                <td>Empleado</td>
                <td>
                <?php
                    echo $Empleado;
                    ?>
            
                </td>
            </tr>
            <tr>
                <td>Horas Trabajadas</td>
                <td>
                <?php
                    echo $Horas;
                    ?>
            
                </td>
            </tr>
            <tr>
                <td>Tarifa Por Hora</td>
                <td><?php
                    echo $Tarifa;
                    ?></td>
            </tr>
            <tr>
                <td>Sueldo Bruto</td>
                <td>
                <?php
                 $Sueldo = $Horas * $Tarifa;
                        echo "S/.".$Sueldo;
                        ?>
                </td>
            </tr>
            <tr>
                <td>Descuento ESSALUD</td>
                <td>
                    <?php

            define("Salud",0.9);
            $Essalud = $Sueldo * Salud;
            $suelfosafi= $Sueldo - $Essalud;
            echo "S/.".$suelfosafi;

                    ?>
                </td>
            </tr>
            <tr>
                <td>Descuento AFP</td>
                <td>
                <?php

            define("AFP",0.13);
            $AFP = $Sueldo* AFP;

            echo "S/.".$AFP;


        ?> 
                </td>
            </tr>
            <tr>
                <td>Sueldo Neto</td>
                <td>
                <?php
                $SueldoNETO = $Sueldo - $suelfosafi - $AFP;

                echo "S/.".$SueldoNETO;
                ?>
                </td>
            </tr>

            </table>
        </form>
    </SEction>
</body>
</html>