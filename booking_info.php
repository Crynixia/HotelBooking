<?php
    
    include "db_connect.php";
    session_start();


    $id = $_SESSION['userID'];
    $idroom = $_SESSION["roomid"];
    $sql = "SELECT * FROM user where userID='$id'";
    $result = mysqli_query($connect,$sql); 
    $row = mysqli_fetch_assoc($result);
    
    // if(isset($_GET['id'])){
    //     $id2 = $_GET['id'];
    //     $sql2 = "SELECT * FROM hotelroom WHERE roomID='$id2'";
    //     $result2 = mysqli_query($connect,$sql2);
    //     $row2 = mysqli_fetch_array($result2);
    // }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    if(isset($_POST['submit'])){
        $sql2 = "SELECT * FROM hotelroom WHERE roomID='$idroom'";
        $result2 = mysqli_query($connect,$sql2);
        $row2 = mysqli_fetch_array($result2);
        $id = $_SESSION["userID"];
        $checkIn = $_POST["checkIn"]; //value from php
        $checkOut = $_POST["checkOut"];
        $room = $row2["roomName"];
        $roomDesc = $row2["roomDesc"];
        $roomPrice = $row2["price"];
        $first = $checkIn;
        $second = $checkOut;
        $time1 = strtotime($first);
        $time2 = strtotime($second);
        $totaltime = $time2 - $time1;
        $hour = $totaltime / 3600;
        $hari = $hour / 24;
        $price = $roomPrice * $hari;

        $sql = "INSERT INTO booking (userID,checkIn ,checkOut,hari,roomName,roomDesc,roomID,totalPrice) VALUES ('$id','$checkIn', '$checkOut','$hari','$room' ,'$roomDesc','$idroom','$price')"; //value from database
        
        $sendsql = mysqli_query($connect , $sql);
        $sql2 ="SELECT * FROM booking WHERE bookingID=(SELECT max(bookingID) FROM booking)";
        $sendsql2 = mysqli_query($connect , $sql2);
        foreach ($sendsql2 as $row){
            
            $last_id = mysqli_insert_id($connect);
            $bookingID = $row["bookingID"];
            $_SESSION["bookingID"] = $bookingID;
            header ("location: receipt.php");
        }

    }

?>