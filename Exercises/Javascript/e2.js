students = ["Jimmy", "Susie", "Daniel", "Denise", "Stewie"]
vegetables = ["carrot","cucumber","celery","potato"];

// Wrote function to accept a delimiter so that I can specify a comma or newline at call
function display_students(delimiter)
{
  for (var i in students)
  {
    document.write(students[i]+delimiter);
  }
  document.write("<br />");
}

function display_veggies(delimiter)
{
  for(var j in vegetables)
  {
    document.write(vegetables[j]+delimiter);
  }
  document.write("<br />");
}

//1. Display the elements in students array in new lines.
display_students("<br />");

//2. Sort the students array in alphabetical order and display the elements separated by commas.
students.sort();
display_students(",");

/*3. Remove the first element from the sorted students array and display the elements separated by
commas. */
students.shift();
display_students(",");

//4. Reverse the students array and display the elements separated by commas.
students.reverse();
display_students(",");
document.write("<br />")

//5. Display the elements in vegetables array in new lines.
display_veggies(",");

// 6. Remove the last element from the vegetables array and display them separated by spaces.
vegetables.pop();
display_veggies(",");

// 7. Join the two arrays and display the elements separated by commas.
third_array = students.concat(vegetables);
for(var item in third_array)
{
  document.write(third_array[item]+",");
}
document.write("<br />"+"<br />")

//8. Add a student name at the 3rd position of the new joined array and display the elements separated by commas
third_array.splice(2,0,"Steve");
for(var item in third_array)
{
  document.write(third_array[item]+",");
}