<?php
     $massiv = array(
	     0=>['f'=>'Sultonov',
	      'i'=>'Anboz', 
	      'o'=>'Bobojonovich'
	      ],
	     1=>['f'=>'Normahmedov',
         'i'=>'Orif', 
         'o'=>'Orazovich'],
         2=>['f'=>'Boboev',
         'i'=>'Abdubohid', 
         'o'=>'Abdufatohovich']
     );
     
    
     function FIO($array, $index){
    
     	 return ($array[$index]['f'].". ".substr(trim($array[$index]['i']), 0, 1).". ".substr(trim($array[$index]['o']), 0, 1));
     }
  echo (FIO($massiv, 1));


?>