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
    <img src="pics/hotelHome.jpg" alt="Hotel Homepage" style="width: 100%; height : 80%; filter: brightness(40%);">
    <div class="centeredText">
        <h1 style="font-size:60px">Hotel Babi</h1>
        <form action="searchRoom.php" method="post">
            <fieldset>
                <table>
                    <tr>
                        <td><p style="color: white;">Room</p></td>
                        <td><p style="color: white;">Check-In</p></td>
                        <td><p style="color: white;">Check-Out</p></td>
                        <td><p style="color: white;">Person</p></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="roomName">
                                <option value="Single Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                            </select>
                        </td>
                        <td><input type="date" name="check_in"></td>
                        <td><input type="date" name="check_out"></td>
                        <td>
                            <select name="roomPerson">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td><input type="submit" name="submit" value="Search Rooms"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</div> 
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1>Hotel Babi</h1>
            <p>
                The story of Hotel Babi was inspired from our beloved and beautiful owner, who shares a love for nature and green travel 
                all over the world. This inspiration was to create a small green area within the urban centre of the city to create new 
                lungs for the Sam Yan community and tourists.
            </p>
            <p>
                This vision became the Hotel Babi, which offers 9 comfortable rooms surrounded by a green space, 
                creating a pure ozone effect around the hotel. Sam Yan is conveniently located just 5 minutes from the 
                National Stadium BTS and only 3 minutes to the Hua Lamphong MRT station.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-sm-6">
            <div class="row>">
                <a href="aaaaa.php">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="pics/singleRoom.jpg" alt="Single Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                <div class="textHome">Single Room</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="aaaa.php">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="pics/doubleRoom.jpg" alt="Double Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                <div class="textHome">Double Room</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            &nbsp;
            <div class="row>">
                <a href="aaaaa.php">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="pics/tripleRoom.jpg" alt="Triple Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                <div class="textHome">Triple Room</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="aaa.php">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="pics/queenRoom.jpg" alt="Queen Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                <div class="textHome">Queen Room</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            &nbsp;
            <div class="row>">
                <a href="aaaa.php">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="pics/kingRoom.jpg" alt="King Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                <div class="textHome">King Room</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="cc.php">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="pics/twinRoom.jpg" alt="Twin Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                <div class="textHome">Twin Room</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
&nbsp;
<div class="containerText">
    <img src="pics/homepage2.jpg" alt="Hotel Image" style="width: 100%; height : 55%; filter: brightness(40%);">
    <div class="mainText">
        <h1 style="font-size:30px">Our highlights and features</h1>
        <p style="font-size:25px ;left: 50%">
            <i class="fa fa-wifi" style="font-size:48px;color:white"></i> Unlimited Free WiFi throughout the hotel 
        </p>
        <p style="font-size:25px">
            <i class="fa fa-home" style="font-size:48px;color:white"></i> Just 5 minutes walk away from LRT  
        </p>
        <p style="font-size:25px">
            <i class="fa fa-bed" style="font-size:48px;color:white"></i> All rooms are fully air conditioned for a cool and comfortable stay  
        </p>
    </div>
</div> 
<br>
    

<script>

</script>
&nbsp;
<footer>
    "Ehem ehem eheeem" - Aqil Sahar
</footer>

</body>
</html>