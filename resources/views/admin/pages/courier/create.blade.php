@extends('admin.layout.master')
@section('content')
<br>
<div class="container" style="width: 400px; margin-left:20px">
  <h2>New Courier</h2><br>
  <form action="{{route('admin.courier.create')}}" method="post">
    @csrf
  <div class="form-group">
      <label for="email">Sender Name:</label>
      <input type="name" class="form-control" id="sender name" placeholder="Enter Name" name="sender_name">
    </div>
    <div class="form-group">
      <label for="email">Sender Email:</label>
      <input type="email" class="form-control" id="sender email" placeholder="Enter email" name="sender_email">
    </div>
    <div class="form-group">
      <label for="Address">Sender Address:</label>
      <input type="Address" class="form-control" id=" Sender Address" placeholder="Enter Address" name="sender_address">
    </div>
    <div class="form-group">
      <label for="Phone">Sender Phone:</label>
      <input type="phone" class="form-control" id=" Sender Phone" placeholder="Enter Phone" name="sender_phone">
    </div>
    <div class="form-group">
    <label for="email">Riciver Name:</label>
      <input type="name" class="form-control" id="sender name" placeholder="Enter Name" name="reciver_name">
    </div>
    <div class="form-group">
      <label for="email">Riciver Email:</label>
      <input type="email" class="form-control" id="sender email" placeholder="Enter email" name="reciver_email">
    </div>
    <div class="form-group">
      <label for="Address">Riciver Address:</label>
      <input type="Address" class="form-control" id=" Sender Address" placeholder="Enter Address" name="reciver_address">
    </div>
    <div class="form-group">
      <label for="Phone">Reciver Phone:</label>
      <input type="Phone" class="form-control" id=" Riciver Phone" placeholder="Enter Phone" name="reciver_phone">
    </div>
    <div class="form-group">
      <label for="type">Courier type</label>
      <select name="courier_type" id="" class="form-control">
        <option value="">Select Type</option>
        <option value="logistics">Logistics</option>
        <option value="medical">Medical</option>
        <option value="luggage">Luggage</option>
        <option value="liquid">Liquid</option>
      </select>
    </div>
    <div class="form-group">
      <label for="weight">Courier weight</label>
      <input type="number" class="form-control" id=" " placeholder="Enter Weight" name="courier_weight">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



@endsection('content')