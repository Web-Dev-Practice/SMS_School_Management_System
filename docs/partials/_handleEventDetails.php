<?php 

    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['editEventSrNo'])){
            $e_srno = $_POST['editEventSrNo'];
            $e_title = $_POST['editEventTitle'];
            $e_desc = $_POST['editEventDescription'];
            $e_type = $_POST['editEventType'];
            $e_venue = $_POST['editEventVenue'];
            $e_date = $_POST['editEventDate'];
            
            $sql = "UPDATE `calender` SET `event_heading` = '$e_title', `event_description` = '$e_desc', `event_type` = '$e_type', `event_venue` = '$e_venue', `event_date` = '$e_date' WHERE `calender`.`Sr.No.` = '$e_srno';";
            $result = mysqli_query($conn, $sql);
        
            if($result){
                include 'lil_Elements/_alertUpdate.php';
            }
        }

        else{
            $e_title = $_POST['e_title'];
            $e_desc = $_POST['e_desc'];
            $e_type = $_POST['e_type'];
            $e_venue = $_POST['e_venue'];
            $e_date = $_POST['e_date'];
            
            $sql = "INSERT INTO `calender` (`event_heading`, `event_description`, `event_type`, `event_venue`, `event_date`) VALUES ('$e_title', '$e_desc', '$e_type', '$e_venue', '$e_date');";
            $result = mysqli_query($conn, $sql);
        
            if($result){
                include 'lil_Elements/_alertSuccess.php';
            }
        }
    }