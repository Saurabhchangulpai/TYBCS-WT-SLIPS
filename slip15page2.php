<?php
	$n=$_GET['n'];
	$a=array("Saurabh","Sarang","Santosh","Samrudhhi","Sakshi","Siddhi");
	if(strlen($n)>0)
	{
		$match="";
		for($i=0;$i<count($a);$i++)
		{
			if(strtolower($n)==strtolower(substr($a[$i],0,strlen($n))))
			{
				if($match=="")
				{
					$match=$a[$i];
				}
				else
				{
					$match=$match.",".$a[$i];
				}
			}
		}
		if($match=="")
		{	
			echo "No suggestions";
		}
		else
			echo $match."<br>";
	}
?>

