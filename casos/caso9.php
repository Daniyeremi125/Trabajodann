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
        $Producto = $_POST['txtProducto'];
        $Precio = 0;
        $cantidad = $_POST['selcantidad'];
        $subtotal = $_POST['selsubtotal'];
        $cuotas = $_POST['selcuotas'];

        $selLavadora = "";
        $selRefrigeradora = "";
        $selRadiograbadora = "";
        $selTostadora = "";


        switch ($Producto) {
            case 'Lavadora':
                $Precio = 1500;
                break;
            case 'Refrigeradora':
                $Precio = 3500;
                break;
            case 'Radiograbadora':
                $Precio = 500;
                break;
            case 'Tostadora':
                $Precio = 150;
                break;}
    ?>

<form action="caso9.php" method="post">
    <table border="0" cellpadding="0" cellspacing="0">

<tr>
    <td>Producto</td>
    <td>
<select name="selProducto" onchange="actualizarPrecio()">
<option value="Lavadora" <?php echo $selLavadora; ?>>Lavadora</option>
<option value="Refrigeradora" <?php echo $selRefrigeradora; ?>>Refrigeradora</option>
<option value="Radiograbadora" <?php echo $selRadiograbadora; ?>>Radiograbadora</option>
<option value="Tostadora" <?php echo $selTostadora; ?>>Tostadora</option>
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
    <input type="text" name="txtPrecio">
    </td>
    <td>
        <button> calcular </button>
    </td>
</tr>
<tr>
    <td>Subtotal</td>
    <td>
    <input type="text" name="txtSubtotal"> 
    </td>
    <td></td>
</tr>
<tr>
    <td>Cuotas</td>
    <td>
<select name="selCuotas">
<option value="1" <?php echo $sel1; ?>>1</option>
<option value="2" <?php echo $sel2; ?>>2</option>
<option value="3" <?php echo $sel3; ?>>3</option>
<option value="4" <?php echo $sel4; ?>>4</option>
<option value="5" <?php echo $sel5; ?>>5</option>
<option value="6" <?php echo $sel6; ?>>6</option>
</select>
    </td>
    <td></td>
</tr>
<tr>
    <td>N° Letras</td>
    <td>Monto</td>
    <td></td>
</tr>
<tr>
    <td>1</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>2</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>3</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>2</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>5</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>6</td>
    <td></td>
    <td></td>
</tr>

    </table>
</form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>
</body>
</html>