<?php 

    // Including Database Here 
    include '_dbconnect.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
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

    

?>
<!-- <button type="button" class="btn btn-primary float-right my-3 mx-5" data-toggle="modal"
    data-target="#addEventDetailsModal">
    Add New Event
</button> -->

<!-- Modal -->
<div class="modal fade" id="addEventDetailsModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="addEventDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventDetailsModalLabel">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/SMS/docs/main.php" method="POST">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Event Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="e_title"
                            placeholder="Example input placeholder" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Event Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="e_desc"
                            placeholder="Describe Event Description Briefly Here" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Event Type</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="e_type">
                            <option class="disable">Select Type</option>
                            <option>Staff Only</option>
                            <option>Teachers & Students Only</option>
                            <option>Public Event</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Venue</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="e_venue">
                            <option class="disable">Select Event Venue</option>
                            <option>Venue-1</option>
                            <option>Venue-2</option>
                            <option>Venue-3</option>
                            <option>Venue-4</option>
                            <option>Venue-5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlDateTime">Event Date</label>
                        <input type="date" class="form-control" id="event_date" name="e_date" required>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Add Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>