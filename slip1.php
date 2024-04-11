<?php
	session_start();
	if(isset($_SESSION['count']))
	{
		$_SESSION['count']++;
	}
	else
	{
		$_SESSION['count']=1;
	}
	echo "the number of ".$_SESSION['count']." times you visit this page";
	
?>
