<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Paternidad</title>
    <link rel="stylesheet" href="/estilo.css">
</head>
<body>
    <header>
        <h3>FORMULARIO DE PATERNIDAD</h3>
    </header>
    <section>
        <form action="exa.Caso2.php" method="post">
            <?php
            error_reporting(0);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                $Nombre = $_POST['Nombre'];
                $Sexo = $_POST['Sexo'];
                $NumHijos = $_POST['num_hijos'];

               
                if ($sexo == 'masculino') {
                    if ($NumHijos == 1) {
                        $Mensaje = "El señor $Nombre tiene 1 hijo.";
                    } else {
                        $Mensaje = "El señor $Nombre tiene $NumHijos hijos.";
                    }
                } else {
                    if ($NumHijos == 1) {
                        $Mensaje = "La señora $Nombre tiene 1 hijo.";
                    } else {
                        $Mensaje = "La señora $Nombre tiene $NumHijos hijos.";
                    }
                }

               
                echo "<p>$Mensaje</p>";
            }
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" name="nombre" required></td>
                </tr>
                <tr>
                    <td>SEXO</td>
                    <td>
                        <select name="sexo" required>
                            <option value="">Seleccione...</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>NÚMERO DE HIJOS</td>
                    <td><input type="number" name="num_hijos" min="0" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="EJECUTAR"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>
</body>
</html>