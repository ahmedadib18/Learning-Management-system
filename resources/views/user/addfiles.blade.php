@include('components/nav')<br><br>
<!DOCTYPE html>
<html>
<head>
<title>Add links</title>
</head>
<body>

<h6>Add Files and video links</h6>
 <form  action="{{route('storefiles')}}" method="post"enctype="multipart/form-data">
{{ csrf_field() }}
 <label for="subject">Choose a Subject:</label>
  <select name="courses_id" id="courses_id">
   @foreach($a as $a)
  <option value="{{$a->id}}">{{$a->name}}</option>
  @endforeach
   </select>
   <br>


 
 <label for="Name">Class name:</label><br>
 <input type="text" id="name" name="name"><br>
 <label for="Name">File Link:</label><br>
 <input type="text" id="link" name="link"><br>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>