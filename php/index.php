<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Empleados</title>

   <link rel="stylesheet" href="../css/styles.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <h1>Formulario de Empleados</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

        <div class="row">
            <div class="col-2 text-center"><label for="nombreid"></label></div>
            <div class="col-2 text-center"><label for="nombreid">Empleado 1</label></div>
            <div class="col-2 text-center"><label for="nombreid">Empleado 2</label></div>
            <div class="col-2 text-center"><label for="nombreid">Empleado 3</label></div>
            <div class="col-2 text-center"><label for="nombreid">Empleado 4</label></div>
            <div class="col-2 text-center"><label for="nombreid">Empleado 5</label></div>
        </div>
        <div class="row">
            <div class="col-2"><label for="nombreid">Nombre </label></div>
            <div class="col-2"><input type="text" name="nombre1" id="nombreid"></div>
            <div class="col-2"><input type="text" name="nombre2" id="nombreid"></div>
            <div class="col-2"><input type="text" name="nombre3" id="nombreid"></div>
            <div class="col-2"><input type="text" name="nombre4" id="nombreid"></div>
            <div class="col-2"><input type="text" name="nombre5" id="nombreid"></div>
        </div>

        <div class="row">
            <div class="col-2"><label for="apellidoid">Apellido </label></div>
            <div class="col-2"><input type="text" name="apellido1" id="apellidoid"></div>
            <div class="col-2"><input type="text" name="apellido2" id="apellidoid"></div>
            <div class="col-2"><input type="text" name="apellido3" id="apellidoid"></div>
            <div class="col-2"><input type="text" name="apellido4" id="apellidoid"></div>
            <div class="col-2"><input type="text" name="apellido5" id="apellidoid"></div>
        </div>

        <div class="row">
            <div class="col-2"><label for="edadid">Edad </label></div>
            <div class="col-2"><input type="number" name="edad1" id="edadid"></div>
            <div class="col-2"><input type="number" name="edad2" id="edadid"></div>
            <div class="col-2"><input type="number" name="edad3" id="edadid"></div>
            <div class="col-2"><input type="number" name="edad4" id="edadid"></div>
            <div class="col-2"><input type="number" name="edad5" id="edadid"></div>
        </div>

        <div class="row">
            <div class="col-2"><label for="generoid">Género </label></div>
            <div class="col-2"><select name="genero1" class="left">
                <option value = "">Seleccionar...</option>
                <option value = "Masculino">Masculino</option>
                <option value = "Femenino">Femenino</option>
            </select></div>
            <div class="col-2"><select name="genero2">
                <option value = "">Seleccionar...</option>
                <option value = "Masculino">Masculino</option>
                <option value = "Femenino">Femenino</option>
            </select></div>
            <div class="col-2"><select name="genero3">
                <option value = "">Seleccionar...</option>
                <option value = "Masculino">Masculino</option>
                <option value = "Femenino">Femenino</option>
            </select></div>
            <div class="col-2"><select name="genero4">
                <option value = "">Seleccionar...</option>
                <option value = "Masculino">Masculino</option>
                <option value = "Femenino">Femenino</option>
            </select></div>
            <div class="col-2"><select name="genero5">
                <option value = "">Seleccionar...</option>
                <option value = "Masculino">Masculino</option>
                <option value = "Femenino">Femenino</option>
            </select></div>
        </div>

        <div class="row">
            <div class="col-2"><label for="estadocivilid">Estado Civil</label></div>
            <div class="col-2"><select name="estadocivil1">
                <option value = "">Seleccionar...</option>
                <option value = "Soltero(a)">Soltero(a)</option>
                <option value = "Casado(a)">Casado(a)</option>
                <option value = "Viudo(a)">Viudo(a)</option>
            </select></div>
            <div class="col-2"><select name="estadocivil2">
                <option value = "">Seleccionar...</option>
                <option value = "Soltero(a)">Soltero(a)</option>
                <option value = "Casado(a)">Casado(a)</option>
                <option value = "Viudo(a)">Viudo(a)</option>
            </select></div>
            <div class="col-2"><select name="estadocivil3">
                <option value = "">Seleccionar...</option>
                <option value = "Soltero(a)">Soltero(a)</option>
                <option value = "Casado(a)">Casado(a)</option>
                <option value = "Viudo(a)">Viudo(a)</option>
            </select></div>
            <div class="col-2"><select name="estadocivil4">
                <option value = "">Seleccionar...</option>
                <option value = "Soltero(a)">Soltero(a)</option>
                <option value = "Casado(a)">Casado(a)</option>
                <option value = "Viudo(a)">Viudo(a)</option>
            </select></div>
            <div class="col-2"><select name="estadocivil5">
                <option value = "">Seleccionar...</option>
                <option value = "Soltero(a)">Soltero(a)</option>
                <option value = "Casado(a)">Casado(a)</option>
                <option value = "Viudo(a)">Viudo(a)</option>
            </select></div>
        </div>

        <div class="row">
            <div class="col-2"><label for="sueldoid">Sueldo</label></div>
            <div class="col-2"><select name="sueldo1">
                <option value = "">Seleccionar...</option>
                <option value = "Menos de 1.000 Bs.">Menos de 1.000 Bs.</option>
                <option value = "Entre 1.000 y 2.500 Bs.">Entre 1.000 y 2.500 Bs.</option>
                <option value = "Más de 2.500 Bs.">Más de 2.500 Bs.</option>
            </select></div>
            <div class="col-2"><select name="sueldo2">
                <option value = "">Seleccionar...</option>
                <option value = "Menos de 1.000 Bs.">Menos de 1.000 Bs.</option>
                <option value = "Entre 1.000 y 2.500 Bs.">Entre 1.000 y 2.500 Bs.</option>
                <option value = "Más de 2.500 Bs.">Más de 2.500 Bs.</option>
            </select></div>
            <div class="col-2"><select name="sueldo3">
                <option value = "">Seleccionar...</option>
                <option value = "Menos de 1.000 Bs.">Menos de 1.000 Bs.</option>
                <option value = "Entre 1.000 y 2.500 Bs.">Entre 1.000 y 2.500 Bs.</option>
                <option value = "Más de 2.500 Bs.">Más de 2.500 Bs.</option>
            </select></div>
            <div class="col-2"><select name="sueldo4">
                <option value = "">Seleccionar...</option>
                <option value = "Menos de 1.000 Bs.">Menos de 1.000 Bs.</option>
                <option value = "Entre 1.000 y 2.500 Bs.">Entre 1.000 y 2.500 Bs.</option>
                <option value = "Más de 2.500 Bs.">Más de 2.500 Bs.</option>
            </select></div>
            <div class="col-2"><select name="sueldo5">
                <option value = "">Seleccionar...</option>
                <option value = "Menos de 1.000 Bs.">Menos de 1.000 Bs.</option>
                <option value = "Entre 1.000 y 2.500 Bs.">Entre 1.000 y 2.500 Bs.</option>
                <option value = "Más de 2.500 Bs.">Más de 2.500 Bs.</option>
            </select></div>
        </div>
        <br><div class="enviar"><input type="submit" name="enviar" value="Enviar"></div>
    </form>
</body>
</html>

<?php 

if(isset($_POST['enviar'])){

    // Desactiva toda notificación de error.
    error_reporting(0); 

    // Crea los array vacios.
    $nombres = [];
    $apellidos = [];
    $edades = [];
    $generos = [];
    $estadoscivil = [];
    $sueldos = [];

    // Toma los numero y los agrega los numeros a la array
    array_push($nombres, $_POST['nombre1'], $_POST['nombre2'], $_POST['nombre3'], $_POST['nombre4'], $_POST['nombre5']);
    array_push($apellidos, $_POST['apellido1'], $_POST['apellido2'], $_POST['apellido3'], $_POST['apellido4'], $_POST['apellido5']);
    array_push($edades, $_POST['edad1'], $_POST['edad2'], $_POST['edad3'], $_POST['edad4'], $_POST['edad5']);
    array_push($generos, $_POST['genero1'], $_POST['genero2'], $_POST['genero3'], $_POST['genero4'], $_POST['genero5']);
    array_push($estadoscivil, $_POST['estadocivil1'], $_POST['estadocivil2'], $_POST['estadocivil3'], $_POST['estadocivil4'], $_POST['estadocivil5']);
    array_push($sueldos, $_POST['sueldo1'], $_POST['sueldo2'], $_POST['sueldo3'], $_POST['sueldo4'], $_POST['sueldo5']);

    // En caso de querer mostrar los elementos del array en pantalla.
    // var_dump($nombres); 
    // var_dump($apellidos);
    // var_dump($edades);
    // var_dump($generos);
    // var_dump($estadoscivil);
    // var_dump($sueldos);


    echo ("<br>"); echo ("<br>");

    // Ciclo anidados para contar las empleadas mujeres.
    $contadorfem = 0;
    for ($i=0; $i<4 ; $i++) {
        if ($generos[$i]=="Femenino") {
          $contadorfem=$contadorfem+1;
        }
    }
    echo ("<b>") . "Total de empleados del sexo femenino: " . ("</b>") .$contadorfem . ("<br>");

    // Ciclos anidados para contar los empleados hombres, casados y que ganen mas de 2.500 bs.
    $contadorcasados = 0;
    for ($i=0; $i<4; $i++) {
        if ($generos[$i]=="Masculino" && $estadoscivil[$i]=="Casado(a)" && $sueldos[$i]=="Más de 2.500 Bs.") {
          $contadorcasados=$contadorcasados+1;
        }
    }
    echo ("<b>") . "Total de hombres casados que ganan más de 2.500 Bs.: " . ("</b>") . $contadorcasados . ("<br>");


    // Ciclos anidados para contar las empleadas mujeres, viudas y que ganen mas de 1.000 bs.
    $contadorviudas = 0;
    for ($i=0; $i<4 ; $i++) {
        if ($generos[$i]=="Femenino" && $estadoscivil[$i]=="Viudo(a)" && $sueldos[$i]=="Entre 1.000 y 2.500 Bs.") {
          $contadorviudas=$contadorviudas+1;
        }
    }
    echo ("<b>") . "Total de mujeres viudas que ganan más de 1.000 Bs.: " . ("</b>") . $contadorviudas . ("<br>");
 

    // Ciclos anidados para calcular la edad promedio de los empleados hombres.
    $sumaedad = 0;
    $contadoredad = 0;
    for ($i=0; $i<4; $i++) {
        if ($generos[$i]=="Masculino") {
          $sumaedad=$sumaedad+$edades[$i];
        }
    }
    for ($i=0; $i<4; $i++) {
        if ($generos[$i]=="Masculino") {
          $contadoredad=$contadoredad+1;
        }
    }
    $promedioedad = $sumaedad / $contadoredad;
    echo ("<b>") . "Edad promedio de los hombres: " . ("</b>") . $promedioedad;
}
?>