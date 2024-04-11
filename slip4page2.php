<?php
	session_start();
	$_SESSION['ename']=$_GET['ename'];
	$_SESSION['eno']=$_GET['eno'];
	$_SESSION['eaddress']=$_GET['eaddress'];
?>
<html>
	<head>
		<title>Slip 4 </title>
	</head>
	<body>
		<h1>Enter the employee detailes</h1>
		<form action="slip4page3.php" method="GET">
			Employee BASIC salary = <input type="text" id="basic" name="basic"><br>
			Employee DA = <input type="text" id="da" name="da"><br>
			Employee HRA = <input type="text" id="hra" name="hra"><br>
			<input type="submit" name="submit" id="submit">
		</form>
	</body>
</html>
