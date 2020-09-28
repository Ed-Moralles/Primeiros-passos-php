<?php

   $x = 1;
   if ( $x == 1 ){
       echo $x;
       echo "\n";
   }

   $x = 300;
   if ( $x == 300 ){
       echo "Ok, sigamos adiante!!!";
       echo "\n";
   }

   $x = 400;
   if ( $x == 40 ){
       echo "Ok, sigamos adiante!";
       echo "\n";
   }

   $x = 40;
   if ( $x == 400 ){
       echo "Ok, sigamos adiante!";
       echo "\n";
   }

   $x = 500;
   $z = 500;
   if ( $x == $z ){
       echo "Ok, sigamos adiante!";
       echo "\n";
   }

   $x = 600;
   $y = 700;
   if ( $x == $y ){
       echo "Ok, sigamos adiante!";
   } else {
       echo "Não bate, paramos por ai!";
   }
   echo "\n";

   $a = 4;
   if ( $a == 6 ){
       echo "$a";
   } elseif ( $a == 4 ){
       echo "a é igual a $a"; 
   } else {
       echo " a não é igual a nenhuma das opções!";
   }
   echo "\n";

   $x = 8;
   if ( $x == 10 ){
       echo "$x";
   } elseif ( $x == 20 ){
       echo"x é igual a $x";
   } else {
       echo "x não é igual a nenhum dos valores!";
   }
   echo "\n";

   $z = 10;
   switch ($z){
        case 1:
            echo "z é igual a 20";
            break;   
        case 2:
            echo "z é igual a 30";
            break;
        case 3:
            echo "z é igual a 40";
            break;
        default:
            echo "z não é igual a nenhuma das opções";        
   }
   echo "\n";

   $x = 10;
   switch ($x){
       case 1:
            echo "x é igual a 30";
            break;
       case 10:
            echo "x é igual a 10";
            break;
       case 3:
            echo "x é igual a 40";
            break;
       default:
            echo "x não é igual a nenhuma das opções";               
   }
   echo "\n";

   $a = 100;
   echo ( $a == 300) ? "O valor de a é igual a 300!\n" : "O valor não é igual a 300, seu valor é $a\n";
   
?>