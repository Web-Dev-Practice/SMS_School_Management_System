<?php
    include 'partials/_handleEventDetails.php';
?>
<!-- Modal -->
<div class="modal fade" id="editEventDetailsModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editEventDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventDetailsModalLabel">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/SMS/docs/main.php" method="POST">
                    <input type="hidden" id="editEventSrNo" name="editEventSrNo">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Event Title</label>
                        <input type="text" class="form-control" id="editEventTitle" name="editEventTitle"
                            placeholder="Example input placeholder" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Event Description</label>
                        <textarea class="form-control" id="editEventDescription" rows="3" name="editEventDescription"
                            placeholder="Describe Event Description Briefly Here" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Event Type</label>
                        <select class="form-control" id="editEventType" name="editEventType">
                            <option class="disable">Select Type</option>
                            <option>Staff Only</option>
                            <option>Teachers & Students Only</option>
                            <option>Public Event</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Venue</label>
                        <select class="form-control" id="editEventVenue" name="editEventVenue">
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
                        <input type="date" class="form-control" id="editEventDate" name="editEventDate" required>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>