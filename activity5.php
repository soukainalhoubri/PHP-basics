<?php
   
   $word="bonjour php ruojnob";
   $inv=strrev($word);

   echo "on prend la phrase: ".$word."<br><br>";
   echo "la longeur du mot est :".strlen($word);
   if($word==$inv){
     echo "<br><br> la phrase est palindrome";
   }
   else{
    echo " <br><br>la phrase n'est pas palindromes";
   }

   echo "<br><br>le nombre de mots: ".str_word_count($word);

   echo "<br><br>le remplacement de o par O: ".str_replace('o','O',$word);

   echo "<br><br>le remplacement de php par PHP: ".str_replace('php','PHP',$word);

   echo "<br><br>la phrase inversee: ".$inv;

   echo "<br><br>le substr d ordre:     ".substr($word,1,17);
?>