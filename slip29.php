<html>
	<head><title>Slip 29</title></head>
	
	<body>
		<?php
		
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$num = $_POST["num"];
				
				$fab = [0,1];
				
				for($i=2; $i<$num; $i++) {
					
					$fab[$i] = $fab[$i-1] + $fab[$i-2];
				}
				
				$sum = array_sum(str_split($num));
				
				
				echo"Fabonacci Series : ".implode(', ', $fab)."<br><br>";
				
				echo"Sum : ".$sum;
			}
		?>
		
		<form method="POST">
			
			Enter number : <input type="text" name="num"><br><br>
			<input type="submit" value="Display">
		
		</form>
	</body>
</html>
