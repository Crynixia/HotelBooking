<?php
  include "db_connect.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="new.css">
  <link rel="stylesheet" type="text/css" href="Adminstyle.css">

  <title>Login</title>
</head>
<body class="bod">
<ul class="ulNav">
    <li style="float:right"><a class="active" href="adminLogin.php">Log In</a></li>

    <li></li>
    <?php
        if(isset($_SESSION['uname'])):?>
        <li class="liNav"><a class="active" href="adminHome.php">Home</a></li>
            </div>


        <?php
        else:?>

        <?php
        endif;
        ?>
</ul>

<div class="containerText">
    <img src="pics/roomHeader.jpg" alt="Hotel Homepage" style="width: 100%; height : 13%; filter: brightness(40%);">
    <div class="centeredText">
        <h1 style="font-size:60px">Admin Log In</h1>
    </div>
</div> 
<br>
      <form  method="POST">
        <center>
          <fieldset class="fieldset">
            <label class="label">Username</label>
            <input type="text" name="uname"><br><br>
            <label class="label">Password</label>
            <input type="password" name="pass"><br><br>
            <input type="checkbox" name="remember" >Remember Me<br><br>
            <button class="button" name="submit">Login</button>
            <p>Not a member? <a href="Signup.php">Join Now</a></p>
            </fieldset>
        </center>
      </form>

      <?php
        if (isset($_POST["submit"])){
          if(($_POST['uname']) ||  ($_POST['pass'])){
            $username = mysqli_real_escape_string($connect, $_POST['uname']);
            $pass = mysqli_real_escape_string($connect, $_POST['pass']);
            $sql = mysqli_query($connect,"SELECT * FROM staff WHERE username = '$username' AND password ='$pass' ");        
            if (mysqli_num_rows($sql)>0) {  
              $row = mysqli_fetch_assoc($sql);
              $_SESSION['staffID'] = $row['staffID'];
              $_SESSION['fName'] = $row['fName'];
              $_SESSION['lName'] = $row['lName'];
              $_SESSION['phone'] = $row['phone'];
              $_SESSION["uname"] = $row['username'];
              
              header("location: adminHome.php");
          }
          else{
            $message = "invalid username or password";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
          }
        }

      ?>
    
</body>
</html>



