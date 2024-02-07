<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>
<body>
    <header>
        <img src="../imagenes/productos.jpg" width="550" height="250">
        <h3>VENTA DE PRODUCTOS</h3>
    </header>
    <section>

    <?php
        error_reporting(0);
        $selLavadora = "";
        $selRefrigeradora = "";
        $selRadiograbadora = "";
        $selTostadora = "";

        $Producto = $_POST['selProducto'];
        $Precio = 0;
        $Cantidad = isset($_POST['txtCantidad']) ? $_POST['txtCantidad'] : 0;
        $Subtotal = $Precio * $Cantidad;
        $Cuotas = isset($_POST['selCuotas']) ? $_POST['selCuotas'] : 0;
        $Letras = array($Precio, $Precio, $Precio, $Precio, $Precio, $Precio); // Puedes ajustar según tus necesidades
    ?>

    <form action="miejemplo.php" method="post">
        <table border="0" cellpadding="0" cellspacing="0">

            <tr>
                <td>Producto</td>
                <td>
                    <select name="selProducto" onchange="actualizarPrecio()">
                        <option value="Lavadora" <?php echo $selLavadora; ?>>Lavadora</option>
                        <option value="Refrigeradora" <?php echo $selRefrigeradora; ?>>Refrigeradora</option>
                        <option value="Radiograbadora" <?php echo $selRadiograbadora; ?>>Radiograbadora</option>
                        <option value="Tostadora" <?php echo $selTostadora; ?>>Tostadora</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td>
                    <input type="text" name="txtPrecio" id="txtPrecio" value="<?php echo $Precio; ?>" readonly>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td>
                    <input type="text" name="txtCantidad" value="<?php echo $Cantidad; ?>">
                </td>
                <td>
                    <button type="submit" name="calcular">Calcular</button>
                </td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>
                    <input type="text" name="txtSubtotal" value="<?php echo $Subtotal; ?>" readonly>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Cuotas</td>
                <td>
                    <select name="selCuotas">
                        <option value="1" <?php if ($Cuotas == 1) echo 'selected'; ?>>1</option>
                        <option value="2" <?php if ($Cuotas == 2) echo 'selected'; ?>>2</option>
                        <option value="3" <?php if ($Cuotas == 3) echo 'selected'; ?>>3</option>
                        <option value="4" <?php if ($Cuotas == 4) echo 'selected'; ?>>4</option>
                        <option value="5" <?php if ($Cuotas == 5) echo 'selected'; ?>>5</option>
                        <option value="6" <?php if ($Cuotas == 6) echo 'selected'; ?>>6</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>N° Letras</td>
                <td>
                    <?php
                        for ($i = 0; $i < $Cuotas; $i++) {
                            echo "<br>" . ($i + 1) . ": " . $Letras[$i];
                        }
                    ?>
                </td>
                <td></td>
            </tr>

        </table>
    </form>

    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>

    <script>
        function actualizarPrecio() {
            var productoSeleccionado = document.querySelector('select[name="selProducto"]').value;

            // Actualizar el precio según el producto seleccionado
            switch (productoSeleccionado) {
                case 'Lavadora':
                    document.getElementById('txtPrecio').value = 1500;
                    break;
                case 'Refrigeradora':
                    document.getElementById('txtPrecio').value = 3500;
                    break;
                case 'Radiograbadora':
                    document.getElementById('txtPrecio').value = 500;
                    break;
                case 'Tostadora':
                    document.getElementById('txtPrecio').value = 150;
                    break;
                default:
                    document.getElementById('txtPrecio').value = 0;
                    break;
            }
        }
    </script>

</body>
</html>
