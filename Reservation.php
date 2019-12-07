<?php
	include "db_connect.php";
    session_start();
	$id = $_SESSION['userID'];
	
	$sql = "SELECT * FROM booking WHERE userID='$id'";
	$result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    
    if(isset($_SESSION['userID'])){

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="new.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel - Homepage</title>
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
        <h1 style="font-size:60px">Reservation</h1>
    </div>
</div> 
<br><br><br><br><br>

	<div style="margin-left:17%;padding:1px 16px;height:1000px;">
	<table id="customers">
		<tr>
			<th>Check In</th>
			<th>Check Out</th>
			<th>Days</th>
			<th>Room Name</th>
			<th>Price (RM)</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		foreach ($result as $row) {
			echo "<tr>";
				echo "<td>" .$row["checkIn"] ."</td>";
				echo "<td>" .$row["checkOut"] ."</td>";
				echo "<td>" .$row["hari"] ."</td>";
				echo "<td>" .$row["roomName"] ."</td>";
				echo "<td>" .$row["totalPrice"] ."</td>";
				echo "<td><a href=\"userRoomDetail.php?id=" .$row["bookingID"] . "\">Detail</a></td>";
				echo "<td><a href=\"deleteRoom.php?id=" .$row["bookingID"] . "\">Delete</a></td>";
			echo "</tr>";
		}
		?>
		
	</table>
	</div>


<footer>
    MoonLine Hotel®
</footer>

</body>
</html>
<?php
    exit();
    }else
    header("location: login.php");
    
?>