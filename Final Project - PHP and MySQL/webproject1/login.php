
<?php

error_reporting(0);

include("connection.php");

// grab values from login form; escape values first
/* UNSECURE:
$login_email = $_POST['login_email'];
Vulnerable to SQL Injection.
*/
$login_email = mysqli_real_escape_string($dbc,trim($_POST['login_email']));
$login_password = mysqli_real_escape_string($dbc, trim($_POST['login_password']));

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
      $dbfirstname = $row['first_name'];
    }
    
    if($login_email == $dbemail)
    {
      if($login_password == $dbpass)
      {
        echo "<p>Login successful. Welcome, ".$dbfirstname."!</p>";
        include("navbar.php");
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