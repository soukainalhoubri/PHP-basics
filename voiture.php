<?php

   class voiture{
      public $code;
      public $marque;
      public $puissance;
      public $kilometrage;

      function setCode($c){
         $this->$code=$c;
      }
      function setMarque($m){
         $this->$marque=$m;
      }
      function setPuissance($c){
         $this->$puissance=$c;
      }
      function setKilometrage($c){
         $this->$kilometrage=$c;
      }

      function getCode(){
         return $this->$code;
      }

      function getPuissance(){
         return $this->$puissance;
      }

      function getKilometrage(){
         return $this->$kilometrage;
      }

      function getMarque(){
         return $this->$marque;
      }



      function mod_puissance($c){
         $this->$puissance=$c;
      }
      function mod_kilometrage($c){
         $this->$kilometrage=$c;
      }
      function afficher(){
         echo "[voiture code :".($this->$code).",marque :".($this->$marque).", puissance :".($this->$puissance).",kilometrage :".($this->$kilometrage)."]";
      }
   }


   $voiture1= new voiture();

   $voiture1.setCode(123);
   $voiture1.setMarque("Mercedes");
   $voiture1.setKilometrage(355);
   $voiture1.setPuissance(34);

   $voiture1.afficher();
?>