<?php
	$dom=new DOMDocument;
	$dom->load("slip7.xml");
	$movie=$dom->getElementsByTagName("movie");
	
	foreach($movie as $a)
	{
		echo "Movie name = ".$a->getElementsByTagName("info")[0]->textContent."<br>";
		echo "Movie actor name = ".$a->getElementsByTagName("actor")[0]->textContent."<br>";
		echo "<br>";
		
	}
?>
