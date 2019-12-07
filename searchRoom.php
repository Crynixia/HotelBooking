
<?php
    include "db_connect.php";
    session_start();
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
    <li class="liNav"><a href="Reservation.php">My Reservation</a></li>
    <li class="liNav"><a href="dsdsdsds.php">Gallery</a></li>
    <?php
        if(isset($_SESSION['uname'])):?>

        <li style="float:right"> <a href="logout.php">Logout</a></li>
        <li style="float:right"> <a href="Profilesetting.php"><?php echo $_SESSION['uname'] ."'s Profile";?></a></li>

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
        <h1 style="font-size:60px">Rooms and Services</h1>
    </div>
</div> 
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-side">&nbsp;</div>
        <div class="col-center">
            <table style="width: 100%">
            <tr>
            <?php   
                if(isset($_POST['submit'])){
                    $room = $_POST["roomName"];
                    $person = $_POST["roomPerson"];
                    
                    $sql = "SELECT * FROM hotelroom where roomPerson='$person' OR roomName='$room'"; 
                    $result = mysqli_query($connect,$sql); 
                    if(mysqli_num_rows($result) > 0)
                    {
                        while ($row = mysqli_fetch_array($result))
                        {
                            $imageRoom = $row['image'];
                            $roomName = $row['roomName'];
                            $roomDesc = $row['roomDesc'];
                            $price = $row['price'];
                            $roomID = $row['roomID'];
                            
                            echo "<td>";
                            echo "<div class="."card".">";
                            echo"<img src=".$imageRoom." style="."width:100%".">";
                            echo "<h1>".$roomName."</h1>";
                            echo "<p class="."titleCard".">".$roomDesc."</p>";
                            echo "Price per night : RM" .$price;
                            echo "<a href="."roomDetails.php?id=".$roomID."><p><button class="."buttonCard".">Details</button></p></a>";
                            echo "</div>";
                            echo "</td>";
                        }  
                    }
                }
            ?>        
            </tr>    
            </table>
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