<?php

    $host = "localhost";
	$user = "jpappas2";
	$password = "49mTSJBt";
	$db = "jpappas2_1";

	//Connect to db
	print "Testing connection with ".$db;
	$conn = mysqli_connect($host, $user, $password, $db);
	if ($conn->connect_error) {
		die ("Connection failed: ".$conn->connect_error);
	}
	else print "<br>Connection OK!";

?>
