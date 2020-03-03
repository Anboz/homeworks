<?php
$ok = "";
	if($_POST['sendMessage']){
	foreach( $_POST as $k => $v)
		$_POST[$k] = trim(htmlspecialchars(stripslashes($v)));
		if($_POST['email']!="" && $_POST['message']!="")
		{		
		  mail($_POST['email'],"Send email", $_POST['message'], "Content-type:text/plain; utf8");  
		  $ok = "Ok";		
		}
		
		
	}


?>
<!DOCTYPE html>
<html>
	<body>
		<form action="" method="post">			
			<input type="email" placeholder="Email" name="email">
			<textarea placeholder="Message" name="message"></textarea>
			<input type="submit" name="sendMessage" value="Send" style="background-color: #55ff7f; height: 50px;"/>
			<br><br>
		</form>
		<h1><?=$ok?></h1>
	</body>	
</html>
<style>
h1{
	margin: 150px;
  }
	input{
		width: 300px;
		height: 35px;
		font-size:15px;
		margin-left: 150px;
		margin-right: 150px;
		margin-top: 25px;
		padding-left: 10px;
		border-top-style: none;
		border-left-style: none;
		border-right-style: none;
	}
	form{
		background-color: #e2d7da;
		width:600px; 
	}
	textarea{
		width: 300px;
		height: 200px;
		font-size:15px;
		margin-left: 150px;
		margin-right: 150px;
		margin-top: 25px;
		padding-left: 10px;		 
		border-right-style: none;
	}
	
</style>

