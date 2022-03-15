<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



</head>
<body>
@include('components/nav')

<style>
  table {
  width: 50%;
}
  td{
  border: 1px solid #dddddd;
   text-align: center;
  padding: 8px;
  }
  th{
    text-align: center;
  }
</style>
<table>
  <tr>
    <th>Link</th>
    <th>ClassNo</th>
    
    
  </tr>
  @php $i = 0; @endphp
   @foreach($data as $data)
    @php $i++ @endphp
  <tr>
  
    <td><a href='{{$data}}'>Class file and video recordings</a></td> 
    <td>{{$i}}</td>
     
    
    
   
  </tr>
  @endforeach
 
</table>



  
  









</body>
</html>
