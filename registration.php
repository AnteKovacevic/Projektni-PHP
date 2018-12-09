<form action="action_page.php" method="POST">
  <div class="container">
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="lastname"><b>Last name</b></label>
    <input type="text" placeholder="Enter last name" name="lastname" required>

    <label for="dateofbirth"><b>Date of birth</b></label>
    <input type="date" placeholder="Enter date of birth" name="dateofbirth" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

<label for="country"><b>Country</b></label>
<select name="country" required>
<option value="">Country...</option>
<?php
  include("server.php");
  $query = "SELECT * FROM countries";
  $result = @mysqli_query($db, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
?>

</select>

    <label for="city"><b>City</b></label>
    <input type="city" placeholder="Enter city" name="city" required>

    <label for="address"><b>Street address</b></label>
    <input type="address" placeholder="Enter street address" name="address" required>

    <center><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></center>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="index.php?menu=7">Sign in</a>.</p>
  </div>
</form> 
