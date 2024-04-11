<?php
	$empname=$_GET['n'];
	
	$con=pg_connect("dbname=employee user=postgres");
	$qry="select * from emp where ename='$empname'";
	$rs=pg_query($con,$qry);
	if($rs!=null)
	{
		echo "<table border=1>";
		echo "<tr><th>Eno</th><th>Ename</th><th>Edesg</th><th>ESalary</th></tr>";
		while($row=pg_fetch_row($rs))
		{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "</tr>";
		}
	}
	else{
		echo "No any data found";
	}
	pg_close($con);
?>
