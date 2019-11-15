<?php
    function faktorial ($x) {
        if ($x == 0){
        return(1);
         } else 
        return $x * faktorial ($x-1);
        }
        $x=6;
    echo "Hasil dari $x! adalah " ;
   echo faktorial($x);
    
?>