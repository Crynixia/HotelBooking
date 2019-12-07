<!DOCTYPE html>
<html>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="new.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Signup</title>
</head>
<body>
<ul class="ulNav">
    <li class="liNav"><a class="active" href="homepage.php">Home</a></li>
    <li class="liNav"><a href="aboutus.php">About Us</a></li>
    <li class="liNav"><a href="rooms.php">Rooms and Services</a></li>
    <li></li>
    <?php
        if(isset($_SESSION['uname'])):?>

        <li style="float:right"> <a href="logout.php">Logout</a></li>
            <div class="dropdown" style="float:right">
                <button class="dropbtn"><?php echo $_SESSION['uname'] ."'s Profile";?></button>
                <div class="dropdown-content">
                    <a href="Profilesetting.php">Profile Setting</a>
                    <a href="Reservation.php">My Reservation</a>
                </div>
            </div>


        <?php
        else:?>

        <li style="float:right"><a class="active" href="login.php">Log In</a></li>
        <li style="float:right"><a class="active" href="Signup.php">Sign Up</a></li>

        <?php
        endif;
        ?>
</ul>

<div class="containerText">
    <img src="pics/roomHeader.jpg" alt="Hotel Homepage" style="width: 100%; height : 13%; filter: brightness(40%);">
    <div class="centeredText">
        <h1 style="font-size:60px">Sign Up</h1>
    </div>
</div> 
<br>

    	<center>
    		<h1>Join Our Membership</h1>
    		<h2>Every member gets the benefit right away</h2>
    	</center>
      <form action="client_info.php" method="POST">
        <center>
          <fieldset class="fieldset2">
            <input class="input" type="text" name="fname" placeholder="First Name" required><br><br>
            <input class="input" type="text" name="lname" placeholder="Last Name" required><br><br>
            <input class="input" type="text" name="phone" placeholder="Phone Number" required><br><br>
            <input class="input" type="text" name="uname" placeholder="User Name" required><br><br>
            <input class="input" type="password" name="pass" placeholder="Password" required><br><br>
            <input class="input" type="text" name="gender" placeholder="Gender" required><br><br>
            <input class="input" type="text" name="email" placeholder="Email" required><br><br>
            <button name="submit" class="button">Join Now</button>
            </fieldset>
        </center>
      </form>
</body>
</html>