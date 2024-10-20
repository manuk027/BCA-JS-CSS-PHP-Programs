<html>
	<head>
		<title>Cookie</title>
	</head>
	<body>
		<center><hr>Last visited time on the web page</h2></center>
	</body>
</html>

<?php
	$Int=60*60*24*20+time();
	SetCookie("lastvisit", date("G:i-d/m/y"), $Int);
	if(isset($_COOKIE['lastvisit']))
	{
		$visit = $_COOKIE['lastvisit'];
		echo ("Your last visit was - ". $visit);
	}
	else
	{
		echo "You have got some state cookies";
	}
?>
