<?php


// question1
//    $genre="homme";
//    if($genre=="femme"){
//     echo "bonjour madame";
//    }
//    else{
//     echo "bonjour monsieur";
//    }




// question2

// $nombre=15;

// if($nombre%3==0 AND $nombre%5==0){
//    echo "True";

// }
// else{
//  echo "False";
// }


//question 3



// $age=30;
// $ville="Tanger";

// if($age<=40 AND $age>=21 AND $ville=="Tanger"){
//   echo "vous êtes le condidat recherché";
// }

// else{
//   echo "vos données ne conviennent pas";
// }


//Question 4  - bissextile

$annee=1000;

if($annee%4!=0){
  echo "pas une année bissextile car pas divisible par 4";
}

else{
  if($annee%100!=0){
   echo "c est une année bissextile car pas divisible par 100";
  }
  elseif($annee%400==0){
   echo "c est une année bissextile divisible aussi par 400";
  }

  else{
   echo "pas une année bissextile car pas divisible par 400";
  }
}


?>