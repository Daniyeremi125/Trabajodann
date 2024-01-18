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
        <h3>VENTA DE PRODUCTOS</h3>
    </header>
    <section>
    <form action="caso3.php">
        <table border="0" cellspacing="0" cellpading="0">

<tr>
    <td>Cantidad</td>
    <td>
    <input type="text" name=txtCantidad>
    </td>
</tr>

<?php
error_reporting(0);
$Cantidad = $_GET['txtCantidad'];
?>

<tr>
    <td></td>
    <td>
        <input type="submit"> 
        <input type="reset"></td>
</tr>
<tr>
    <td>Precio De Producto</td>
    <td>
        <?php
        $Precio = 20.55;
        echo "S/.".$Precio;
        ?>
    </td>
</tr>
<tr>
    <td>Cantidad</td>
    <td>
    <?php
    echo $Cantidad;
    ?>
    </td>
</tr>
<tr>
    <td>Importe De Compra</td>
    <td>
        <?php
        $Importe= $Precio*$Cantidad;
        echo "S/.".$Importe;
        ?>
    </td>
</tr>
<tr>
    <td>Importe De Descuento</td>
    <td>
        <?php
         define("Descuentof",0.10);
        $Descuento = $Precio *Descuentof;
        echo "S/.".$Descuento;
        ?>
    </td>
</tr>
<tr>
    <td>Importe Neto</td>
    <td>
       <?php
       $Importeneto=$Precio - $Descuento;
       echo "S/.".$Importeneto;
       ?> 
    </td>
</tr>

        </TAble>

        </form>
    </section>
    <footer>
        <h6>Todos los derechos @Danny</h6>
    </footer>
    
</body>
</html>