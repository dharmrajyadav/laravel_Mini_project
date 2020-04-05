<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('abc.store')}}" method = "post" enctype="multipart-data">
      
        <div class="form-group">
          <label for="firstname">First name:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="lastname">Last name:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="department">Department:</label>
          <input type="text" name = "department" id = "department" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
