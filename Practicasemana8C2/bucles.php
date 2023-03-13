<?php
//FOR LOOP

for($si=0;$si<=10;$si++){
    echo "Ciclo actual:" .$si."<br>";
}

//WHILE
$x=15;

while($x<25):
    echo "while se repite<br/>";
    $x++;//incremento
endwhile;


//DO WHILE LOOP
$x=15;

do{
    echo "while se repite al menos una vez<br/>";
    $x++;
}while($x<25);


//FOREACH
$valores = array(5,9,8,"Hola","Andrea");
foreach($valores as $key):
    echo $key. "<br/>";
endforeach;

?>

