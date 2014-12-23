
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
      email, gender, age, comments, password)
      VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments',
            '$password')");
      
      $registered = mysqli_affected_rows($dbc);
      
      echo $registered." rows affected.";
      
    } else {
      echo "<p style='color: red;'>All values have not been filled.</p>";
    }
} else {
  echo "No form has been submitted.";
}

?>