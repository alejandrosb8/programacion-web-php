<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Tarea 1</title>
</head>

<body>
    <main class="container">
        <div class="headings">
            <h1>Tarea 1 - Programación web</h1>
            <h2>Filtrar información de empleados</h2>
        </div>
        <br>
        <section>
            <form action="index.php" method="post">

                <!-- Empleado 1 -->

                <section>
                    <h3>Empleado 1</h3>

                    <!-- Nombre y apellidos -->

                    <div class="grid">
                        <label for="firstname1">
                            Nombre
                            <input type="text" id="firstname1" name="firstname1" placeholder="Nombre..." required>
                        </label>
                        <label for="lastname1">
                            Apellido
                            <input type="text" id="lastname1" name="lastname1" placeholder="Apellido..." required>
                        </label>
                    </div>

                    <!-- Edad -->

                    <label for="age1">
                        Edad
                        <input type="number" id="age1" name="age1" placeholder="0" min="16" max="80" required>
                        <small>Entre 16 y 80 años</small>
                    </label>

                    <!-- Sexo -->

                    <fieldset>
                        <legend>Sexo</legend>
                        <label for="female1">
                            <input type="radio" id="female1" name="gender1" value="female" checked>
                            Femenino
                        </label>
                        <label for="male1">
                            <input type="radio" id="male1" name="gender1" value="male">
                            Masculino
                        </label>
                    </fieldset>

                    <!-- Estado civil -->

                    <fieldset>
                        <legend>Estado civil</legend>
                        <label for="single1">
                            <input type="radio" id="single1" name="marital-status1" value="single" checked>
                            Soltero(a)
                        </label>
                        <label for="married1">
                            <input type="radio" id="married1" name="marital-status1" value="married">
                            Casado(a)
                        </label>
                        <label for="widowed1">
                            <input type="radio" id="widowed1" name="marital-status1" value="widowed">
                            Viudo(a)
                        </label>
                    </fieldset>

                    <!-- Sueldo -->

                    <fieldset>
                        <legend>Sueldo</legend>
                        <label for="lessThan1000_1">
                            <input type="radio" id="lessThan1000_1" name="salary1" value="lessThan1000" checked>
                            Menos de 1000 Bs.
                        </label>
                        <label for="between1000And2000_1">
                            <input type="radio" id="between1000And2000_1" name="salary1" value="between1000And2000">
                            Entre 1000 y 2500 Bs.
                        </label>
                        <label for="moreThan2500_1">
                            <input type="radio" id="moreThan2500_1" name="salary1" value="moreThan2500">
                            Más de 2500 BS.
                        </label>
                    </fieldset>
                    <hr>
                </section>

                <!-- Empleado 2 -->

                <section>
                    <h3>Empleado 2</h3>

                    <!-- Nombre y apellidos -->

                    <div class="grid">
                        <label for="firstname2">
                            Nombre
                            <input type="text" id="firstname2" name="firstname2" placeholder="Nombre..." required>
                        </label>
                        <label for="lastname2">
                            Apellido
                            <input type="text" id="lastname2" name="lastname2" placeholder="Apellido..." required>
                        </label>
                    </div>

                    <!-- Edad -->

                    <label for="age2">
                        Edad
                        <input type="number" id="age2" name="age2" placeholder="0" min="16" max="80" required>
                        <small>Entre 16 y 80 años</small>
                    </label>

                    <!-- Sexo -->

                    <fieldset>
                        <legend>Sexo</legend>
                        <label for="female2">
                            <input type="radio" id="female2" name="gender2" value="female" checked>
                            Femenino
                        </label>
                        <label for="male2">
                            <input type="radio" id="male2" name="gender2" value="male">
                            Masculino
                        </label>
                    </fieldset>

                    <!-- Estado civil -->

                    <fieldset>
                        <legend>Estado civil</legend>
                        <label for="single2">
                            <input type="radio" id="single2" name="marital-status2" value="single" checked>
                            Soltero(a)
                        </label>
                        <label for="married2">
                            <input type="radio" id="married2" name="marital-status2" value="married">
                            Casado(a)
                        </label>
                        <label for="widowed2">
                            <input type="radio" id="widowed2" name="marital-status2" value="widowed">
                            Viudo(a)
                        </label>
                    </fieldset>

                    <!-- Sueldo -->

                    <fieldset>
                        <legend>Sueldo</legend>
                        <label for="lessThan1000_2">
                            <input type="radio" id="lessThan1000_2" name="salary2" value="lessThan1000" checked>
                            Menos de 1000 Bs.
                        </label>
                        <label for="between1000And2000_2">
                            <input type="radio" id="between1000And2000_2" name="salary2" value="between1000And2000">
                            Entre 1000 y 2500 Bs.
                        </label>
                        <label for="moreThan2500_2">
                            <input type="radio" id="moreThan2500_2" name="salary2" value="moreThan2500">
                            Más de 2500 BS.
                        </label>
                    </fieldset>
                    <hr>
                </section>

                <!-- Empleado 3 -->

                <section>
                    <h3>Empleado 3</h3>

                    <!-- Nombre y apellidos -->

                    <div class="grid">
                        <label for="firstname3">
                            Nombre
                            <input type="text" id="firstname3" name="firstname3" placeholder="Nombre..." required>
                        </label>
                        <label for="lastname3">
                            Apellido
                            <input type="text" id="lastname3" name="lastname3" placeholder="Apellido..." required>
                        </label>
                    </div>

                    <!-- Edad -->

                    <label for="age3">
                        Edad
                        <input type="number" id="age3" name="age3" placeholder="0" min="16" max="80" required>
                        <small>Entre 16 y 80 años</small>
                    </label>

                    <!-- Sexo -->

                    <fieldset>
                        <legend>Sexo</legend>
                        <label for="female3">
                            <input type="radio" id="female3" name="gender3" value="female" checked>
                            Femenino
                        </label>
                        <label for="male3">
                            <input type="radio" id="male3" name="gender3" value="male">
                            Masculino
                        </label>
                    </fieldset>

                    <!-- Estado civil -->

                    <fieldset>
                        <legend>Estado civil</legend>
                        <label for="single3">
                            <input type="radio" id="single3" name="marital-status3" value="single" checked>
                            Soltero(a)
                        </label>
                        <label for="married3">
                            <input type="radio" id="married3" name="marital-status3" value="married">
                            Casado(a)
                        </label>
                        <label for="widowed3">
                            <input type="radio" id="widowed3" name="marital-status3" value="widowed">
                            Viudo(a)
                        </label>
                    </fieldset>

                    <!-- Sueldo -->

                    <fieldset>
                        <legend>Sueldo</legend>
                        <label for="lessThan1000_3">
                            <input type="radio" id="lessThan1000_3" name="salary3" value="lessThan1000" checked>
                            Menos de 1000 Bs.
                        </label>
                        <label for="between1000And2000_3">
                            <input type="radio" id="between1000And2000_3" name="salary3" value="between1000And2000">
                            Entre 1000 y 2500 Bs.
                        </label>
                        <label for="moreThan2500_3">
                            <input type="radio" id="moreThan2500_3" name="salary3" value="moreThan2500">
                            Más de 2500 BS.
                        </label>
                    </fieldset>
                    <hr>
                </section>

                <!-- Empleado 4 -->

                <section>
                    <h3>Empleado 4</h3>

                    <!-- Nombre y apellidos -->

                    <div class="grid">
                        <label for="firstname4">
                            Nombre
                            <input type="text" id="firstname4" name="firstname4" placeholder="Nombre..." required>
                        </label>
                        <label for="lastname4">
                            Apellido
                            <input type="text" id="lastname4" name="lastname4" placeholder="Apellido..." required>
                        </label>
                    </div>

                    <!-- Edad -->

                    <label for="age4">
                        Edad
                        <input type="number" id="age4" name="age4" placeholder="0" min="16" max="80" required>
                        <small>Entre 16 y 80 años</small>
                    </label>

                    <!-- Sexo -->

                    <fieldset>
                        <legend>Sexo</legend>
                        <label for="female4">
                            <input type="radio" id="female4" name="gender4" value="female" checked>
                            Femenino
                        </label>
                        <label for="male4">
                            <input type="radio" id="male4" name="gender4" value="male">
                            Masculino
                        </label>
                    </fieldset>

                    <!-- Estado civil -->

                    <fieldset>
                        <legend>Estado civil</legend>
                        <label for="single4">
                            <input type="radio" id="single4" name="marital-status4" value="single" checked>
                            Soltero(a)
                        </label>
                        <label for="married4">
                            <input type="radio" id="married4" name="marital-status4" value="married">
                            Casado(a)
                        </label>
                        <label for="widowed4">
                            <input type="radio" id="widowed4" name="marital-status4" value="widowed">
                            Viudo(a)
                        </label>
                    </fieldset>

                    <!-- Sueldo -->

                    <fieldset>
                        <legend>Sueldo</legend>
                        <label for="lessThan1000_4">
                            <input type="radio" id="lessThan1000_4" name="salary4" value="lessThan1000" checked>
                            Menos de 1000 Bs.
                        </label>
                        <label for="between1000And2000_4">
                            <input type="radio" id="between1000And2000_4" name="salary4" value="between1000And2000">
                            Entre 1000 y 2500 Bs.
                        </label>
                        <label for="moreThan2500_4">
                            <input type="radio" id="moreThan2500_4" name="salary4" value="moreThan2500">
                            Más de 2500 BS.
                        </label>
                    </fieldset>
                    <hr>
                </section>

                <!-- Empleado 5 -->

                <section>
                    <h3>Empleado 5</h3>

                    <!-- Nombre y apellidos -->

                    <div class="grid">
                        <label for="firstname5">
                            Nombre
                            <input type="text" id="firstname5" name="firstname5" placeholder="Nombre..." required>
                        </label>
                        <label for="lastname5">
                            Apellido
                            <input type="text" id="lastname5" name="lastname5" placeholder="Apellido..." required>
                        </label>
                    </div>

                    <!-- Edad -->

                    <label for="age5">
                        Edad
                        <input type="number" id="age5" name="age5" placeholder="0" min="16" max="80" required>
                        <small>Entre 16 y 80 años</small>
                    </label>

                    <!-- Sexo -->

                    <fieldset>
                        <legend>Sexo</legend>
                        <label for="female5">
                            <input type="radio" id="female5" name="gender5" value="female" checked>
                            Femenino
                        </label>
                        <label for="male5">
                            <input type="radio" id="male5" name="gender5" value="male">
                            Masculino
                        </label>
                    </fieldset>

                    <!-- Estado civil -->

                    <fieldset>
                        <legend>Estado civil</legend>
                        <label for="single5">
                            <input type="radio" id="single5" name="marital-status5" value="single" checked>
                            Soltero(a)
                        </label>
                        <label for="married5">
                            <input type="radio" id="married5" name="marital-status5" value="married">
                            Casado(a)
                        </label>
                        <label for="widowed5">
                            <input type="radio" id="widowed5" name="marital-status5" value="widowed">
                            Viudo(a)
                        </label>
                    </fieldset>

                    <!-- Sueldo -->

                    <fieldset>
                        <legend>Sueldo</legend>
                        <label for="lessThan1000_5">
                            <input type="radio" id="lessThan1000_5" name="salary5" value="lessThan1000" checked>
                            Menos de 1000 Bs.
                        </label>
                        <label for="between1000And2000_5">
                            <input type="radio" id="between1000And2000_5" name="salary5" value="between1000And2000">
                            Entre 1000 y 2500 Bs.
                        </label>
                        <label for="moreThan2500_5">
                            <input type="radio" id="moreThan2500_5" name="salary5" value="moreThan2500">
                            Más de 2500 BS.
                        </label>
                    </fieldset>
                    <hr>
                </section>

                <!-- Boton y reinicio -->

                <button type="submit">Agregar empleados</button>
            </form>
        </section>
        <section>
            <p>Resultados</p>
            <?php
            if (!empty($_POST)) {

                $ages = array($_POST['age1'], $_POST['age2'], $_POST['age3'], $_POST['age4'], $_POST['age5']);
                $genders = array($_POST['gender1'], $_POST['gender2'], $_POST['gender3'], $_POST['gender4'], $_POST['gender5']);

                //Total de empleados de sexo femenino

                $females = array();

                for ($i = 0; $i < 5; $i++) {
                    if ($genders[$i] == 'female') {
                        $females[] = $genders[$i];
                    }
                }

                echo "<p>Total de empleados del sexo femenino: <b>", count($females), "</b></p>";

                //Total de hombres casados que ganan más de 2500 Bs

                $marriedMalesMoreThan2500 = 0;

                if ($_POST['gender1'] == 'male' && $_POST['marital-status1'] == 'married' && $_POST['salary1'] == 'moreThan2500') {
                    $marriedMalesMoreThan2500++;
                }
                if ($_POST['gender2'] == 'male' && $_POST['marital-status2'] == 'married' && $_POST['salary2'] == 'moreThan2500') {
                    $marriedMalesMoreThan2500++;
                }
                if ($_POST['gender3'] == 'male' && $_POST['marital-status3'] == 'married' && $_POST['salary3'] == 'moreThan2500') {
                    $marriedMalesMoreThan2500++;
                }
                if ($_POST['gender4'] == 'male' && $_POST['marital-status4'] == 'married' && $_POST['salary4'] == 'moreThan2500') {
                    $marriedMalesMoreThan2500++;
                }
                if ($_POST['gender5'] == 'male' && $_POST['marital-status5'] == 'married' && $_POST['salary5'] == 'moreThan2500') {
                    $marriedMalesMoreThan2500++;
                }

                echo "<p>Total de hombres casados que ganan más de 2500 Bs: <b>", $marriedMalesMoreThan2500, "</b></p>";

                //Total de mujeres viudas que ganan más de 1000 Bs

                $marriedFemalesMoreThan1000 = 0;

                if ($_POST['gender1'] == 'female' && $_POST['marital-status1'] == 'widowed' && $_POST['salary1'] != 'lessThan1000') {
                    $marriedFemalesMoreThan1000++;
                }
                if ($_POST['gender2'] == 'female' && $_POST['marital-status2'] == 'widowed' && $_POST['salary2'] != 'lessThan1000') {
                    $marriedFemalesMoreThan1000++;
                }
                if ($_POST['gender3'] == 'female' && $_POST['marital-status3'] == 'widowed' && $_POST['salary3'] != 'lessThan1000') {
                    $marriedFemalesMoreThan1000++;
                }
                if ($_POST['gender4'] == 'female' && $_POST['marital-status4'] == 'widowed' && $_POST['salary4'] != 'lessThan1000') {
                    $marriedFemalesMoreThan1000++;
                }
                if ($_POST['gender5'] == 'female' && $_POST['marital-status5'] == 'widowed' && $_POST['salary5'] != 'lessThan1000') {
                    $marriedFemalesMoreThan1000++;
                }

                echo "<p>Total de mujeres viudas que ganan más de 1000 Bs: <b>", $marriedFemalesMoreThan1000, "</b></p>";

                //Edad promedio de los hombres

                $averageMalesAge = 0;
                $sum = 0;
                $countMales = 0;

                for ($i = 0; $i < 5; $i++) {
                    if ($genders[$i] == 'male') {
                        $sum += $ages[$i];
                        $countMales++;
                    }
                }

                $averageMalesAge = $sum / $countMales;

                echo "<p>Edad promedio de los hombres: <b>", $averageMalesAge, "</b></p>";

                unset($ages);
                unset($genders);
                unset($females);
                unset($marriedMalesMoreThan2500);
                unset($marriedFemalesMoreThan1000);
                unset($averageMalesAge);
                unset($sum);
                unset($countMales);
            }
            ?>
        </section>
    </main>
</body>

</html>