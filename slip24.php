<?php
	$STR=<<<XML
	<?xml version="1.0" ?>
	<Student>
		<st>
			<StudRollNo>10</StudRollNo>
			<StudName>Saurabh</StudName>
			<StudAddr>Pune</StudAddr>
			<StudColl>MIT</StudColl>
			<StudCourse>BCS</StudCourse>
		</st>
		<st>
			<StudRollNo>11</StudRollNo>
			<StudName>Vaishnavi</StudName>
			<StudAddr>Satara</StudAddr>
			<StudColl>VIT</StudColl>
			<StudCourse>BCS</StudCourse>
		</st>
		<st>
			<StudRollNo>12</StudRollNo>
			<StudName>Ajay</StudName>
			<StudAddr>Bhosari</StudAddr>
			<StudColl>MIT</StudColl>
			<StudCourse>BCA</StudCourse>
		</st>
	</Student>
	XML;
	$file="student.xml";
	$fName=fopen($file,"w");
	fwrite($fName,$STR);
	fclose($fName);
	
	$cname=$_GET['course'];
	
	$student=simplexml_load_file($file);
	echo "<table border=1>";
	echo "<tr><th>Roll Number</th><th>Name</th><th>Address</th><th>Course</th></tr>";
	foreach($student->st as $s)
	{
		if(strcmp($s->StudCourse,$cname)==0)
		{
			echo "<tr><td>".$s->StudRollNo."</td><td>".$s->StudName."</td><td>".$s->StudAddr."</td><td>".$s->StudColl."</td><td>".$s->StudCourse."</td>";
		}
	}
?>
