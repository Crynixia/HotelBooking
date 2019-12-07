<?php
    include "db_connect.php";
    session_start();
    $id = $_SESSION['uname'];
    // $id3 = $_SESSION["bookingID"];
        
        if(isset($_SESSION['uname'])){
            
            $sql = "SELECT * FROM user where userID='$id'";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="Adminstyle.css">
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
    <li class="liNav"><a class="active" href="adminHome.php">Home</a></li>
    <?php
        if(isset($_SESSION['uname'])):?>

        <li style="float:right"> <a href="adminlogout.php">Logout</a></li>

        <?php
        else:?>

        <?php
        endif;
        ?>
</ul>

<div class="containerText">
    <img src="pics/roomHeader.jpg" alt="Hotel Homepage" style="width: 100%; height : 13%; filter: brightness(40%);">
    <div class="centeredText">
        <h1 style="font-size:60px">Admin Homepage</h1>
    </div>
</div> 
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-side">&nbsp;</div>
        <div class="col-center">
            <fieldset>
                <?php
                    if(isset($_SESSION['uname'])){
                        $sql2 = "SELECT * FROM booking";
                        $result2 = mysqli_query($connect,$sql2);
                        $count2 = mysqli_num_rows($result2);    //Count Bookings that were made
                        $row2 = mysqli_fetch_array($result2);
                        $sql3 = "SELECT * FROM user";
                        $result3 = mysqli_query($connect,$sql3);
                        $count3 = mysqli_num_rows($result3);   //Count User
                        $row3 = mysqli_fetch_array($result3);
                        $sql4 = "SELECT * FROM user JOIN booking ON user.userID=booking.userID";
                        $result4 = mysqli_query($connect,$sql4);
                        $row4 = mysqli_fetch_array($result4);

                        $sum=0;
                        while ($row2 = mysqli_fetch_array($result2)){
                            $totPrice = $row2['totalPrice'];
                            $sum += $totPrice;
                        }

                        $roomName = $row2['roomName'];
                        $roomDesc = $row2['roomDesc'];
                        $userID = $row3['userID'];
                        $username = $row3['username'];
                    }
                ?>
                <table>
                    <tr>
                        <td>Total Users : <?php echo $count3 ?></td>
                        <td>Total Bookings That Were Made : <?php echo $count2 ?></td>
                        <td>Total Earnings : RM<?php echo $sum ?></td>

                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="col-side">&nbsp;</div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
        <table id="customers">
		<tr>
            <th>User ID</th>
            <th>User Name</th>
			<th>Check In</th>
			<th>Check Out</th>
			<th>Days</th>
			<th>Room Name</th>
			<th>Price (RM)</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		foreach ($result4 as $row4) {
            echo "<tr>";
                echo "<td>" .$row4["userID"] ."</td>";
                echo "<td>" .$row4["username"] ."</td>";
				echo "<td>" .$row4["checkIn"] ."</td>";
				echo "<td>" .$row4["checkOut"] ."</td>";
				echo "<td>" .$row4["hari"] ."</td>";
				echo "<td>" .$row4["roomName"] ."</td>";
				echo "<td>" .$row4["totalPrice"] ."</td>";
				echo "<td><a href=\"adminUserRoomDetail.php?id=" .$row4["bookingID"] . "\">Detail</a></td>";
				echo "<td><a href=\"adminDeleteRoom.php?id=" .$row4["bookingID"] . "\">Delete</a></td>";
			echo "</tr>";
		}
		?>
		
	</table>
        </div>
        <div class="col-sm-6">
        <table id="customers">
		<tr>
            <th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>phone</th>
			<th>Username</th>
			<th>Action</th>
		</tr>
		<?php
		foreach ($result3 as $row3) {
            echo "<tr>";
                echo "<td>" .$row3["userID"] ."</td>";
				echo "<td>" .$row3["fName"] ."</td>";
				echo "<td>" .$row3["lName"] ."</td>";
				echo "<td>" .$row3["phone"] ."</td>";
				echo "<td>" .$row3["username"] ."</td>";
				echo "<td><a href=\"deleteUser.php?id=" .$row3["userID"] . "\">Delete</a></td>";
			echo "</tr>";
		}
		?>
		
	</table>
        </div>
    </div>
</div>

<script>
</script>
&nbsp;


</body>
</html>
<?php
    exit();
    }else
        echo"salah masuk";
    
?>