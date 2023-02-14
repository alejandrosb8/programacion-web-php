<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <title>Resultados</title>
</head>

<body>
    <main class="container">
        <?php
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $matematicas = $_POST["matematicas"];
        $fisica = $_POST["fisica"];
        $programacion = $_POST["programacion"];

        $n = count($dni);

        // Calcular promedio de cada materia
        $promedio_matematicas = array_sum($matematicas) / $n;
        $promedio_fisica = array_sum($fisica) / $n;
        $promedio_programacion = array_sum($programacion) / $n;

        // Calcular número de alumnos aprobados y reprobados en cada materia
        $aprobados_matematicas = 0;
        $reprobados_matematicas = 0;
        $aprobados_fisica = 0;
        $reprobados_fisica = 0;
        $aprobados_programacion = 0;
        $reprobados_programacion = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($matematicas[$i] >= 10) {
                $aprobados_matematicas++;
            } else {
                $reprobados_matematicas++;
            }
            if ($fisica[$i] >= 10) {
                $aprobados_fisica++;
            } else {
                $reprobados_fisica++;
            }
            if ($programacion[$i] >= 10) {
                $aprobados_programacion++;
            } else {
                $reprobados_programacion++;
            }
        }

        // Calcular número de alumnos que aprobaron todas las materias
        $aprobados_todas = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($matematicas[$i] >= 10 && $fisica[$i] >= 10 && $programacion[$i] >= 10) {
                $aprobados_todas++;
            }
        }

        // Calcular número de alumnos que aprobaron una sola materia
        $aprobados_una = 0;
        for ($i = 0; $i < $n; $i++) {
            $aprobadas = 0;
            if ($matematicas[$i] >= 10) {
                $aprobadas++;
            }
            if ($fisica[$i] >= 10) {
                $aprobadas++;
            }
            if ($programacion[$i] >= 10) {
                $aprobadas++;
            }
            if ($aprobadas == 1) {
                $aprobados_una++;
            }
        }

        // Calcular número de alumnos que aprobaron dos materias
        $aprobados_dos = 0;
        for ($i = 0; $i < $n; $i++) {
            $aprobadas = 0;
            if ($matematicas[$i] >= 10) {
                $aprobadas++;
            }
            if ($fisica[$i] >= 10) {
                $aprobadas++;
            }
            if ($programacion[$i] >= 10) {
                $aprobadas++;
            }
            if ($aprobadas == 2) {
                $aprobados_dos++;
            }
        }

        // Calcular nota máxima de cada materia
        $maxima_matematicas = max($matematicas);
        $maxima_fisica = max($fisica);
        $maxima_programacion = max($programacion);

        // Mostrar los resultados
        echo "Promedio de matemáticas: $promedio_matematicas<br><hr>";
        echo "Promedio de física: $promedio_fisica<br><hr>";
        echo "Promedio de programación: $promedio_programacion<br><hr>";
        echo "Alumnos aprobados en matemáticas: $aprobados_matematicas<br><hr>";
        echo "Alumnos reprobados en matemáticas: $reprobados_matematicas<br><hr>";
        echo "Alumnos aprobados en física: $aprobados_fisica<br><hr>";
        echo "Alumnos reprobados en física: $reprobados_fisica<br><hr>";
        echo "Alumnos aprobados en programación: $aprobados_programacion<br><hr>";
        echo "Alumnos reprobados en programación: $reprobados_programacion<br><hr>";
        echo "Alumnos que aprobaron todas las materias: $aprobados_todas<br><hr>";
        echo "Alumnos que aprobaron una sola materia: $aprobados_una<br><hr>";
        echo "Alumnos que aprobaron dos materias: $aprobados_dos<br><hr>";
        echo "Nota máxima en matemáticas: $maxima_matematicas<br><hr>";
        echo "Nota máxima en física: $maxima_fisica<br><hr>";
        echo "Nota máxima en programación: $maxima_programacion<br><hr>";
        ?>
    </main>
</body>

</html>