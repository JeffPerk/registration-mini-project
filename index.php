<?php
  require 'connect.php';
  echo 'Connection established';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css" charset="utf-8">
  </head>
  <body>
    <div class="form-container">
      <h2>Registration Form</h2>
      <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="name" placeholder="Enter username" required="required">

        <label>UserEmail:</label>
        <input type="text" name="email" placeholder="Enter email" required="required">

        <label>UserPass:</label>
        <input type="password" name="pass" placeholder="Enter pass" required="required">

        <input type="submit" style="border-left-width: 5px;" name="signup" value="Sign Up">
      </form>
    </div>
  </body>
</html>
<?php
  $db = new Connection();

  if(isset($_POST['signup'])) {
    $user = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO users (user_name, user_email, user_pass) VALUES ('$user', '$email', '$pass')";
    $run = $db->insert($query);
  }


 ?>
