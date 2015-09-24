<?php

$name = $_GET['name'];
$password = $_GET['password'];

if($name && $password){
	mysql_connect("localhost","root","") or die("Could not connect to database.");
	mysql_select_db("testlogin");

	$query = mysql_query("SELECT * FROM users WHERE name='".$name."'");
	$numrows = mysql_num_rows($query);

	if($numrows != 0){
		while($row = mysql_fetch_assoc($query)){
			$dbname = $row['name'];
			$dbpassword = $row['password'];
		}

		if($name==$dbname){
			if($password==$dbpassword){
				
			}
		}
	}
}else{
	echo "You must type a username and password!";
}

?>