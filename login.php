<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {

	$connect = mysql_connect("127.0.0.1","root","") or die("could not connect to database");
	mysql_select_db("login") or die("Could not find database");

	$query = mysql_query("SELECT * FROM users where username='$username");

	$numrows = mysql_num_rows($query);

	if ($numrows !=0) {

		while ($row=mysql_fetch_assoc($query)) {
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}

			if ($username==$dbusername&&$password==$dbpassword) {
				echo "Login successful. <a href='membersarea.php'>Click here to enter the members area</a> ";
				

				$_SESSION['username']=$dbusername;
			}

			else
				echo "Incorrect password";
	}
	else
		die("That username does not exist");
}
else
die("please enter a username and password");

?>