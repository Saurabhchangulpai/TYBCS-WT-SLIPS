<html>
	<head>
		<script>
			function validate()
			{
				let username=document.getElementById("username").value;
				let password=document.getElementById("password").value;
				
				if(username.length<6)
				{
					alert("Username length minimum of 6 letters");
				}
				if(password.length<8)
				{
					alert("password length minimum of 8 letters");
				}
			}
		</script>
	</head>
	<body>
		<form onsubmit="validate()">
			Username : <input type="text" id="username" name="username">;
			Password : <input type="text" id="password" name="password">;
			<input type="submit" id="submit" name="submit">
		</form>
	</body>
</html>
