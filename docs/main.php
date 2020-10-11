<?php  
    // Connection with database
    require 'partials/_dbconnect.php';  

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>SMS-School Management System</title>
    <style>
    * {
        overflow-x: hidden;
    }

    #sidebar-menu {
        min-height: 90vh;
    }
    </style>

</head>

<body>
    <!-- Header NavBar -->
    <?php include 'partials/_header.php' ?>
    <?php include 'partials/_addEventDetails.php'?>
    <?php include 'partials/_editEventDetails.php'?>

    <!-- Main Stuff Starts Here -->
    <div class="">
        <div class="row">
            <!-- Main Menu -->
            <div class="col text-center bg-light border-right mx-3 py-3" id="sidebar-menu">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                        href="#list-home" role="tab" aria-controls="home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                        href="#list-profile" role="tab" aria-controls="profile">Teachers</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                        href="#list-messages" role="tab" aria-controls="messages">Classes</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                        href="#list-settings" role="tab" aria-controls="settings">Calender</a>
                </div>
            </div>
            <!-- Menu Item Content  -->
            <div class="col-7">
                <div class="tab-content" id="nav-tabContent">
                    <?php 
                    if(isset($_GET['delete'])){
                        $sno = $_GET['delete'];
                        
                        $sql = "DELETE FROM `calender` WHERE `calender`.`Sr.No.` = $sno";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            include 'lil_Elements/_alertDelete.php';
                        }
                    } 
                ?>
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                        aria-labelledby="list-home-list">
                        <a href="partials/_addEventDetails.php" type="button"
                            class="btn btn-primary float-right my-3 mx-5" data-toggle="modal"
                            data-target="#addEventDetailsModal">Add New Event</a>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Add
                        Stuff Regarding All Teachers</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        Arrange Classes</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        Event Details Here
                    </div>
                </div>
                <!-- Events Cards Starts Here  -->
                <?php 
                                       
                    $sql = "SELECT * FROM `calender`";
                    $result = mysqli_query($conn, $sql);
                    
                    while($row = mysqli_fetch_assoc($result)){
                        $e_srno = $row['Sr.No.'];
                        $e_title = $row['event_heading'];
                        $e_desc = $row['event_description'];
                        $e_type = $row['event_type'];
                        $e_venue = $row['event_venue'];
                        $e_date = $row['event_date'];

                        echo '<div class="card mx-5 mb-3">
                        <div class="card-body">
                            <div>
                                <p class="font-weight-bold float-left edit_event_title">'.$e_title.'</p>
                                <h6 class="font-weight-bold badge badge-info text-wrap float-right">'.$e_date.'</h6>
                            </div>
                            <p class="card-text">'.$e_desc.'</p>
                            <h6 class="badge badge-primary text-wrap float-right ml-2">'.$e_type.'</h6>
                            <a href="partials/_editEventDetails.php" type="button" class="btn btn-warning text-white edit" id="'.$e_srno.'" data-toggle="modal" data-target="#editEventDetailsModal">
                                Edit Event
                            </a>
                            <a href="#" class="btn btn-danger delete" id="del'.$e_srno.'">Delete Event</a>
                            <h6 class="badge badge-success text-wrap float-right">'.$e_venue.'</h6>
                        </div>
                    </div>';
                    }
                ?>

                <!-- Sticky Footer  -->
                <div class="text-center">
                    <footer class="footer mt-auto bg-dark text-white py-3">
                        <div class="container">
                            <span class="text-muted">Place sticky footer content here.</span>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- Categories:-  -->
            <div class="col text-center bg-light border-left mx-3">
                <button type="button" class="btn btn-primary font-weight-bold btn-block py-4 my-5">Parents</button>
                <button type="button" class="btn btn-success font-weight-bold btn-block py-4 my-5">Teachers</button>
                <button type="button" class="btn btn-danger font-weight-bold btn-block py-4 my-5">Students</button>
                <button type="button"
                    class="btn btn-warning font-weight-bold btn-block py-4 my-5text-white">Others</button>
            </div>
        </div>
    </div>

    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            tr = e.target.parentNode;
            title = tr.getElementsByTagName("p")[0].innerText;
            description = tr.getElementsByTagName("p")[1].innerText;
            date = tr.getElementsByTagName("h6")[0].innerText;
            type = tr.getElementsByTagName("h6")[1].innerText;
            venue = tr.getElementsByTagName("h6")[2].innerText;
            editEventSrNo.value = e.target.id;
            editEventTitle.value = title;
            editEventDescription.value = description;
            editEventDate.value = date;
            editEventType.value = type;
            editEventVenue.value = venue;

        })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            sno = e.target.id.substr(3, );
            if (confirm("Are You Sure! You want to delete this event.")) {
                window.location = `/SMS/docs/main.php?delete=${sno}`;
            } else {

            }

        })
    })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>