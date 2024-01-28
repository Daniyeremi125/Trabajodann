<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Entradas - Teatro</title>
</head>
<body>
    <header>
        <h3> VENTA DE ENTRADAS (TEATRO) </h3>
        <img src="../imagenes/teatro.jpg" width="550" height="250">
    </header>
    <section>
        <?php
        error_reporting(0);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comprador = $_POST["txtComprador"];
            $entradasAdultos = $_POST["txtEntradasAdultos"];
            $entradasNiños = $_POST["txtEntradasNiños"];

            $precioAdulto = 0;
            $precioNiño = 0;

            switch ($comprador) {
                case "Adulto":
                    $precioAdulto = 20;
                    break;
                case "niño":
                    $precioNiño = 10;
                    break;
                default:
                    $precioAdulto = 20;
                    $precioNiño = 10;
                    break;
            }
        }
        ?>
        <form action="caso8.php" method="post">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Comprador</td>
                    <td>
                        <input type="text" name="txtComprador" value="<?php echo $comprador; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Fecha Actual</td>
                    <td>
                        <input type="text" value="<?php echo date('d-m-y'); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>N° Entradas Adultos</td>
                    <td>
                        <input type="text" name="txtEntradasAdultos" value="<?php echo $entradasAdultos; ?>">
                    </td>
                </tr>
                <tr>
                    <td>N° Entradas niños</td>
                    <td>
                        <input type="text" name="txtEntradasNiños" value="<?php echo $entradasNiños; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Adquirir">
                    </td>
                </tr>
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
                    <tr>
                        <td>Compardor</td>
                        <td><?php echo $comprador; ?></td>
                    </tr>
                    <tr>
                        <td>Costo Por adultos</td>
                        <td><?php echo "S/.".$precioAdulto; ?></td>
                    </tr>
                    <tr>
                        <td>Costo por niños</td>
                        <td><?php echo  "S/.".$precioNiño; ?></td>
                    </tr>
                    <tr>
                        <td>Dia de promocion</td>
                        <td><?php echo date('l'); ?></td>
                    </tr>
                    <tr>
                        <td>Monto total a pagar</td>
                        <td><?php echo "S/.".$montoTotalPagar = $entradasAdultos * $precioAdulto + $entradasNiños * $precioNiño; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>
</body>
</html>
