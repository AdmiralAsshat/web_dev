
<?php

error_reporting(0);

include("connection.php");

// grab values from login form
$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];

// Create query and buffer to hold return
$query = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$login_email."'");
$numrows = mysqli_num_rows($query);

// Verify that user filled out information via form
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if($numrows != 0) #Did the query find anything?
  {
    // Loop through results
    while($row = mysqli_fetch_array($query))
    {
      # Set vars from the database
      $dbemail = $row['email'];
      $dbpass = $row['password'];
    }
    
    if($login_email == $dbemail)
    {
      if($login_password == $dbpass)
      {
        echo "Login successful.";
      } else {
        echo "Your password is incorrect.";
      }
      
    } else {
      echo "Email not found in database.";
    }
  } else {
    echo "Invalid credentials. If you have not registered, please register below.";
  }
  
} else {
  echo "<h3>Please Login:</h3>";
}

?>

<html>

<head>
<title></title>
</head>

<body>

  
  <form method="post" action="login.php">
    <p>E-Mail: <input type="text" name="login_email" maxlength="50" /></p>
    <p>Password: <input type="password" name="login_password" maxlength="50" /></p>
    <p><input type="submit" value="Login" />
  </form>
  
  <a href="userform.php">Register Here</a>
  
</body>

</html>