<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado de la conversión</h2>
    <?php
    $binario = $_POST['binario'];
    if (!preg_match('/^[01]+$/', $binario)) {
        echo "<p>El número ingresado no es binario válido.</p>";
    } else {
        $decimal = bindec($binario);
        echo "<p>Decimal: $decimal</p>";
        $hexadecimal = dechex($decimal);
        echo "<p>Hexadecimal: $hexadecimal</p>";
    }
    ?>
        <a href="punto5.html">Volver</a>
</body>
</html>
