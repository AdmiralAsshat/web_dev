<?php

// check if user submitted form
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // connect to database
  include('connection.php');
  
  // create an array for errors
  $errors = array();
  
  // check for email address
  if (empty($_POST['email']))
  {
    $errors[] = 'No email address entered.';
  } else {
    $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
  }
  
  // check current password
  if (empty($_POST['pass']))
  {
    $errors[] = 'No current password entered.';
  } else {
      $p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
  }
  
  // check for new password, cmp w/ confirmed
  if (!empty($_POST['newpass']))
  {
    if ($_POST['newpass'] != $_POST['confirmpass'])
    {
      $errors[] = "Passwords don't match!";
    } else {
        $np = mysqli_real_escape_string($dbc, trim($_POST['newpass']));
    }
  } else {
    $errors[] = "No new password entered.";
  }
  
  // Only proceed if no errors
  if (empty($errors))
  {
    // check right email/pass combination
    $q = "SELECT id FROM users WHERE (email='$e' AND password='$p')";
    $r = mysqli_query($dbc, $q);
    $num = mysqli_num_rows($r);
    
    // get user id
    if ($num == 1)
    {
      $row = mysqli_fetch_array($r, MYSQLI_NUM);
      
      // Make the UPDATE query
      $q = "UPDATE users SET password='$np' WHERE id='$row[0]'";
      $r = mysqli_query($dbc, $q);
      
      // If everything worked properly
      if (mysqli_affected_rows($dbc) == 1)
      {
        // OK message confirmation
        echo "Password updated successfully.";
      } else {
          echo "Your password could not be changed due to a system error.";
      }
      
      // close the connection to db
      mysqli_close($dbc);
    } else {
        echo "The email and password do not match our records.";
    }
  } else {
      echo "Error! The following error(s) occurred: <br />";
      // Loop through error array
      foreach($errors as $msg)
      {
        echo $msg."<br />";
      }
  }
  
} else {
  echo "Please use the form.";
}


?>

<h1>Change Password</h1>
<form action="password.php" method="post">
  <p>Email: <input type="text" name="email" size="20" maxlength="50" value="<?php if (isset($_POST['email'])){ echo $_POST['email'];} ?>" /></p>
  <p>Current Password: <input type="password" name="pass" sixe ="10" maxlength="50" value="<?php if (isset($_POST['pass'])){ echo $_POST['pass'];} ?>" /></p>
  <p>New Password: <input type="password" name="newpass" sixe ="10" maxlength="50" value="<?php if (isset($_POST['newpass'])){ echo $_POST['newpass'];} ?>" /></p>
  <p>Confirm New Password: <input type="password" name="confirmpass" sixe ="10" maxlength="50" value="<?php if (isset($_POST['confirmpass'])){ echo $_POST['confirmpass'];} ?>" /></p>
  <p><input type="submit" name="submit" value="Change Password"/></p>
</form>