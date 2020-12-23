@extends('headerpage')
@section('content')
<div class="mform" >
<h4>Add Books</h4>

<form action="{{url('table')}}" method="post" enctype="multipart/form-data">
@csrf
  <label for="fname">Book name:</label><br>
  <input type="text" id="bname" name="book_name" ><br>

  <div class="error_msg">
  @error('book_name')
  {{$message}}

  @enderror
  
  </div>
  


  <label for="lname">catagories name:</label><br>
  <input type="text" id="cname" name="catagories_name" ><br>

  <div class="error_msg">
  @error('catagories_name')
  <span class="text_danger">{{$message}}</span>
  

  @enderror
  
  </div>
 
  <label for="lname">writer name:</label><br>
  <input type="text" id="wname" name="writer_name" ><br>


  <div class="error_msg">
  @error('writer_name')
  <span class="text_danger">{{$message}}</span>
  

  @enderror
  
  </div>
 
  <label for="lname">book image:</label><br>
  <input type="file" id="file" name="book_image" ><br><br>
  
  <div class="error_msg">
  @error('book_image')
  <span class="text_danger">{{$message}}</span>
  

  @enderror
  
  </div>

  <label for="lname">Book:</label><br>
  <input type="file" id="file" name="book" ><br><br>
  
  <div class="error_msg">
  @error('book')
  <span class="text_danger">{{$message}}</span>
  

  @enderror
  
  </div>

  <!-- <div class="text-center">
          <button type="submit">Submit</button>

  </div> -->
  <input type="submit" value="Submit">
</form> 

<style>
.error_msg{
  color:red;
}


</style>
	

@endsection