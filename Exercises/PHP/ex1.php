
<?

/* Create a PHP application with four different variables. You need to store integer, float and string values in
the first three variables and the fourth variable should be an array which stores the details of data types.
Use the gettype function to display the data type of each variable. Use the var_dump function to get the
data type and value of the array.*/

$anInt = 50;
$aFloat = 3.5;
$aString = "Word or phrase";

$anArray = array($anInt, $aFloat, $aString);

echo "The type of $anInt is ".gettype($anInt)."<br />";
echo "The type of $aFloat is ".gettype($aFloat)."<br />";
echo "The type of $aString is ".gettype($aString)."<br />";

echo "<br />Array dump:<br />";
echo var_dump($anArray);

?>