<?php
  include "db_connect.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="new.css">
  <title>Login</title>
</head>
<body class="bod">
    <div class="header">
        <a href="#"><img src="pics/icon.jpg" ></a>
        <a class="nav" href="homepage.php">Home</a>
        <a class="nav" href="#">Kimak</a>
        <a class="nav" href="#">Web</a>
    </div>
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
          if(empty($_POST['uname']) || empty ($_POST['pass'])){
            $error = "Username or Password is invalid";
            echo $error;
          }
          else{
            $username = mysqli_real_escape_string($connect, $_POST['uname']);
            $pass = mysqli_real_escape_string($connect, $_POST['pass']);
            $sql = mysqli_query($connect,"SELECT * FROM user WHERE username = '$username' AND password ='$pass' ");        
            if (mysqli_num_rows($sql)>0) {  
              $row = mysqli_fetch_assoc($sql);
              $_SESSION['userID'] = $row['userID'];
              $_SESSION['fName'] = $row['fName'];
              $_SESSION['lName'] = $row['lName'];
              $_SESSION['phone'] = $row['phone'];
              $_SESSION['phone'] = $row['phone'];
              $_SESSION["uname"] = $row['username'];
              
              header("location: homepage.php");
            }
          }
        }

      ?>
    
</body>
</html>



