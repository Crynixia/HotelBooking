<?php
    session_start();
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="styleAbout.css">
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
        <h1 style="font-size:60px">About Us</h1>
    </div>
</div> 

<!-- <div class="containerText">
    <img src="pics/hotelHome.jpg" alt="Hotel Homepage" style="width: 100%; height : 80%; filter: brightness(40%);">
    <div class="centeredText">
        <h1 style="font-size:60px">Hotel Babi</h1>
        <form action="" method="post">
            <fieldset>
                <table>
                    <tr>
                        <td></td>
                        <td><p style="color: white;">Check-In</p></td>
                        <td><p style="color: white;">Check-Out</p></td>
                        <td><p style="color: white;">Person</p></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="search" name="search" placeholder="Search for rooms"></td>
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
</div>  -->
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1>MoonLine Hotel</h1>
            <p>
                 Our hotel has been the hospitality industry’s magazine of record for more than 140 years. Today, it covers hotel investment, development, operations, design, technology, brand strategies and the sharing economy for the new generation of hotel owner, developer, operator, broker and financier. Our editorial staff provides the very latest news and insight for the hospitality community and boasts a masthead brimming with sought-after thought leaders in the industry.
            </p>
            <p>
                MoonLine Hotel is a modern, upscale hospitality company that is passionate about ‘making moments’, recognising that small gestures make a big difference to our guests, our owners and our people. We do ordinary things in an extraordinary way – a philosophy that has defined our brand’s success from the very start.
            </p>
            <p>
                Our hotel is one of the world’s most reputable upscale hotel management companies. Since it was established in 1973, the hospitality firm has expanded its international presence and today, manages 20,000-plus rooms in more than 82 hotels across Africa, Asia, Europe and the Middle East. With ambitious plans to further expand its footprint across these continents, the company is on track to meet its target of operating 125 properties by 2020. The company’s global workforce of 16,000 hospitality professionals are trained to ensure Mövenpick’s traditional Swiss values are always upheld, guaranteeing the 7.5 million guests who stay with us every year are well looked after.
            </p>
        </div>
        <div class="col-sm-6">
            <div class="row>">
                <a href="#">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="picAbout/hotel.jpg" alt="" class="imageHome" style="width:100%">
                            <div class="middle">
                                
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="picAbout/hotel2.jpg" alt="Double Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            &nbsp;
            <div class="row>">
                <a href="#">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="picAbout/hotel3.jpg" alt="Triple Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="picAbout/hotel4.jpg" alt="Queen Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            &nbsp;
            <div class="row>">
                <a href="#">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="picAbout/hotel5.jpg" alt="King Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-6">
                        <div class="containerHome">
                            <img src="picAbout/hotel6.jpg" alt="Twin Room" class="imageHome" style="width:100%">
                            <div class="middle">
                                
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
    <img src="picAbout/homepage2.jpg" alt="Hotel Image" style="width: 100%; height : 55%; filter: brightness(40%);">
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
    MoonLine Hotel®
</footer>

</body>
</html>