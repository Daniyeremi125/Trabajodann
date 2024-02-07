<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.N</title>
</head>
<body>
<header>
    <h3>FUNCIONES NUMERICAS</h3>
</header> 
<?php
function ejecutarFuncion($variable, $funcion) {
    if (!is_numeric($variable)) {
        echo "<p>La variable ingresada no es numérica.</p>";
        return null;
    }

    switch ($funcion) {
        case 'exp':
            $result = exp($variable);
            echo "La función exp devuelve el valor de e elevado a la potencia de $variable.";
            return $result;
    
        case 'floor':
            $result = floor($variable);
            echo "La función floor redondea hacia abajo el número decimal $variable al entero más cercano.";
            return $result;
    
        case 'abs':
            $result = abs($variable);
            echo "La función abs devuelve el valor absoluto de $variable.";
            return $result;
    
        case 'ceil':
            $result = ceil($variable);
            echo "La función ceil redondea hacia arriba el número decimal $variable al entero más cercano.";
            return $result;
    
        case 'getrandmax':
            $result = getrandmax();
            echo "La función getrandmax devuelve el valor máximo que puede generar la función rand() en el entorno de ejecución.";
            return $result;
    
        case 'max':
            $result = max($variable, 0);
            echo "La función max devuelve el valor más grande entre $variable y 0.";
            return $result;
    
        case 'min':
            $result = min($variable, 0);
            echo "La función min devuelve el valor más pequeño entre $variable y 0.";
            return $result;
    
        case 'mt_rand':
            $result = mt_rand();
            echo "La función mt_rand genera un número entero aleatorio usando el generador de números aleatorios Mersenne Twister.";
            return $result;
    
        case 'pi':
            $result = pi();
            echo "La función pi devuelve el valor de la constante pi (π).";
            return $result;
    
        case 'pow':
            $result = pow($variable, 2);
            echo "La función pow calcula $variable elevado a la potencia de 2.";
            return $result;
    
        case 'round':
            $result = round($variable);
            echo "La función round redondea el número decimal $variable al entero más cercano.";
            return $result;
    
        case 'sqrt':
            $result = sqrt($variable);
            echo "La función sqrt calcula la raíz cuadrada de $variable.";
            return $result;
    
        default:
            echo "Función no implementada";
            return "Función no implementada";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $variable = $_POST["variable"];
    $funcion = $_POST["funcion"];
    $resultado = ejecutarFuncion($variable, $funcion);

    if ($resultado !== null) {
        echo "<p>Resultado de $funcion($variable): $resultado</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="variable">Ingrese una variable:</label>
    <input type="text" name="variable" required>

    <label for="funcion">Seleccione una función:</label>
    <select name="funcion" required>
        <option value="exp">exp</option>
        <option value="floor">floor</option>
        <option value="abs">abs</option>
        <option value="ceil">ceil</option>
        <option value="getrandmax">getrandmax</option>
        <option value="max">max</option>
        <option value="min">min</option>
        <option value="mt_rand">mt_rand</option>
        <option value="pi">pi</option>
        <option value="pow">pow</option>
        <option value="round">round</option>
        <option value="sqrt">sqrt</option>
    </select>

    <input type="submit" value="Ejecutar">
</form>

</body>
</html>
