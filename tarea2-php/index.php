<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <title>Número de tarjetas</title>
</head>

<body>
    <main class="container">
        <form action="procesar.php" method="post">
            Ingrese el número de tarjetas: <input type="number" require min="1" name="numero"><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>

</html>