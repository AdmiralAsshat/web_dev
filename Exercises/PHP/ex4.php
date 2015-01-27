
<?php



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