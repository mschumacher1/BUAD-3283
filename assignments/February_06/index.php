<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BUAD 3283-Form</title>
  </head>
  <body>
<h1>Form</h1>
  <p><span class="error">* required field.</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
    Name: <input type="text" name="name" value>
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Phone: <input type="text" name="Phone" value>
    <span class="error"><?php echo $PhoneErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</h1>
<h2>
<?php
// Start the session
session_start();
// Set session variables
$_SESSION["number"] = "5076123345";
$_SESSION["location"] = "MN";
echo "Session variables are set.";
?>
<?php
$email = "email@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>
</body>
</html>
