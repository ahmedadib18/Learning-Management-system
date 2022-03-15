@include('components/nav')
  {{ csrf_field() }}

 <div class="container">
  <h2>Create Course</h2>
  <form class="form-horizontal" action="{{route('store')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"   name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">code:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="code">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">video</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="Video">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Files</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="Files">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Notes:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="Notes">
      </div>
    </div>
    
     
 
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>