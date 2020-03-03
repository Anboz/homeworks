<?php

?>

<script src="jquery.min.js"></script>
<script>
	function startTime(){
		 var StTime = setInterval("updateTime()", 1000);		 	}
		 var t = 0;
		 function updateTime(){		 	
		 /*	document.getElementById('printTime').innerHTML = "<?=date('h:i:s')?>";
		 window.location="index.php";*/
		 $.ajax({
		 url:'time.php',
		 success: function(data){
		 	document.getElementById('printTime').innerHTML = data;
		 }
		 
		});
		 	
		 }
		 
	
</script>
<html>
<body onload="startTime()">
<span id="printTime" style="margin: 150px; font-size: 40px;"></span>
</body>
</html>
