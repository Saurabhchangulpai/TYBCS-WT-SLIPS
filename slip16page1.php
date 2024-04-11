<html>
	<head>
		<script>
			function display()
			{
				var x=new XMLHttpRequest();
				var n=document.getElementById("n").value;
				x.open("GET","slip16page2.php?n="+n,true);
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
		Select Book : 
		<select id="n" onchange="display()">
			<option value="Networking">Networking</option>
			<option value="C">CSharp</option>
			<option value="C++">C</option>
			<option value="C#">Java</option>
		</select>
		<h1 id="show"></h1>
	</body>
</html>
