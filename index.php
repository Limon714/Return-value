<?php

function myFunc($fname = "First", $lname = "last"){
$v = "$fname $lname to you";
return $v;
}
 $name = myFunc("php", "lover");
 echo "inspired $name<br>";

 function sum($mathe, $en, $ac){
     $s = $mathe + $en + $ac;
     return $s;
 }

 function percentage($st){
     $per = $st / 3;
     echo "Total Percentage is : " . $per ."%";
 }
 $total = sum(67,98,95);
 percentage($total);
 echo "<br>" . " Total Number is : " . $total;
?>
