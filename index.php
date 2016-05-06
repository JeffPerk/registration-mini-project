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
      <form action="process.php" method="post">
        <label>Username:</label>
        <input type="text" name="name" placeholder="Enter username" required="required">

        <label>UserEmail:</label>
        <input type="text" name="email" placeholder="Enter email" required="required">

        <label>UserPass:</label>
        <input type="text" name="pass" placeholder="Enter pass" required="required">

        <input type="submit" style="border-left-width: 5px;" name="signup" value="Sign Up">
      </form>
    </div>
  </body>
</html>

<?php
  include "process.php";

 ?>
