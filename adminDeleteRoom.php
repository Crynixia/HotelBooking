<?php
    include "db_connect.php";
    session_start();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM booking WHERE bookingID ='$id'";
            $deleteQuery = mysqli_query($connect,$sql);

            if ($deleteQuery){
                header ("location: adminHome.php ");
            }
        }
            

?>