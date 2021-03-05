<?php
$A =  [68168, 87954, 32158, 8774];
$B = [5408, 6604, 32158, 84984, 8774, 34871];

$result = [];
foreach($A as $nilaiA){
   foreach($B as $nilaiB){
	   if ($nilaiA == $nilaiB){
		   array_push($result, $nilaiA);
		   break;
	   }
   }
}
var_dump($result);
 ?>