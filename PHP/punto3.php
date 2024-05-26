<?php
function numeroALetras($numero) {
    $formatter = new NumberFormatter("es", NumberFormatter::SPELLOUT);
    return $formatter->format($numero);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $error = '';
    $result = '';

    if (!is_numeric($number)) {
        $error = "Por favor, numero valido.";
    } else {
        $result = numeroALetras($number);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Conversión</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }

    if (!empty($result)) {
        echo "<p>El numero expresado en letras es: $result</p>";
    }
    ?>

    <a href="punto3.html">Volver</a>
</body>
</html>
