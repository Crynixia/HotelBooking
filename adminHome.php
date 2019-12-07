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
    <li class="liNav"><a href="daboutus.php">Gallery</a></li>
    <?php
        if(isset($_SESSION['uname'])):?>

        <li style="float:right"> <a href="logout.php">Logout</a></li>
        <li style="float:right"> <a href="logout.php"><?php echo $_SESSION['uname'] ."'s Profile";?></a></li>

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