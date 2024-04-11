<html>
<body>
	<script type="text/javascript">
	
		function display()
		{
			var x=new XMLHttpRequest();
			var n=document.getElementById("tname").value;
			x.open("GET","slip14page2.php?n="+n,true);
			x.send();
			x.onreadystatechange=function()
			{
				if(x.readyState == 4 && x.status == 200)
				{
					document.getElementById("show").innerHTML=x.responseText;
				}
			}
		}
	</script>
	Teacher name : <input type="text" name="tname" id="tname"><br>
	<button onclick="display()">Print</button>
	<h1 id="show"></h1>
</body>
</html>
