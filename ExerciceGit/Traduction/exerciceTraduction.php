<style>
    *{
        background-color: rgb(29, 29, 29);
        color: white;
    }
</style>
<?php
/**
 *Projet  :Traduction
 *Auteur : christnovie kiala binga
 *Version : 1.0
 *Date : 02/12/2019
 */
/** declaration des variables et initialisation  */
$value = 20;
$step = 3;
$i = 0;
/** Reprter la boucle 10 */
 for($i = 0;$i < 10; $i++){
     /** si la valeur de la variable $value est plus petit ou egale à 30 */
     if($value >= 30){
         /** si c'est vrais afficher mot ci-dessou avec la valeur de $value */
      echo 'le nombre vaut ', $value,'<br>';
     }
     else{
         /** Si no afficher le mot ci dessous */
       echo 'nombre trop petit <br>';
     }
     /** affectation de la varible $step à $value */
     $value +=$step;
 }
 return 0;
?>





