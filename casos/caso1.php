<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso desarrollado 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h3>CASA DE CAMBIOS</h3>
    </header>

    <section>
        
    <form action="caso1.php" method="get">

<table border="0" cellspacing="0" cellpading= "0" align="center">
<tr>
    <td>Monto en Soles: </td>
    <td>
        <input type="text" name="txtSoles">
    </td>
</tr>
<tr>
    <td>Monto en Dolares: </td>
    <td>
        <input type="text" name="txtDolares">
    </td>
</tr>
<tr>
    <td>Monto en Euros: </td>
    <td>
        <input type="text" name="txtEuros">
    </td>
</tr>
<tr>
    <td>
        <input type="submit" value="Procesar">
    </td>
    <td>
        <input type="reset" value="Limpiar">
    </td>
    
</tr>
<?php
error_reporting(0);
$Soles =$_GET ['txtSoles'];
$Dolares =$_GET ['txtDolares'];
$Euros =$_GET ['txtEuros'];
?>
<tr>
    <td>Total Soles: </td>
    <td>
        <?php
        printf("%.2f Soles",$Soles);
        ?>
    </td>
</tr>
<tr>
    <td>Total Dolares: </td>
    <td>
        <?php
        define("Dolares", 3.71);
        $Dolares = $Soles / Dolares;
        printf("%.2f Dolares",$Dolares);
        ?>
    </td>
</tr>
<tr>
    <td>Total Euros: </td>
    <td>
        <?php
        define("Euros", 4.05);
        $Euros = $Soles / Euros;
        printf("%.2f Euros",$Euros);
        ?>
    </td>
</tr>
<tr>
    <td></td>
</tr>
</table>
    </form>
    </section>
    <footer> 
        <h6> Todos los derechos reservados @Danny</h6>
    </footer>
    
</body>
</html>