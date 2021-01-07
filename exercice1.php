<?php
//1) Ecriture en Php De LA fonction Somme
//  a) écrire la fonction sous une forme itérative
 function Iterative($n){
     $somme =0;
     for ($i = 1; $i <= $n; $i++) {
        $somme += $i;
     }
     return $somme;
 }

// b) écrire la fonction sous une forme récursive

function Recursive($n){
   if ($n === 1){
       $somme[$n] = $n;

   }
   else {
       $somme[$n] = $n;
       Recursive($n);
   }
    return array_sum($somme);
}

// N'étant pas sur de ma fonction récursive, je propose un autre solution avec la formule mathématique.
function Math($n){
    $somme = ($n($n+1))/2;
    return $somme;

}