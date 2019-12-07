<?php
	include "db_connect.php";
	session_start();
	
	if(isset($_SESSION['userID'])){
		$id = $_SESSION['userID'];
		$sql = "SELECT * FROM user WHERE userID = $id";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_assoc($result);
    }
    if(isset($_SESSION['userID'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="custEditCSS.css">
  	<link rel="stylesheet" type="text/css" href="profilesetting.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Edit Profile</title>
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
        <h1 style="font-size:60px">Edit Profile</h1>
    </div>
</div> 
<br><br><br>

    <form method="POST">
        <center>
          <fieldset class="fieldset">
            <table border="1" style="padding: 2px;">
                <tr><td>First Name</td><td><input class="input" type="text" name="fname" value="<?php echo $row["fName"];?>"></td></tr>
                <tr><td>Last Name</td><td><input class="input" type="text" name="lname" value="<?php echo $row["lName"];?>"></td></tr>
                <tr><td>Phone Number</td><td><input class="input" type="text" name="phone" value="<?php echo $row["phone"];?>"></td></tr>
                <tr><td>Username</td><td><input class="input" type="text" name="uname" value="<?php echo $row["username"];?>"></td></tr>
                <tr><td>Password</td><td><input class="input" type="password" name="pass" value="<?php echo $row["password"];?>"></td></tr>
                <tr><td>Gender</td><td><input class="input" type="text" name="gender" value="<?php echo $row["gender"];?>"></td></tr>
                <tr><td>Email</td><td><input class="input" type="text" name="email" value="<?php echo $row["email"];?>"></td></tr>
            </table>
            <button name="submit" class="button">Save</button>
            </fieldset>

        </center>
    </form>
    <?php
    	if (isset($_POST["submit"])){
			$firstname = $_POST ["fname"]; //value from php
			$lastname = $_POST ["lname"];
			$phone = $_POST ["phone"];
			$username = $_POST["uname"];
			$password = $_POST["pass"];
			$gender = $_POST["gender"];
			$email = $_POST["email"];

			$query2 = mysqli_query($connect,"UPDATE user SET fName ='$firstname' , lName = '$lastname' , phone = '$phone' , username = '$username' , password = '$password', gender = '$gender', email = '$email' WHERE userID = '$id'");
			header ("location: Profilesetting.php");

    	}
    ?>
</body>
</html>
<?php
    exit();
    }else
    header("location: login.php");
    
?>