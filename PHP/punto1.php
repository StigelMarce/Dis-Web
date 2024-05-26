<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = isset($_POST['number']) ? intval($_POST['number']) : null;
    $error = '';
    $result = '';

    if ($number !== null && $number >= 1 && $number <= 9) {
        $result = "<table border='1'>";
        $result .= "<tr><th colspan='2'>Tabla de multiplicar del $number</th></tr>";
        for ($i = 1; $i <= 10; $i++) {
            $result .= "<tr><td>$number x $i</td><td>" . ($number * $i) . "</td></tr>";
        }
        $result .= "</table>";
    } else {
        $error = "Debr ingresar solo un numero entre 1 y 9";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }

    if (!empty($result)) {
        echo $result;
    }
    ?>

    <a href="punto1.html">Volver</a>
</body>
</html>
