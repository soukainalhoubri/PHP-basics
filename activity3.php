<?php
   echo "<br><br> x= ".$x=10;
   echo "<br><br> y= ".$y=20;
   $z=++$x+(++$y);
   echo "<br><br> z= ".$z;
   $t=$x+++($y++);
   echo "<br><br> t= ".$t;

   echo "<br><br> x= ".++$x;
   echo "<br><br> y= ".$y++;
   echo "<br><br> y= ".$y;

   echo "<br><br> t+=z  => t=  ".$t+=$z;
   ++$t;
   $t+=$z;
   echo "<br><br> t= ".$t;

   echo "<br><br> x= ".++$x;
   echo "<br><br> y= ".$y++;

?>