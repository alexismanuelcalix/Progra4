<?php
//funciones de cadena strtolower
$cadena="Programacion Computacional IV";

echo strtolower($cadena);

echo "<br/>";

//funciones de cadena strtoupper
$cadena="Programacion Computacional IV";

echo strtoupper($cadena);

echo "<br/>";

//funciones de cadena strlen
$cadena="Programacion Computacional IV";

echo strlen($cadena);

echo "<br/>";

//funciones de cadena explode
$config="Programacion Computacional IV";

print_r($config);

echo "<br/>";

//funciones de cadena substr
$cadena="Programacion Computacional IV";

echo substr($cadena,3,4);

echo "<br/>";

//funciones de cadena str_replace
$cadena="Programacion Computacional IV";

echo str_replace("IV","I",$cadena);

echo "<br/>";

//funciones de cadena strpos
$cadena="Programacion Computacional IV";

echo strpos($cadena,"IV");

echo "<br/>";

//funciones de cadena sha1
$cadena="Programacion Computacional IV";

echo sha1($cadena);

echo "<br/>";

//funciones de cadena md5
$cadena="Programacion Computacional IV";

echo md5($cadena);

echo "<br/>";

//funciones de cadena str_word_count
$cadena="Programacion Computacional IV";

echo str_word_count($cadena);

echo "<br/>";

//funciones de cadena ucfirst
$cadena="Programacion Computacional IV";

echo ucfirst($cadena);

echo "<br/>";

//funciones de cadena lcfirst
$cadena="Programacion Computacional IV";

echo lcfirst($cadena);

echo "<br/>";

//Funciones numericas
if(is_numeric($number)){
    echo 'el valor de $number es numerico </br>';
    if(is_numeric($number1)){
       echo 'el valor de $number1 es numerico </br>';
    }else {
        echo 'el valor de $number1 no es numerico </br>';
    }
}else{
    echo 'el valor de $number no es numerico </br>';
}

echo "<br/>";

//funciones numericas 
$number=256148;
echo number_format($number);

echo "<br/>";

//funciones numericas 
echo rand(1,100); //genera un numero aleatorio entre 1 y 100

echo "<br/>";

//funciones numericas
echo round(2.39);

echo "<br/>";

//funciones numericas
echo sqrt(24);

echo "<br/>";

//funciones numericas
echo cos(24);

echo "<br/>";

//funciones numericas
echo sin(24);

echo "<br/>";

//funciones numericas
echo tan(24);

echo "<br/>";

//funciones numericas
echo pi();

echo "<br/>";


//funciones de fecha y hora

echo time(); //muestra el tiempo actual

echo "<br/>";

//funciones de fecha y hora
$identificadores=DateTimeZone::listIdentifiers();
foreach($identificadores as $key=>$valores){
    echo $valores."<br/>";
    
}

DateTimeZone::listIdentifiers();


//funciones de fecha y hora
echo "El tiempo en:".date_default_timezone_get()."es".date("H: i: s:"). "<br/>";

date_default_timezone_set("Pasific/Wake");
echo "El tiempo en:".date_default_timezone_get()."es".date("H: i: s:"). "<br/>";

//mktime(hour,minute,second,month,day,year,is_dst);

echo mktime(0,0,0,10,13,2025);

echo "<br/>";

//funciones fecha y hora (pagina 33)
echo date("r");

//funciones fecha y hora
echo date("a")."<br/>";
echo date ("A");

echo "<br/>";

//funciones fecha y hora
echo date("g")."<br/>";
echo date ("G");

echo "<br/>";

//funciones fecha y hora
echo date("h")."<br/>";
echo date ("H");

echo "<br/>";

//funciones fecha y hora
echo date("i")."<br/>";
echo date ("5");

echo "<br/>";

//funciones fecha y hora 
echo date("d");

echo "<br/>";

//funciones fecha y hora 
echo date("j");

echo "<br/>";

//funciones fecha y hora 
echo date("D");

echo "<br/>";

//funciones fecha y hora 
echo date("l");

echo "<br/>";

//funciones fecha y hora 
echo date("w");

echo "<br/>";

//funciones fecha y hora 
echo date("z");

echo "<br/>";

//parametros de mes
//funciones fecha y hora 
echo date("z");



echo "<br/>";

//funciones fecha y hora 
echo date("m");

echo "<br/>";

//funciones fecha y hora 
echo date("n");

echo "<br/>";

//funciones fecha y hora 
echo date("F");

echo "<br/>";

//funciones fecha y hora 
echo date("t");

echo "<br/>";

//parametros del año
//funciones fecha y hora 
echo date("L");

echo "<br/>";

//funciones fecha y hora 
echo date("Y");

echo "<br/>";

//funciones fecha y hora 
echo date("y");

?>