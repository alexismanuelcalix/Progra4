<?php

//VARIABLES
$cantidad = 5;
$precio = 3;

$importe = $cantidad * $precio;

$importe = $cantidad * $precio;

$importe = $cantidad * $precio;

echo($importe);

echo "<br>";



$lugar1 = "Buenos aires"; /*Correcto, puede comenzar por una letra*/
$_lugar_2 = "México"; /*Correcto, puede comenzar por un guión bajo*/

echo $lugar1;
echo "<br>";
echo $_lugar_2;
echo "<br>";


$escapeDoble = "Texto con \"comillas\" dobles escapadas";
$espapeSencillo = "Texto con \'comillas\' simples escapadas";
$variablesDobles = "Texto con variables como $nombre y $apellido intercaladas entre comillas dobles, que se reemplazarán por su valor";

echo $escapeDoble;
echo "<br>";
echo $espapeSencillo;
echo "<br>";
echo $variablesDobles;
echo "<br>";

$nombre = 'Pepe';
$concatenacion = '<p id="saludo">Hola '. $nombre.'</p>';

echo $nombre;
echo "<br>";
echo $concatenacion;
echo "<br>";

//CONSTATNTE EN PHP
define ("PI", 3.1415926);
define ("BR", "<br />");
define ("LIBRO", "PHP 6");
print(PI);
print(BR);


//CONDICIONAL IF
    if ($_POST["password"]=="superagente86") {
    echo "<h1>Bienvenidol</h1>";
    }

    echo $_POST;
    echo "<br>";

//ELSE ELSEIF
    if ($clima == "lluvia") {
        echo "Llevar paraguas";
        } else {
        echo "No llevar paraguas";
        }

//SWITH
switch ($día){
    case "lunes":
    $texto = "¡Feliz día Lunes!";
    break;
    case "martes":
    $texto = "¡Feliz día Martes!";
    break;
    case "miercoles":
    $texto = "¡Feliz día Miercoles!";
    break;
    case "jueves":
    $texto = "¡Feliz día Jueves!";
    break;
    case "viernes":
    $texto = "¡Feliz día Viernes!";
    break;
    case "sabado":
    $texto = "¡Feliz día Sabado!";
    break;
    case "Domingo":
    $texto = "¡Feliz día Domingo!";
    break;
    }
    print ($texto);
    
    switch ($día){
        case "lunes":
        $texto = "¡Feliz día Lunes!";
        break;
        case "martes":
        $texto = "¡Feliz día Martes!";
        break;
        case "jueves":
        $texto = "¡Feliz día Jueves!";
        break;
        case "viernes":
        $texto = "¡Feliz día Viernes!";
        break;
        case "sabado":
        $texto = "¡Feliz día Sabado!";
        break;
        case "Domingo":
        $texto = "¡Feliz día Domingo!";
        break;
        default:
    }
    print ($texto);
        
    
    

        
?>