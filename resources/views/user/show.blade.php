<!DOCTYPE html>
<html.>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



</head>
<body>
@include('components/nav')




<div class="row ">
   @foreach($adib as $Courses)
   
  <div class=" card mt-5 ml-5 mr-5 mb 5" style="width: 18rem;">
  <div class=" card-body">
    <h5 class="card-title">{{$Courses->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$Courses->code}}</h6>
    
    <a href="{!! route('addfiles', $Courses->id) !!}">Add Videos</a>
    <a href="{!! route('delete', $Courses->id) !!}" class="card-link">Delete Course</a>
  </div>
</div>
@endforeach
</div>









</body>
</html>
