<?php
   function swap(&$a,&$b){
     $a=$a+$b;
     $b= $a-$b;
     $a= $a-$b;
   }
   $x=20;
   $y=10;
   echo "Nilai Sebelum Swap : <br/> X : $x <br/> Y: $y" ;
   echo "<br/>";
   swap($x,$y);
   echo "Nilai Sebelum Swap : <br/> X : $x <br/> Y: $y" ;
   
?>