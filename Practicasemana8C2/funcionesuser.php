<?php
//funcion colores tendra un valor predeterminado verde
function colores($color="Verde"){
    return "<p>Su color favorito es: $color</p>";
}

//pasamos un valor como argumento
echo colores("Azul");

// si no se pasa un valor como argumento, tomara el valor por defecto
echo colores();


function saludo($nombre){
    $nombre .=", Bueno dias";
}

$nombre="Sofia Flores";
saludo($nombre);
echo $nombre;

echo "<br/>";

//declaramos un arreglo llamado fruta
$fruta= array("Manzana", "Uva", "Pera");

//se crea una funcion llamada frutas y pasaremos un argumento fruta
function frutas($fruta){
    //llamado al arreglo fruta y agregamos una fruta al arreglo
    array_push($fruta, "Sandia");

}

//llamado a la funcion frutas
frutas($fruta);
var_dump($fruta);

echo "<br/>";

//difinicion de funcion anonima
$saludo = function(){
    return "Hola";
};

echo $saludo();

//añadiendo una funcion en otra
//function saludo($saludar){
  //  echo $saludar();
//}

//saludo (function(){
   // return "Buenos dias";
//});

echo "<br/>";
$color ="azul";

$mostrar = function() use($color){
    echo "Su color favorito es $color";
};
$mostrar();

echo "<br/>";

$color="Azul";

$mostrar = function() use($color){
    //echo "Su color favorito es $color";
    echo $color="Verde";
};
$mostrar();
echo $color; //mostrara color azul

echo "<br/>";

$color="Azul";

$mostrar = function() use(&$color){
    //echo "Su color favorito es $color";
    echo $color="Verde";
};
$mostrar();
echo $color; //mostrara color azul

echo "<br/>";

$saludo = function ($nombre){
    printf("Hola". $nombre);
};

$saludo("Andrea"); //devuelve hola andrea
call_user_func($saludo, "Amigos"); //devuelve hola amigos

//esta en carpeta htdocs-funciones
//function saludo(array $nombre){
 //   echo  "Hola" .join ("",$nombre);
//}

//saludo(["Carmen","Jose"]);

echo "<br/>";

//declaracion de funcion suma
//se define como valor de retorno un valor entero
function suma($numero1, $numero2):int {
    return $numero1+$numero2;
}
//con var_dump visualizamos el tipo de dato que retorna
var_dump(suma(6,7));
//var_dump(suma(6.2,2.7));




?>