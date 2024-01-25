<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3> Mensualidad de Universidad </h3>
        <img src="../imagenes/estudiante.jpg" width="650" height="300">
    </header>
    <section>
        <form action="caso6terminado.php" method="post">
        <?php
            error_reporting(0);
            $Nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : '';
            $Categoria = isset($_POST['selCategoria']) ? $_POST['selCategoria'] : '';
            $Promedio = isset($_POST['txtPromedio']) ? $_POST['txtPromedio'] : '';
      
            if ( $Categoria== 'A') {
                $selA = 'selected';
            } else {
                $selA = "";
            }
            if ($Categoria == 'B') {
                $selB = 'selected';
            } else {
                $selB = "";
            }
            if ($Categoria == 'C') {
                $selC = 'selected';
            } else {
                $selC = "";
            }
            if ($Categoria == 'D') {
                $selD = 'selected';
            } else {
                $selD = "";
            }
           
      ?>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
    <td>Nombre Completo del alumno</td>
    <td>
    <input type="text" name="txtNombre">
    </td>
    <td>
    Debe registrar nombre del alumno
    </td>
</tr>
<tr>
    <td>seleccione Categoria</td>
    <td>
    <select name="selCategoria">
<option value="A" <?php echo $selA; ?>>A</option>
<option value="B" <?php echo $selB; ?>>B</option>
<option value="C" <?php echo $selC; ?>>C</option>
<option value="D" <?php echo $selD; ?>>D</option>
</select>
    </td>
    <td>
    Debe seleccionar una categoria
    </td>
</tr>
<tr>
    <td>Ingrese Promedio</td>
    <td>
    <input type="text" name="txtPromedio">
    </td>
    <td>
    Deve registrar correactamente el promedio
    </td>
</tr>
<tr>
    <td></td>
    <td>
    <input type="submit" value="Procesar">
    </td>

</tr>
<tr>
    <td>Monto mensual</td>
    <td></td>
</tr>
<tr>
    <td>Monto de descuento</td>
    <td></td>
</tr>
<tr>
    <td>Monto a cancelar</td>
    <td></td>
</tr>

</table>
        </form>
    </section>

</body>
</html>