
<?php

define('young','You are too young.');
define('mature','You are mature enough.');
define('old','You are too old.');

// Create associative array
$users = array("John" => "58", "Bob" => "35", "Fred" => "28",
              "Susan" => "12", "Cathy" => "37", "Ethyl" => "84");

// Loop through array
foreach ($users as $name => $age)
{
  // echo "DEBUG: ".$name.": ".$age."<br />";
  if ($age < 18)
  {
    echo "Hey, ". $name .". You are ". $age ." years old. ". young ."<br />";
  } else if ($age <= 50) {
    echo "Hi, ". $name .". You are ". $age ." years old. ". mature ."<br />";
  } else {
    echo "Hello, ". $name .". You are ". $age ." years old. ". old ."<br />";
  }
}

?>