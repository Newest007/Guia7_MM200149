<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Venta de autos</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Autos disponibles</h1>
        </header>
        <div class="row">
        <?php
            //Cargando el archivo de clase
            spl_autoload_register(function ($classname) {
                include_once 'class/' . $classname . '.class.php';
            });

            //Creando los objetos para cada tipo de auto. Notar que se están asignando a elementos de una matriz que tendrá por nombre
            $movil[0] = new Auto("Peugeot", "307", "Gris","img/peugeot.jpg");
            $movil[1] = new Auto("Renault", "Clio", "Rojo","img/renaultclio.jpg");
            $movil[2] = new Auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
            $movil[3] = new Auto("Toyota", "Avalon", "Blanco","img/toyota.jpg");
            //Esta llamada mostrará los valores por defecto en los argumentos del método constructor.
            $movil[4] = new Auto();
            //Mostrando la tabla con los autos disponibles
            for($i=0; $i<count($movil); $i++){
                $movil[$i]->mostrar();
            }
               
        ?>
        </div>
    </div>
</body>
</html>