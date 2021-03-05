<?php
$A =  [68168, 87954, 32158, 8774];
$B = [5408, 6604, 32158, 84984, 8774, 34871];

$result = [];
foreach($A as $valueA){
   foreach($B as $valueB){
	   if ($valueA == $valueB){
		   array_push($result, $valueA);
		   break;
	   }
   }
}
var_dump($result);
 ?>