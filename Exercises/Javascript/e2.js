students = ["Jimmy", "Susie", "Daniel", "Denise", "Stewie"]
vegetables = ["carrot","cucumber","celery","potato"];

// Wrote function to accept an array and delimiter so that I can specify a comma or newline at call
function display_array(array,delimiter)
{
  for (var i in array)
  {
    document.write(array[i]+delimiter);
  }
  document.write("<br />"+"<br />");
}


//1. Display the elements in students array in new lines.
display_array(students,"<br />");

//2. Sort the students array in alphabetical order and display the elements separated by commas.
students.sort();
display_array(students,",");


/*3. Remove the first element from the sorted students array and display the elements separated by
commas. */
students.shift(); //Remove first value in array and reorder
display_array(students,",");


//4. Reverse the students array and display the elements separated by commas.
students.reverse();
display_array(students,",");


//5. Display the elements in vegetables array in new lines.
display_array(vegetables,",");


// 6. Remove the last element from the vegetables array and display them separated by spaces.
vegetables.pop(); // "Pop" off last value in array.
display_array(vegetables,",");


// 7. Join the two arrays and display the elements separated by commas.
third_array = students.concat(vegetables);
display_array(third_array,",");


//8. Add a student name at the 3rd position of the new joined array and display the elements separated by commas
third_array.splice(2,0,"Steve"); // Insert value at array index.
display_array(third_array,",");