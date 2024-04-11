<?php
	$bookName=$_GET['n'];
	$xml=simplexml_load_file("book.xml");
	echo "<table border=1>";
	echo "<tr><th>BookName</th><th>BookAuthor</th><th>BookYear</th><th>BookPrice</th></tr>";
	foreach($xml->book as $b)
	{
		if(strcmp($b->title,$bookName)==0)
		{
			echo "<tr>";
			echo "<td>".$b->title."</td>";
			echo "<td>".$b->author."</td>";
			echo "<td>".$b->year."</td>";
			echo "<td>".$b->price."</td>";
			echo "</tr>";
		}
	}

?>
