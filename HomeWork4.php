<?php
  $nation = array(
  				  'Tajikistan'=>[
  				  'name'=>'Tajikistan',
  				   'capital'=>'Dushanbe'
  				   ],
                  'Russia'=>[
                  'name'=> 'Russia',
                   'capital'=>'Moskov'
                   ],
                  'England'=>[
                  'name'=>'England',
                   'capital'=>'London'
                   ],
                  'Uzbekistan'=>[
                  'name'=> 'Uzbekistan',
                   'capital'=>'Tashkent'
                   ]
  					);
  					 
?>
<script>   
	function showCapital(select){	 
	if(select.value!="")  	  
	    document.getElementById("capital").innerHTML = (document.getElementById(select.value).value);	    
	} 	
</script>
<div style="margin: 50px;">
<select id="nation" onclick="showCapital(this)" style="width: 150px; height: 30px; font-size: 20px;"> 
<option></option>
<? foreach ($nation as $keys=>$values){ ?>  
 <option><?=$values['name']?></option> 
 <? } ?>
<select>
<? foreach ($nation as $keys=>$values){ ?>  
 <input type="hidden" id="<?=$values['name']?>" value="<?=$values['capital']?>">
 <? } ?>
<span id="capital"style="margin-left:25px;font-size: 20px;"></span>
</div>





