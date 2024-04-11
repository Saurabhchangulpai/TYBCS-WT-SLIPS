<?php
	$tname=$_GET['n'];
	$con=pg_connect("dbname=teacher user=postgres");
	$qry="select * from teacher where tname='$tname'";
	$rs=pg_query($con,$qry);
	if($rs!==null)
	{
		echo "<table border=1>";
		echo "<tr><th>teacherNo</th><th>teacherName</th><th>teacherQualification</th><th>teacherSalary</th></tr>";
		while($row=pg_fetch_row($rs))
		{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No records found";
	}
	pg_close($con);
		
?>
