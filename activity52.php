<?php

$logiciels=["photoshop","Illustrator","adob premier","PyCharm","Sketchup"];

echo "<h1>".$logiciels[0]."</h1>";

$logiciels[0]="CS4";
echo "<h1>".$logiciels[0]."</h1>";


echo "<h1>".count($logiciels)."</h1>";

foreach($logiciels as $L){
 echo "<h1>".$L."</h1>";
}


?>