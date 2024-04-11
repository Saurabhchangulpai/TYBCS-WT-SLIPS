<?php
	session_start();
	$_SESSION['basic']=$_GET['basic'];
	$_SESSION['da']=$_GET['da'];
	$_SESSION['hra']=$_GET['hra'];
	
	$empName=$_SESSION['ename'];
	$empNo=$_SESSION['eno'];
	$empAddress=$_SESSION['eaddress'];
	
	$basic=$_SESSION['basic'];
	$da=$_SESSION['da'];
	$hra=$_SESSION['hra'];
	$total=$basic+$da+$hra;
	echo "Employee number : ".$empNo."<br>Employee name : ".$empName."<br>Employee address : ".$empAddress."<br>Employee Basic salary : ".$basic."<br>Employee DA : ".$da."<br>Employee hra : ".$hra."<br>Total salary :".$total; 
?>

