<?php

$name = $_GET['name'];
$password = $_GET['password'];

if($name && $password){
	mysql_connect("localhost","root","") or die("Could not connect to database.");
	mysql_select_db("testlogin");

	$query = mysql_query("SELECT * FROM users WHERE username='".$name."'");
	$numrows = mysql_num_rows($query);

	if($numrows != 0){
		while($row = mysql_fetch_assoc($query)){
			$dbname = $row['username'];
			$dbpassword = $row['password'];
		}

		if($name==$dbname){
			if($password==$dbpassword){
				echo "You are in!";
			}else{
				echo "Wrong password!";
			}
		}else{
			echo "Username not found in database.";
		}
	}else{
		echo "This name is not registered";
	}
}else{
	echo "You must type a username and password!";
}

?>