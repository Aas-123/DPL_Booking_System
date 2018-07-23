
        <div class="modal-header" style="background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Update Points</h5>
        <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close" style="margin-top: -5%;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
       <form id="EditForm">
        {{csrf_field()}}
      <div class="form-group">
        <label for="name" class="col-form-label">Team:</label>
        <input type="text" class="form-control bg-light" name="team" value="{{$point->teams}}">
      </div>  

       
      <div class="form-group">
        <label for="address" class="col-form-label">Played:</label>
       <input type="text" class="form-control bg-light" name="played" value="{{$point->played}}">
      </div>  

       
      <div class="form-group">
        <label for="email" class="col-form-label">Won:</label>
        <input type="text" class="form-control bg-light" name="won" value="{{$point->won}}">
      </div>  

      <div class="form-group">
        <label for="name" class="col-form-label">Draw:</label>
        <input type="text" class="form-control bg-light" name="draw" value="{{$point->draw}}">
      </div>  

       
      <div class="form-group">
        <label for="address" class="col-form-label">lost:</label>
       <input type="text" class="form-control bg-light" name="lost" value="{{$point->lost}}">
      </div>  

       
      <div class="form-group">
        <label for="email" class="col-form-label">Points:</label>
        <input type="text" class="form-control bg-light" name="point" value="{{$point->point}}">
      </div>  
    </form>
      </div>
<div class="modal-footer" style="background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" id="UpdateData"  data-id="{{$point->id}}" class="btn btn-success">Update</button>
</div>
   
