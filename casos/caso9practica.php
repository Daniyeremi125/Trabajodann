<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venta de Productos</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <header>
    <div class="header-container">
      <h3>Venta de Productos</h3>
      <img src="../imagenes/venta.jpg" width="600" height="250">
    </div>
  </header>
  <section>
    <table border="0" cellpadding="0" cellspacing="0">
      <form action="practica.php" method="post">
        <tr>
          <td>Producto:</td>
          <td>
            <select name="producto" id="selProducto">
              <option value="Lavadora">Lavadora</option>
              <option value="Refrigeradora">Refrigeradora</option>
              <option value="Radiograbadora">Radiograbadora</option>
              <option value="Tostadora">Tostadora</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Cantidad:</td>
          <td><input type="number" name="cantidad" value="1"></td>
        </tr>
        <tr>
          <td>Número de cuotas:</td>
          <td>
            <select name="numeroCuotas">
              <option value="1">1 cuota</option>
              <option value="3">3 cuotas</option>
              <option value="6">6 cuotas</option>
              <option value="12">12 cuotas</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2"><button type="submit">Calcular</button></td>
        </tr>
        <?php
          error_reporting(0);
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $numeroCuotas = $_POST['numeroCuotas'];
            $precio = 0;

            switch ($producto) {
              case "Lavadora":
                $precio = 1500.00;
                break;
              case "Refrigeradora":
                $precio = 3500.00;
                break;
              case "Radiograbadora":
                $precio = 500.00;
                break;
              case "Tostadora":
                $precio = 150.00;
                break;
            }
            $subtotal = $precio * $cantidad;
            $cuotas = $subtotal / $numeroCuotas;
        ?>
        <tr>
          <td>Producto:</td>
          <td><?php echo $producto ?></td>
        </tr>
        <tr>
          <td>Cantidad:</td>
          <td><?php echo $cantidad ?></td>
        </tr>
        <tr>
          <td>Subtotal:</td>
          <td>S/. <?php echo number_format($subtotal, 2) ?></td>
        </tr>
        <tr>
          <td>Número de cuotas:</td>
          <td><?php echo $numeroCuotas ?></td>
        </tr>
        <tr>
          <td>Monto por cuota:</td>
          <td>S/. <?php echo number_format($cuotas, 2) ?></td>
        </tr>
        <?php } ?>
      </form>
    </table>
  </section>
  <footer>
    <h6>Todos los derechos reservados @Dany</h6>
  </footer>
</body>
</html>

