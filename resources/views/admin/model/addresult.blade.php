      <div class="modal-header" style="background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Add Result</h5>
        <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
       <form id="ResultForm">
        {{csrf_field()}}
      <div class="form-group">
        <label for="name" class="col-form-label">Team1:</label>
        <input type="text" class="form-control bg-light" name="team1">
      </div>  

       
      <div class="form-group">
        <label for="address" class="col-form-label">Team2:</label>
        <input type="text" class="form-control bg-light" name="team2">
      </div>  

       
      <div class="form-group">
        <label for="email" class="col-form-label">Result:</label>
        <textarea class="form-control bg-light" rows="5" name="result"></textarea>
      </div>  
    </form>
      </div>
<div class="modal-footer" style="background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" id="InsertResult"  class="btn btn-success">Add</button>
  
</div>
    
