<html>
<head></head>
<body>

<h1> STK </h1>
<?php
include 'connect_to_database.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("location: profile.php"); // send to home page
   exit; 
}

?>

<form method="post" name="login" action="login_proccess.php">
<label for="name" class="labelname"> Username </label>
<input type="text" name="username" id="userid" required="required" /><br />
<label for="name" class="labelname"> Password </label>
<input type="password" name="password" id="passid" required="required"  /><br />
<input type="submit" name="submit" id="submit"  value="Login" />
</form>
</form>
</body>
</html>