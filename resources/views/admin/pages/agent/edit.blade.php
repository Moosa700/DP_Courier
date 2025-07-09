@extends('admin.layout.master')
@section('content')
<br>
<div class="container" style="width: 400px; margin-left:20px">
  <h2>New Agent</h2><br>
  <form action="{{route('admin.agent.update')}}" method="post">
    @csrf
   
    <input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
      <label for="email"> Name:</label>
      <input type="name" class="form-control" value="{{$data->name}}" id="sender name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="{{$data->email;}}"id="sender email" placeholder="Enter email" name="email">
    </div>
   
    <div class="form-group">
      <label for="Phone">Phone:</label>
      <input type="phone" class="form-control" value="{{$data->phone}}" id=" Sender Phone" placeholder="Enter Phone" name="phone">
    </div>
    <div class="form-group">
      <label for="Address"> Address:</label>
      <input type="Address" class="form-control" value="{{$data->address}}"id=" Sender Address" placeholder="Enter Address" name="address">
    </div> 
    <div class="form-group">
    <label for="status">Staus:</label> 
    <select class="form-control" name="status" id="">
    <option value="1">Active</option>
    <option value="0">DeActive</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>



@endsection('content')