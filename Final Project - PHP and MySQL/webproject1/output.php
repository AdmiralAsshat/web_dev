
<?php

  include('connection.php');
  
  // Define query
  $q = "SELECT last_name, first_name, email, DATE_FORMAT(registration_date, '%M %d, %Y %T') AS dr, id FROM users ORDER BY registration_date ASC";
  // $q = "SELECT last_name, first_name, email, registration_date, id FROM users ORDER BY registration_date ASC";
  
  $r = mysqli_query($dbc, $q);
  
  // Count number of returned rows
  $num = mysqli_num_rows($r);
  
  // Display results
  if ($num > 0)
  {
    echo "<p><a href='orderbyname.php'>Order by Name</a></p>";
    
    echo "<p>There are $num registered users.</p>";
    
   //format output
    echo "<table align='center' border='1' cellspacing='3' cellpadding='3' width='75%'>
    <tr>
      <td align='left'><b>Edit</b></td>
      <td align='left'><b>Delete</b></td>
      <td align='left'><b>Name</b></td>
      <td align='left'><b>Email</b></td>
      <td align='left'><b>Date Registered</b></td>
    </tr>";
    
    // Create associative array with registration_date, last_name, first_name, and email
    while($row = mysqli_fetch_array($r))
    {
      echo "<tr>
              <td align='left'><a href='edit_user.php?user_id=".$row['id']."'>Edit</a></td>
              <td align='left'><a href='delete_user.php?user_id=".$row['id']."'>Delete</a></td>
              <td align='left'>" . $row['last_name'] . ", " .$row['first_name']."</td>
              <td align='left'>" . $row['email'] . "</td>
              <td align='left'>" . $row['dr'] . "</td>
            </tr>";
    }
    
      echo "</table>";
      
  } else {
      echo "There are currently no registered users.";
  }
    
    mysqli_close($dbc);

?>