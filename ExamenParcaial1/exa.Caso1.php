<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERADOR DE TICKET</title>
</head>
<body>
    <header>
        <h3>GENERADOR DE TICKET</h3>
    </header>
    <section>
        <form action="exa.Caso1.php" method="post">
            <?php
            error_reporting(0);

          
            $Mensaje = array();

            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST['txtNombre'];
                $altura = $_POST['altura'];
                $edad = $_POST['edad'];
                $juicio = $_POST['juicio'];

                if ($altura < 120) {
                    $Mensaje[] = "La altura Mayor 120cm.";
                }
                if ($edad <= 16) {
                    $Mensaje[] = "Edad mayor a 16 años.";
                }
                if ($juicio != 'no') {
                    $Mensaje[] = "Debe rechazar llevarnos a juicio por daños y perjuicios.";
                }

                if (empty($Mensaje)) {
                    $numero_ticket = rand(1, 99999);
                    echo "<p>Ticket generado: \"$nombre, ticket $numero_ticket\"</p>";
                } else {
                    echo "<ul>";
                    foreach ($Mensaje as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                }
            }
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Nombre: </td>
                    <td>
                        <input type="text" name="txtNombre" value="<?php echo htmlspecialchars($nombre);?>">
                    </td>
                </tr>
                <tr>
                    <td>ALTURA</td>
                    <td><input type="number" name="altura" required></td>
                </tr>
                <tr>
                    <td>EDAD</td>
                    <td><input type="number" name="edad" required></td>
                </tr>
                <tr>
                    <td>¿Rechaza llevarnos a juicio por daños y perjuicios?</td>
                    <td>
                        <select name="juicio" required>
                            <option value="">Seleccione...</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Generar Ticket"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>
</body>
</html>
