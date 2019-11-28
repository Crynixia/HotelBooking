
<?php
    include "db_connect.php";
    session_start();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM hotelroom WHERE roomID='$id'";
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
        <h1 style="font-size:60px"><?php echo $row['roomName'] ?></h1>
    </div>
</div> 
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?php echo $row['image'] ?>"> <!--Image from database table "hotelroom"-->
        </div>
        <div class="col-sm-6">
            <!-- Room information from database table "hotelroom" codes-->
            <?php echo $row['roomName'] ?><br>
            <?php echo $row['roomDesc'] ?><br>
            <?php echo $row['services'] ?><br>
            <?php echo "RM" .$row['price']; ?><br><br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-center">
                    <form action="receipt.php?id= <?php echo $id; ?>" method="post">
                        <label for="lname">Services</label><!--edit laterz-->
                        <input class="inputBooking" type="text" id="services" name="services">

                        <label for="lname">Check In</label>
                        <input class="inputBooking" type="date" id="check_in" name="check_in">
                        <label for="lname">Check Out</label>
                        <input class="inputBooking" type="date" id="check_out" name="check_out">

                        <input class="inputBooking" type="submit" value="Booking">
                    </form>
                    </div>
                </div>
            </div>
        </div>
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