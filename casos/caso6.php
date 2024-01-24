<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/estilo.css">
</head>
<body>
    <header>
        <h3>VENTA DE PRODUCTOS ELECTRODOMESTICOS</h3>
        <img src="../imagenes/electro.jpg" width="600" height="250">
    </header>
    <section>
        <form action="caso6.php" method="post">
            <?php
            error_reporting(0);
            $Cliente = $_POST['txtCliente'];
            $Producto = $_POST['selCantidad'];
            $Cantidad = $_POST['txtProducto'];
            $Precio = 0;
            
            if ($Producto == 'Cocina') {
                $Precio = 1200.00;
             } elseif ($Producto == 'Refrigeradora') {
                 $Precio = 2500.00;
             } elseif ($Producto == 'Television') {
                $Precio = 3200.00;
             } elseif ($Producto == 'Lavadora') {
                 $Precio = 1000.00;
             } elseif ($Producto == 'Radiograbadora') {
                 $Precio = 700.00;
             }
 
             $Subtotal = $Precio * $Cantidad;
             $Descuento = 0;  
             $MontoPagar = $Subtotal - $Descuento;
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
            
            <tr>
                <td>Cliente</td>
                <td>
                <input type="text" name=txtCliente>
                </td>
            </tr>
            <tr>
                <td>Producto</td>
                <td>
                <select name="selProducto">
                <option value="Cocina" <?php echo $selCocina ?>> Cocina</option>
                <option value="Refrigeradora" <?php echo $selRefrigeradora ?>> Refrigeradora</option>
                <option value="Television" <?php echo $selTelevision ?>> Television</option>
                <option value="Lavadora" <?php echo $selLavadora ?>> Lavadora</option>
                <option value="Radiograbadora" <?php echo $selRadiograbadora ?>> Radiograbadora</option>
                </td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td>
                <input type="text" name=txtCantidad>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type ="submit">
                </td>
            </tr>
        
            <tr>
                <td>Precio del Producto</td>
                <td>
                    <?php
                    
                    echo "S/.".$Precio;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subtotal a Pagar</td>
                <td>
                <?php
                    
                    echo "S/.".$Suptotal;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Monto de descuento</td>
                <td>
                <?php
                    
                    echo "S/.".$Descuento;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Monto a pagar</td>
                <td>
                <?php
                    
                    echo "S/.".$Montopagar;
                    ?>
                </td>
            </tr>
            
            </table>

        </form>
    </section>
    <footer>
        <h6>Todos los derechos Dani</h6>
    </footer>
</body>
</html>