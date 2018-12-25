<!DOCTYPE html>
<html>
<link rel="stylesheet"  type="text/css" href="style/style.css">
 <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<head>
	<title>Web Compiler NomadKim</title>
</head>
<body>
<center>
	<form action="testExecls.php" method="POST">
	<div class="codes">
	<div class="code-topic">
		<h1>Web Compiler</h1>
	</div>
	<div class="code-editor" >
		<div class="code-editor-bar"><div class="action-buttons"></div></div>
		<textarea name="textarea" class="code-editor-txtarea"></textarea>
		<!-- <button class="sendbtn"> Compile</button> -->
		<input type="submit" name="" value="Compile" class="sendbtn">	
	</div>
	<br>
	<br>
	<br>
	</div>

	<div class="code-result">
		<div class="code-editor-bar"><div class="action-buttons"></div></div>
		<textarea class="code-result-txtarea"> 
	<?php
	if(!isset($_COOKIE['test'])){
	echo "this is for a test";

	}else{
	echo "result is : ".$_COOKIE['test'];	
	// unset($_COOKIE['test'])
	setcookie('test', "", time()-3600);
}
	?>

	</textarea>
		
	</div>
	</form>
</center>
</body>
</html>
