var num1 = parseInt(prompt("Please enter the first number: "));
var num2 = parseInt(prompt("Please enter the second number: "));

document.write("First number: "+num1+"<br />");
document.write("Second number: "+num2+"<br />");

if (num1 == num2)
{
  document.write(num1+" and "+num2+" are equal");
} else if (num1 > num2)
{
  document.write(num1+" is greater than "+num2);
} else {
  document.write(num1+" is less than "+num2);
}