
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
    } else {
      echo "All values have not been filled.";
    }
} else {
  echo "No form has been submitted.";
}

?>