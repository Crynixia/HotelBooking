<!DOCTYPE html>
<html>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="new.css">
	<title>Signup</title>
</head>
<body>
    <div class="header">
        <a href="homepage.html"><img src="pics/icon.jpg" ></a>
        <a class="nav" href="homepage.php">Home</a>
        <a class="nav" href="#">Kimak</a>
        <a class="nav" href="#">Web</a>
    </div>

    	<center>
    		<h1>Join Our Membership</h1>
    		<h2>Every member gets the benefit right away</h2>
    	</center>
      <form action="client_info.php" method="POST">
        <center>
          <fieldset class="fieldset">
            <input class="input" type="text" name="fname" placeholder="First Name" required><br><br>
            <input class="input" type="text" name="lname" placeholder="Last Name" required><br><br>
            <input class="input" type="text" name="phone" placeholder="Phone Number" required><br><br>
            <input class="input" type="text" name="uname" placeholder="User Name" required><br><br>
            <input class="input" type="password" name="pass" placeholder="Password" required><br><br>
            <button name="submit" class="button">Join Now</button>
            </fieldset>
        </center>
      </form>
</body>
</html>