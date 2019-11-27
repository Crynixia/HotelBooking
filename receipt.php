<?php
    include "db_connect.php";
    session_start();

        if(isset($_SESSION['uname'])){
            $id = $_SESSION['userID'];
            $sql = "SELECT * FROM user where userID='$id'";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_assoc($result);
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
    <li class="liNav"><a href="sdsdsds.php">About Us</a></li>
    <li class="liNav"><a href="rooms.php">Rooms and Services</a></li>
    <li class="liNav"><a href="dsdsdsds.php">Gallery</a></li>
    <?php
        if(isset($_SESSION['uname'])):?>

        <li style="float:right"> <a href="logout.php">Logout</a></li>
        <li style="float:right"> <a href="profile.php"><?php echo $_SESSION['uname'] ."'s Profile";?></a></li>

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
        <h1 style="font-size:60px">Receipt</h1>
    </div>
</div> 
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-side">&nbsp;</div>
        <div class="col-center">
            <fieldset>
                <h1>Single Room <!--Insert php codes for room name--></h1>
                
                <h5><!--insert php codes berapa hari stay--> nights, Check-in date :<!--check-out php code--> Check-out date :<!--check-out php code--></h5>
                <br>
                <p>First name : <b><?php echo $row['fName'] ?></b></p>
                <p>Last name : <b><?php echo $row['lName'] ?></b></p>
                <p>Phone Number : <b><?php echo $row['phone'] ?></b></p>
                <p>Email : <b><!--insert php codes here--></b></p>
                <br><br>
                <p>Room name <!--insert php codes here--></p>
                <p>Room desc <!--insert php codes here--></p>
                <p>Room facilities <!--insert php codes here--></p>
                <p>Total price (hari x price per night) : RM <!--insert php codes here--></p>
                <br>
                <a href="homepage.php"><button class="buttonBooking">Back to Home</button></a>
            </fieldset>
        </div>
        <div class="col-side">&nbsp;</div>
    </div>
</div>


<script>

</script>
&nbsp;
<footer>
    "Ehem ehem eheeem" - Aqil Sahar
</footer>

</body>
</html>
<?php
    exit();
    }else{
        echo"salah masuk";
    }
?>