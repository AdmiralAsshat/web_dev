<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // Process the form

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $comments = $_POST['comments'];
  $password = $_POST['password'];

    if(!empty($fname) && !empty($lname) && !empty($email) &&
      !empty($gender) && !empty($age) && !empty($comments)  &&
      !empty($password))
    {
      include('connection.php');
      
      mysqli_query($dbc, "INSERT INTO users(first_name, last_name,
      email, gender, age, comments, password, registration_date)
      VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments',
            '$password', NOW())");
      
      $registered = mysqli_affected_rows($dbc);
      
      echo "<h3>You have registered successfully. Please login <a href='index.php'>here</a>.</h3>";
      
    } else {
      echo "<p style='color: red;'>All values have not been filled.</p>";
    }
} else {
  echo "<h3>Please fill out the form below.</h3>";
}

?>

<html>
<head>
<title>Web Form</title>
</head>

<body>

	<form action="userform.php" method="post">
		<p>First Name: <input type="text" name="fname" size="20" maxlength="50" /></p>
		<p>Last Name: <input type="text" name="lname" size="20" maxlength="50" /></p>
		<p>Email: <input type="text" name="email" size="20" maxlength="50" /></p>
		<p>Gender: <input type="radio" name="gender" value="M" /> Male
				<input type="radio" name="gender" value="F" /> Female</p>
		<p>Age: <select name="age">
					<option value="0-29">Under 30</option>
					<option value="30-60">Between 30 and 60</option>
					<option value="60+">Over 60</option>
				</select></p>
		<p>Comments:<textarea name="comments" rows="3" cols="40" maxlength="200"></textarea></p>
    <p>Password: <input type="password" name="password" maxlength="50"></p>
		<p><input type="submit" name="submit" value="submit" /></p>
	</form>
  
  <!-- <a href="output.php">Check all current records from database</a> -->
  <p><a href='index.php'>Go back to login form.</a></p>
</body>

</html>