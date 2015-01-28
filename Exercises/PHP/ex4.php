
<?php

$incomplete = 0;

if(empty($_POST['name']))
{
  echo "Please enter your name. <br/>";
  $incomplete = 1;
} else {
  $incomplete = 0;
}

if(empty($_POST['email']))
{
  echo "Please enter your e-mail address. <br/>";
  $incomplete = 1;
} else {
  $incomplete = 0;
}

if(empty($_POST['password']))
{
  echo "Please enter your password. <br />";
  $incomplete = 1;
} else {
  $incomplete = 0;
}

if(empty($_POST['confpass']))
{
  echo "Please confirm your password. <br/>";
  $incomplete = 1;
} else {
  $incomplete = 0;
  if($_POST['password'] != $_POST['confpass'])
  {
    echo "Your passwords do not match. <br />";
    $incomplete = 1;
  }
}

if(!isset($_POST['numAppliances']))
{
  echo "You must select one option. <br />";
  $incomplete = 1;
} else {
  $incomplete = 0;
}

if(empty($_POST['bestAppliance']))
{
  echo "You must select one or more appliances <br />";
  $incomplete = 1;
} else {
  $incomplete = 0;
}

if ($incomplete == 0)
  echo "Your form has been submitted successfully.";
?>

<h1>Registration Form</h1>
<form action="ex4.php" method="post">
  Name: <input type="text" id="name" name="name" size="20" maxlength="50"/><br />
  Email: <input type="text" id="email" name="email" size="20" maxlength="50"/><br />
  Password: <input type="password" id="password" name="password" size="20" maxlength="50"/><br />
  Confirm Password: <input type="password" id="confpass" name="confpass" size="20" maxlength="50"/><br />
  Number of appliances owned: <input type="radio" name="numAppliances" value="zero"> 0
                              <input type="radio" name="numAppliances" value="one"> 1
                              <input type="radio" name="numAppliances" value="two"> 2
                              <input type="radio" name="numAppliances" value="three"> 3
                              <input type="radio" name="numAppliances" value="more"> 3+
  <br />
  What is the most useful appliance that you own?
  <select name="bestAppliance">
    <option value="TV">Television</option>
    <option value="laptop">Laptop</option>
    <option value="refrigerator">Refrigerator</option>
    <option value="dishwasher">Dishwasher</option>
  </select>
  <input type="submit" id="submit" value="Submit" />
</form>