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
        <form action="exa.Caso3.php" method="post">
            <?php
            
            $Num_Emails = isset($_POST["Num_Emails"]) ? $_POST["Num_Emails"] : "";
            $seguroMensaje = isset($_POST["seguroMensaje"]) ? $_POST["seguroMensaje"] : "";
            $mensaje = ""; 
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $Emails = $_POST["Emails"]; 
                $Seguro = isset($_POST["seguroMensaje"]) && $_POST["seguroMensaje"] == "si";
                $Precio = 0.0;
                
                if ($emails >= 0 && $Emails <= 2000) {
                    $Precio = 0.0;
                } elseif ($Emails >= 2001 && $Emails <= 10000) {
                    $Precio = 0.7;
                } elseif ($Emails >= 10001) {
                    $Precio = 0.2;
                }
        
                $precio_total = $Emails * $Precio;
        
                if ($seguro) {
                    $precio_total += $Emails * 0.1;
                }
        
                $mensaje = "El precio total por enviar $Emails emails ";
                if ($seguro) {
                    $mensaje .= "Con seguro por cada mensaje es S/ ";
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
                        <select name="seguroMensaje">
                            <option value="si" <?php if ($seguroMensaje == "si") echo "selected"; ?>>Sí</option>
                            <option value="no" <?php if ($seguroMensaje == "no") echo "selected"; ?>>No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Calcular"></td>
                </tr>
            </table>
            
            <div><?php echo $mensaje; ?></div>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Dany</h6>
    </footer>
</body>
</html>