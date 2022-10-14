<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Load Balanced Webserver Exmaple</title>
</head>
<body>
	<h1>Load Balanced Webserver</h1>

	<h3>Webserver</h3>
	<p>Server that served this page: <?php echo $_SERVER['SERVER_NAME']; ?></p>

	<h3>Database</h3>

	<p>
		<?php 

		$serverName = "localDbServer";
		$username = "dbuser";
		$password = "password1234";

		$conn = mysql_connect($serverName, $username, $password);

		if(!$conn)
		{
			die("Connection Failed:" . mysqli_connect_error())
		}

		echo "Connected to Database"

		?>
	</p>

</body>
</html>