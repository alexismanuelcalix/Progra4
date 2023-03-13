<?php

    //arreglo numerico
 $nombres = array("Jose","Sofia","Andrea","Alberto");
 //accediendo directamente al indice
 echo $nombres[0];
 echo $nombres[1];
 echo $nombres[2];
 
    echo "<br/>";

  //arreglo numerico
  $nombres= array("Jose","Sofia","Andrea","Alberto");
  //recorriendo con bucle
  foreach($nombres as $key)
  {
      echo $key."<br/>";
  }
  
  
  //FOR
  //arreglo numerico 
  //$nombres= array("Jose","Sofia","Andrea","Alberto");
  //recorriendo con bucle
  //for($i=0;$i<$nombres;$i++):
   // echo $nombres[$i]. "<br/>";
  //endfor;



 //array asociativo
   $multipleColors = array(
    "Jose" => array("Azul","Rojo","Verde"),
    "Sofia" => array("Violeta","Rosado")
   );

 echo "<h2>Jose</h2>";
 echo $multipleColors["Jose"][0]."<br/>";
 echo $multipleColors["Jose"][1]."<br/>";
 echo $multipleColors["Jose"][2]."<br/>";


   //array asociativo
 $multipleColors = array(
    "Jose" => array("Azul","Rojo","Verde"),
    "Sofia" => array("Violeta","Rosado")
   );

   foreach($multipleColors as $nombre=>$values){
    echo "<h2>$nombre </h2> <b> le gustan los colores: </b><br/>";
    foreach ($values as $colores):
        echo $colores . "<br/>";
    endforeach;
   }

   echo "<br/>";
   
    // array multidimensional numerico
    $multiNumerico=array(
        array("Jose","Andrea","Carmen"),
        array(22,35,18),
        array ("Masculino","Femenino","Femenino")
    );

    //recorrer array
    echo "Nombre:" .$multiNumerico[0][0] ."<br/>";
    echo "Edad:" .$multiNumerico[1][0] ."<br/>";
    echo "Sexo:" .$multiNumerico[2][0] ."<br/>";

    echo "<br/>";

        //array multimensional numerico
        $multiNumerico=array(
            array("Jose","Andrea","Carmen"),
            array(22,35,18),
            array("Masculino","Femenino","Femenino")
        );

        //recorrer el array
        foreach($multiNumerico as $key=>$value)
        {
            foreach($value as $datos):
                echo $datos. "<br/>";
            endforeach;
        }


    //array multimencional numerico
    $multiNumerico=array(
        array("Jose","Andrea","Carmen"),
        array(22,35,18),
        array("Masculino","Femenino","Femenino")
    );

    //recorrer array
    for($i=0;$j<count($multiNumerico);$j++)
    {
        echo "<br/>Fila:".$i."<br/>";
        for($j=0;$j<count($multiNumerico[$i]);$j++)
        {
            echo $multiNumerico[$i][$j] ."<br/>";
        }
    }

    echo "<br/>";

    //array multimencional numerico
    $asoc=array(
        "Jose"=>array(22, "Masculino"),
        "Andrea"=>array(35,"Femenino"),
        "Carmen"=>array(18, "Femenino")
    );

    //recorrer array
    foreach($asoc as $key=>$values)
    {
        echo "<b>$key</b><br/>";
        foreach($values as $datos)
        {
            echo $datos. "<br/>";
        }
    }


    echo "<br/>";


    //array multimensional numerico
    $asoc=array(
        "Jose"=>array("Edad"=>22,"Sexo"=>"Masculino"),
        "Andrea"=>array("Edad"=>35,"Sexo"=>"Femenino"),
        "Carmen"=>array("Edad"=>18,"Sexo"=>"Femenino")
    );

    //recorrer array
    foreach($asoc as $key=>$values)
    {
        echo "<br/><b>$key</b><br/>";
        foreach($values as $key2=>$datos)
        {
            echo "<b>".$key2 .":</b>";
            echo  $datos . "<br/>";
        }
    }

 ?>