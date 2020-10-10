<?php

    // Connection with Database
    include '_dbconnect.php';

    $e_title = $_POST('e_title');
    $e_desc = $_POST('e_desc');
    $e_type = $_POST('e_type');
    $e_venue = $_POST('e_venue');
    $e_date = $_POST('e_date');

    $sql = "";
    $result = mysqli_query($conn, $sql);

    if($result){
        
    }


?>


<button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#staticBackdrop">
    Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/SMS/docs/main.php" method="POST">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Event Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="e_title"
                            placeholder="Example input placeholder">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Event Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="e_desc"
                            placeholder="Describe Event Description Briefly Here"></textarea>
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
                        <input type="date" class="form-control" id="event_date" name="e_date">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Add Changes</button>
            </div>
        </div>
    </div>
</div>