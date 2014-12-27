
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include('connection.php');
  
  $id_now= $_POST['userid'];
  $new_email = $_POST['xemail'];
  $new_fname = $_POST['firstname'];
  $new_lname = $_POST['lastname'];
  
  $q = "UPDATE users SET first_name='$new_fname', last_name='$new_lname',  email='$new_email' WHERE id='$id_now'";
  
  $r = mysqli_query($dbc, $q);
  
  if(mysqli_affected_rows($dbc) == 1)
  {
    echo "The user info has been updated successfully.";
  } else {
      echo "Error! Something went wrong...";
  }
}

?>

<h1>Edit User</h1>
<form action="edit_user.php" method="post">
  <p><input type="hidden" name="userid" size="20" maxlength="50" value="<?php if(!empty($_GET['user_id'])) { echo $_GET['user_id'];} ?>"</p>
  <p>First Name: <input type="text" name="firstname" size="20" maxlength="50" value="<?php if(!empty($_GET['fname'])) { echo $_GET['fname'];} ?>"</p>
  <p>Last Name: <input type="text" name="lastname" size="20" maxlength="50" value="<?php if(!empty($_GET['lname'])) { echo $_GET['lname'];} ?>"</p>
  <p>Email: <input type="text" name="xemail" size="20" maxlength="50" value="<?php if(!empty($_GET['lemail'])) { echo $_GET['lemail'];} ?>"</p>
  <p><input type="submit" name="submit" value="Save Changes" /></p>
</form>

<a href="output.php">See Records</a>