<?php
	session_start();
	if(isset($_GET['submit']))
	{
		$username=$_GET['username'];
		$password=$_GET['password'];
		
		$OrgUsername="Saurabh";
		$OrgPassword="123";
		
		if($username==$OrgUsername && $password==$OrgPassword)
		{
			header("Location:slip3Output.php");
			unset($_SESSION['attempts']);
		}
		else
		{
			if(isset($_SESSION['attempts']))
			{
				$_SESSION['attempts']--;
			}
			else
			{
				$_SESSION['attempts']=3;
			}
			
			if($_SESSION['attempts']<=0)
			{
				echo "maximum login attempts you cannot login";
			}
			else
			{
				echo "Invalid username or password there are ".$_SESSION['attempts']." attempts remains";
			}
		}
	}
	else
	{
		echo "failed to enter the values";	
	}
?>
