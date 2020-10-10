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
    <!-- Connection with databse  -->
    <?php require 'partials/_dbconnect.php' ?>
    <!-- Header NavBar -->
    <?php include 'partials/_header.php' ?>

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
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                        aria-labelledby="list-home-list">
                        <div class="elfsight-app-944d4665-e04b-41e7-8fd2-421d7ad9952c"></div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Add
                        Stuff Regarding All Teachers</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        Arrange Classes</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <?php include 'partials/_calender.php' ?>
                    </div>
                </div>
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


    <!-- Calender Script  -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
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