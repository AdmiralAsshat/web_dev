
<?php

// Prevent users from running delete.php manually
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include('connection.php');
  
  $id_user= mysqli_real_escape_string($dbc, trim($_POST['user_id']));
  
  mysqli_query($dbc, "DELETE FROM users WHERE id='$id_user'");
  
  echo "The user has been successfully deleted.";
  
} else {
    echo "Please Login";
}

?>

<h3>Are you sure you want to delete this user?</h3>
<form method="post" action="delete.php">
  <p>User ID:<input type='text' name='user_id' value="<?php if (!empty($_GET['user_id'])) { echo $_GET['user_id'];} ?>"/></p>
  <p>First Name:<input type='text' name='first_name' value="<?php if (!empty($_GET['fname'])) { echo $_GET['fname'];} ?>"/></p>
  <p>Last Name:<input type='text' name='last_name' value="<?php if (!empty($_GET['lname'])) { echo $_GET['lname'];} ?>"/></p>
  <p><input type='submit' name='submit' value='Yes' /></p>
  <p><a href="output.php">Go Back</a></p>
</form>