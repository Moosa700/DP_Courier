@extends('admin.layout.master')
@section('content')
<br>
<div class="container" style="width: 400px; margin-left:20px">
  <h2>New Agent</h2><br>
  <form action="{{route('admin.agent.create')}}" method="post">
    @csrf
   
  <div class="form-group">
      <label for="email"> Name:</label>
      <input type="name" class="form-control" id="sender name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="sender email" placeholder="Enter email" name="email">
    </div>
   
    <div class="form-group">
      <label for="Phone">Phone:</label>
      <input type="phone" class="form-control" id=" Sender Phone" placeholder="Enter Phone" name="phone">
    </div>
    <div class="form-group">
      <label for="Address"> Address:</label>
      <input type="Address" class="form-control" id=" Sender Address" placeholder="Enter Address" name="address">
    </div>    
    <div class="form-group">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="sender email" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



@endsection('content')