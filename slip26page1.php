<html>
	<head>
		<title>Slip 26</title>
		<script>
			function display()
			{
				var x=new XMLHttpRequest();
				var n=document.getElementById("n").value;
				x.open("GET","slip26page2.php?n="+n,true);
				x.send();
				x.onreadystatechange=function()
				{
					if(x.readyState==4 && x.status==200)
					{
						document.getElementById("show").innerHTML=x.response;
					}
				}
			}
		</script>
	</head>
	<body>
			Employee name : <input type="text" name="n" id="n"><br>
			<input type="submit" name="submit" id="submit" onclick="display()">
			<p id="show"></p>
	</body>
</html>
