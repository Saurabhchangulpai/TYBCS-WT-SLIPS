<html>
	<head>
		<script>
			function display()
			{
				var x=new XMLHttpRequest();
				var n=document.getElementById("n").value;
				x.open("GET","slip15page2.php?n="+n,true);
				x.send();
				x.onreadystatechange=function()
				{
					if(x.readyState==4 && x.status==200)
					{
						document.getElementById("show").innerHTML=x.responseText;
					}	
				}
			}	
		</script>
	</head>
	<body>
		Search  : <input type="text" name="n" id="n" onkeyup="display()">
		<br>
		<h1 id="show"></h1>
		<br>
	</body>
</html>
