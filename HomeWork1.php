<?php
     $array = array();
     for($i = 0; $i < 20; $i++)
     	$array[] = rand(-100, 100);

     function Summa($array){
     	$summ = 0;
     	for($k = 0; $k < count($array); $k++)
     		if($array[$k] > 0)$summ += $array[$k];
     			return $summ; 
     }
  echo (Summa($array));


?>