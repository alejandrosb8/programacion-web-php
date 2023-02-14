<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <title>Tarjetas</title>
</head>

<body>
    <main class="container">
        <?php
        $numero = $_POST["numero"];

        // Mostrar el formulario para ingresar los datos de cada tarjeta
        echo "<form action='resultados.php' method='post'>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "<h3>Tarjeta #$i</h3>";
            echo "DNI del alumno: <input type='number' name='dni[]' required><br>";
            echo "Nombre del alumno: <input type='text' name='nombre[]' required><br>";
            echo "Nota de matemáticas: <input type='number' name='matematicas[]' min='0' max='20' required><br>";
            echo "Nota de física: <input type='number' name='fisica[]' min='0' max='20' required><br>";
            echo "Nota de programación: <input type='number' name='programacion[]' min='0' max='20' required><br><br><hr>";
        }
        echo "<input type='submit' value='Calcular'>";
        echo "</form>";
        ?>
    </main>
</body>

</html>