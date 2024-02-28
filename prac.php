<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>
<body>
    <header>
        <h3>PAPELERÍA ONLINE</h3>
    </header>
    <section>
        <form action="prac.php" method="post">
            <?php
            // Variables para prevenir errores de variables no definidas
            $num_emails = isset($_POST["num_emails"]) ? $_POST["num_emails"] : "";
            $seguro_por_mensaje = isset($_POST["seguro_por_mensaje"]) ? $_POST["seguro_por_mensaje"] : "";
            $mensaje = ""; // Variable para almacenar el mensaje
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $emails = $_POST["num_emails"]; // Nombre corregido del campo de entrada
                $seguro = isset($_POST["seguro_por_mensaje"]) && $_POST["seguro_por_mensaje"] == "si";
                $precio_base = 0.0;
                
                if ($emails >= 0 && $emails <= 2000) {
                    $precio_base = 0.0;
                } elseif ($emails >= 2001 && $emails <= 10000) {
                    $precio_base = 0.7;
                } elseif ($emails >= 10001) {
                    $precio_base = 0.2;
                }
        
                $precio_total = $emails * $precio_base;
        
                if ($seguro) {
                    $precio_total += $emails * 0.1;
                }
        
                $mensaje = "El precio total por enviar $emails emails ";
                if ($seguro) {
                    $mensaje .= "con seguro por cada mensaje es S/ ";
                } else {
                    $mensaje .= "es S/ ";
                }
                $mensaje .= number_format($precio_total, 2);
            }
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Número de Emails</td>
                    <td><input type="number" name="num_emails" value="<?php echo $num_emails; ?>"></td>
                </tr>
                <tr>
                    <td>¿Quieres seguro por cada mensaje?</td>
                    <td>
                        <select name="seguro_por_mensaje">
                            <option value="si" <?php if ($seguro_por_mensaje == "si") echo "selected"; ?>>Sí</option>
                            <option value="no" <?php if ($seguro_por_mensaje == "no") echo "selected"; ?>>No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Calcular"></td>
                </tr>
            </table>
            <!-- Aquí se muestra el mensaje debajo del botón "Calcular" -->
            <div><?php echo $mensaje; ?></div>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>
</body>
</html>
