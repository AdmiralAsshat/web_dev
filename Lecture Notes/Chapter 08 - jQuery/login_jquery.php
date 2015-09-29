<?php

$name = $_POST['phpname'];
$password = $_POST['phppassword'];

if($name && $password){
  echo "Logged in.";
}else{
  echo "Must supply username and password.";
}

?>