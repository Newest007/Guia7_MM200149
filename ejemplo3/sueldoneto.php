<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del empleado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class='container'>
    <?php
    spl_autoload_register(function ($classname) {
        include_once 'class/' . $classname . '.class.php';
    });
    if(isset($_POST['enviar'])){
        if(isset($_POST['enviar'])){
            echo "<h3>Boleta de pago del empleado</h3>";
            $name = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
            $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : "";
            $sueldo = (isset($_POST['sueldo'])) ? doubleval($_POST['sueldo']) : 0.0;
            $numHorasExtras = (isset($_POST['horasextras'])) ? intval($_POST['horasextras']) : 0;
            $pagohoraextra = (isset($_POST['pagohoraextra'])) ? floatval($_POST['pagohoraextra']) : 0.0;
            //Creando instancias de la clase empleado
            $empleado1 = new Empleado();
            $empleado1->obtenerSalarioNeto($name, $apellido, $sueldo, $numHorasExtras, $pagohoraextra);
        }

    }
    else{
       
    ?>

</body>
</html>