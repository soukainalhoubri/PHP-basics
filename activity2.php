<?php 

//question1
  $i=1;

  while($i<=10){
   echo "<h1>".$i."</h1>";
   $i++;
  }


//question2

for($i=1;$i<=10;$i++){
 echo "<h2>".$i."</h2>";
}


//question 3
for($k=0;$k<8;$k++){
 for($i=0;$i<8;$i++){
  echo "*";
}
echo "</br>";
}



//question 5

for($i=18;$i>=1;$i-=3){
   echo "<h1>".$i." ".($i-1)." ".($i-2)."</h1>";
}



//question 6

for($i=1;$i<=5;$i++){
   for($j=1;$j<=$i;$j++){
      echo $i." ";
   }
   echo "</br>";
}

//question 7

echo "<table style='border:1px solid black'>";
for($i=0;$i<3;$i++){
  echo "<tr style='border:1px solid black'>";

  for($j=1;$j<=2;$j++){
   echo "<td style='border:1px solid black'>bonjour".$i+$j."</td>";
  }

   // echo "<td>bonjour".$i+$j."</td>";
  echo "</tr>";
}
echo "</table>";


//question 8

echo "<table  style='border:1px solid black'>  ";
for($i=1;$i<=9;$i++){
 echo "<tr>";
 for ($j=1;$j<=9;$j++){
    echo "<td style='border:1px solid black'>".$i*$j."</td>";
 }
 echo "</tr>";
}
echo "</table>";


//question 9

echo "<table  style='border:1px solid black'>  ";
for($i=1;$i<=9;$i++){
 echo "<tr>";
 for ($j=1;$j<=10;$j++){
    echo "<td style='border:1px solid black'>".$j."x".$i."=".$i*$j."</td>";
 }
 echo "</tr>";
}
echo "</table>";
?>