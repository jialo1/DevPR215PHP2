<?php
    /**
     * Permet de montrer un exemple d'utilisation des methodes de classe
     */

     class Calcul
     {
         /**
          * @param int $a variable a
          * @param int $b variable b
          * @return int resultat de l'addition de a et b
          */
         public static function addition($a, $b)
         {
             return $a + $b; 
         }

         /**
          * @param int $a variable a
          * @param int $b variable b
          * @return int resultat de la soustraction de a et b
          */
          public static function soustraction($a, $b)
          {
              return $a - $b; 
          }
     }

     //utilisation des methodes de classe
     $valeur1 = 10;
     $valeur2 = 5;
     echo "$valeur1 + $valeur2 = ".Calcul::addition($valeur1, $valeur2)."<br/>";
     echo "$valeur1 - $valeur2 = ".Calcul::soustraction($valeur1, $valeur2)."<br/>";