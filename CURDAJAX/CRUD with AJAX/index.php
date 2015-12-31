<html>

	<head>
		<?php require_once('dbconnection.php'); ?>
	</head>

	<script>

		function getUsername(username)
		{
			if(username.length == 0)
			{
				
				document.getElementById('usernameId').innerHTML = "";
				return;
			}
			else
			{
				//console.log(username);
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function()
				{
					//console.log(xmlhttp);
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{
						document.getElementById('usernameId').innerHTML = xmlhttp.responseText;
						//console.log(document.getElementById('usernameId').innerHTML);
					}
				};
				xmlhttp.open("GET","getUserName.php?username="+username,true);
				xmlhttp.send();
			}
		}

	</script>

	<body>

		<form>

			<b> Username: </b>
			<input type="text" name="username" onkeyup="getUsername(this.value)" />
			<span id="usernameId"> </span>
		</br>

			<input type="submit" value="Register" />
		</form>

	</body>

</html>