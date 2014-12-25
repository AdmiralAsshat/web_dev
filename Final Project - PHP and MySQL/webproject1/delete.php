
<?php

// Prevent users from running delete.php manually
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include('connection.php');
  
  $getemail = mysqli_real_escape_string($dbc, trim($_POST['getemail']));
  
  mysqli_query($dbc, "DELETE FROM users WHERE email='$getemail'");
  
  echo "The user has been successfully deleted.";
  
} else {
    echo "Please Login";
}

?>

<h3>Type the email of the user to be deleted</h3>
<form method="post" action="delete.php">
  <p><input type='text' name='getemail' /></p>
  <p><input type='submit' name='submit' value='Delete This User' /></p>
</form>