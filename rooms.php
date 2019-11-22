<?php
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
                    <td>
                        <div class="card">
                            <img src="pics/singleRoom.jpg" alt="Single Room" style="width:100%">
                            <h1>Single Room</h1>
                            <p class="titleCard">Description</p>
                            <p>Description 2</p>
                                <div style="margin: 24px 0;">
                                    <a class="linkCard" href="#"><i class="fa fa-dribbble"></i></a> 
                                    <a href="#"><i class="fa fa-twitter"></i></a>  
                                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                </div>
                            <a href="roomDetails.php"><p><button class="buttonCard">Details</button></p></a>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <img src="pics/doubleRoom.jpg" alt="Double Room" style="width:100%">
                            <h1>Double Room</h1>
                            <p class="titleCard">Description</p>
                            <p>Description 2</p>
                                <div style="margin: 24px 0;">
                                    <a class="linkCard" href="#"><i class="fa fa-dribbble"></i></a> 
                                    <a href="#"><i class="fa fa-twitter"></i></a>  
                                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                </div>
                            <a href="roomDetails.php"><p><button class="buttonCard">Details</button></p></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card">
                            <img src="pics/tripleRoom.jpg" alt="Triple Room" style="width:100%">
                            <h1>Triple Room</h1>
                            <p class="titleCard">Description</p>
                            <p>Description 2</p>
                                <div style="margin: 24px 0;">
                                    <a class="linkCard" href="#"><i class="fa fa-dribbble"></i></a> 
                                    <a href="#"><i class="fa fa-twitter"></i></a>  
                                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                </div>
                            <a href="roomDetails.php"><p><button class="buttonCard">Details</button></p></a>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <img src="pics/queenRoom.jpg" alt="Queen Room" style="width:100%">
                            <h1>Queen Room</h1>
                            <p class="titleCard">Description</p>
                            <p>Description 2</p>
                                <div style="margin: 24px 0;">
                                    <a class="linkCard" href="#"><i class="fa fa-dribbble"></i></a> 
                                    <a href="#"><i class="fa fa-twitter"></i></a>  
                                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                </div>
                            <a href="roomDetails.php"><p><button class="buttonCard">Details</button></p></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card">
                            <img src="pics/kingRoom.jpg" alt="King Room" style="width:100%">
                            <h1>King Room</h1>
                            <p class="titleCard">Description</p>
                            <p>Description 2</p>
                                <div style="margin: 24px 0;">
                                    <a class="linkCard" href="#"><i class="fa fa-dribbble"></i></a> 
                                    <a href="#"><i class="fa fa-twitter"></i></a>  
                                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                </div>

                            <a href="roomDetails.php"><p><button class="buttonCard">Details</button></p></a>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <img src="pics/twinRoom.jpg" alt="Twin Room" style="width:100%">
                            <h1>Twin Room</h1>
                            <p class="titleCard">Description</p>
                            <p>Description 2</p>
                                <div style="margin: 24px 0;">
                                    <a class="linkCard" href="#"><i class="fa fa-dribbble"></i></a> 
                                    <a href="#"><i class="fa fa-twitter"></i></a>  
                                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                </div>
                            <a href="roomDetails.php"><p><button class="buttonCard">Details</button></p></a>                       
                        </div>
                    </td>
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