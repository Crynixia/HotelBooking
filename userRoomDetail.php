<?php
    include "db_connect.php";
    session_start();
    $id = $_SESSION['userID'];
         
        if(isset($_SESSION['uname'])){
            $sql = "SELECT * FROM user where userID='$id'";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);
        }
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql2 = "SELECT * FROM booking WHERE bookingID='$id'";
            $result2 = mysqli_query($connect,$sql2);
            $row2 = mysqli_fetch_array($result2);
        
            
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
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
        <h1 style="font-size:60px">Details</h1>
    </div>
</div> 
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-side">&nbsp;</div>
        <div class="col-center">
            <fieldset>
                <h1><?php echo $row2['roomName']; ?></h1>
                
                <h5><?php echo $row2['hari']; ?> nights, Check-in date :<?php echo $row2['checkIn']; ?> Check-out date :<?php echo $row2['checkOut']; ?></h5>
                <br>
                <p>First name : <b><?php echo $row['fName'] ?></b></p>
                <p>Last name : <b><?php echo $row['lName'] ?></b></p>
                <p>Phone Number : <b><?php echo $row['phone']; ?></b></p>
                <p>Email : <b><?php echo $row2['roomName']; ?></b></p>
                <br><br>
        
                <p>Room name <b><?php echo $row2['roomName']; ?></b></p>
                <p>Room desc <b><?php echo $row2['roomDesc']; ?></b></p>
                <p>Total price: RM <?php echo $row2['totalPrice']; ?></p>
                <br>
                <a href="Reservation.php"><button class="buttonBooking">Back to My Reservation</button></a>
            </fieldset>
        </div>
        <div class="col-side">&nbsp;</div>
    </div>
</div>


<script>
</script>
&nbsp;
<footer>
    MoonLine Hotel®
</footer>

</body>
</html>
<?php
    exit();
    }else
        echo"salah masuk";
    
?>