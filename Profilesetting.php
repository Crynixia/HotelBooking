<?php
	include "db_connect.php";
	session_start();
	
	if(isset($_SESSION['userID'])){
		$id = $_SESSION['userID'];
		$sql = "SELECT * FROM user WHERE userID = $id";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_assoc($result);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="new.css">
  	<link rel="stylesheet" type="text/css" href="profilesetting.css">
	<link rel="stylesheet" href="style.css">
	<title>Hotel - My Profile</title>
</head>
<body>
<ul class="ulNav">
    <li class="liNav"><a class="active" href="homepage.php">Home</a></li>
    <li class="liNav"><a href="aboutus.php">About Us</a></li>
    <li class="liNav"><a href="rooms.php">Rooms and Services</a></li>
    <li class="liNav"><a href="daboutus.php">Gallery</a></li>
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
        <h1 style="font-size:60px"><?php echo $row["username"];?> Profile</h1>
    </div>
</div> 
<br><br><br>
	<center>
		<div class="image-cropper">
			<img src="pics/doubleRoom.jpg" class="pic">
		</div><br><br>
		
	</center>

	<div style="margin-left:17%;padding:1px 16px;height:1000px;">
		
		<table id="customers">
			<tr>
				<th>First Name</th>
				<td><?php echo $row["fName"];?></td>
			</tr>

			<tr>
				<th>Last Name</th>
				<td><?php echo $row["lName"];?></td>
			</tr>

			<tr>
				<th>Phone Number</th>
				<td><?php echo $row["phone"];?></td>
			</tr>

			<tr>
				<th>User Name</th>
				<td><?php echo $row["username"];?></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><?php echo $row["password"];?></td>
			</tr>

			<tr>
				<th>Gender</th>
				<td><?php echo $row["gender"];?></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><?php echo $row["email"];?></td>
			</tr>
		</table><br>
		<a href="customeredit.php"><button style="margin-left: 800px;">Edit</button></a>
	</div>	

<footer>
    MoonLine Hotel®
</footer>

</body>
</html>