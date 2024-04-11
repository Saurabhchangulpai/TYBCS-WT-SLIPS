<?php
	$xml=simplexml_load_file("slip5.xml");
	foreach($xml ->Item as $a)
	{
		echo "Item Name=".$a->ItemName."<br>";
		echo "Item Rate =".$a->ItemRate."<br>";
		echo "Item Quantity=".$a->ItemQuantity."<br>";
	}
?>
