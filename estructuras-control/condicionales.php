<?php
    // Condicional IF

    // Ejemplo 1
     $color = 'amarillo';

     if($color == 'rojo'){
        echo 'El color es rojo <p></p>';
     } else {
        echo 'El color no es rojo <p></p>';
     }

     // Ejemplo 2
     $year = 1998;

     if($year !== 2022){
        echo 'Es un año distino a ' . $year . '<p></p>';
     } else {
        echo 'Es el mismo año de ' . $year . '<p></p>';
     }

     // Ejemplo 3
     $nombre = 'Jorge';
     $edad = 17;
     $mayoria_edad = 18;

     if($edad >= $mayoria_edad){
        echo $nombre . ' tiene la mayoria de edad <p></p>';
     } else{
        echo $nombre . ' aún no tiene la mayoria de edad <p></p>';
     }

     // Ejemplo 4
     $dia = 2;
     if($dia === 1){
        echo 'Es lunes';
     }elseif($dia === 2){
        echo ' Es martes';
     }elseif($dia === 3){
        echo ' Es miercoles';
     }elseif($dia === 4){
        echo ' Es jueves';
     }elseif($dia === 5){
        echo ' Es viernes';
     }elseif($dia === 6){
        echo ' Es sabado';
     }elseif($dia === 7){
        echo 'Es domingo';
     }else{
        echo 'Ingreso ńumero errado';
     }


     //Ejemplo 5

     $name = 'Jorge';
     $age = 27;
     $age_min = 20;
     $age_max = 30;
     
     if(($age >= $age_min) && ($age <= $age_max)) {
        echo $name . ' se encuentra dentro del rango de edad';
     }else{
        echo 'No se encuentra en el rango de edad';
     }

     // Condicional Switch 
     $mes = 'octubre';

     switch($mes){
         case 'enero':
            echo 'Mes de enero';
            break;
         case 'febrero':
            echo 'Mes de febrero';
            break;
         case 'marzo':
            echo 'Mes de marzo';
            break;
         case 'abril':
            echo 'Mes de abril';
            break;
         case 'mayo':
            echo 'Mes de mayo';
            break;
         case 'junio':
            echo 'Mes de junio';
            break;   
         case 'julio':
            echo 'Mes de julio';
            break;
         case 'agosto':
            echo 'Mes de agosto';
            break;
         case 'septiembre':
            echo 'Mes de septiembre';
            break;
         case 'octubre':
            echo 'Mes de octubre';
            break;
         case 'noviembre':
            echo 'Mes de noviembre';
            break;
         case 'diciembre':
            echo 'Mes de diciembre';
            break;
         default:
            break;
     }


?>

