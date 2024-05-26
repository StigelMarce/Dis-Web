<?php
function esPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function siguientesPrimos($num, $cantidad) {
    $primos = [];
    $count = 0;
    $numero = $num + 1;

    while ($count < $cantidad) {
        if (esPrimo($numero)) {
            $primos[] = $numero;
            $count++;
        }
        $numero++;
    }
    return $primos;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = isset($_POST['number']) ? intval($_POST['number']) : null;
    $error = '';
    $result = '';

    if ($number !== null) {
        $primos = siguientesPrimos($number, 16);
        $result = "<table border='1'>";
        $result .= "<tr><th colspan='4'>Estos son los 16 numero primos siguientes a $number</th></tr>";

        for ($i = 0; $i < 4; $i++) {
            $result .= "<tr>";
            for ($j = 0; $j < 4; $j++) {
                $result .= "<td>" . $primos[$i * 4 + $j] . "</td>";
            }
            $result .= "</tr>";
        }
        $result .= "</table>";
    } else {
        $error = "Por favor, ingrese un número válido.";
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

    <a href="punto2.html">Volver</a>
</body>
</html>
