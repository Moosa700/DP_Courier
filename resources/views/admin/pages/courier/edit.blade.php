@extends('admin.layout.master')
@section('content')
<br>
<div class="container" style="width: 400px; margin-left:20px">
  <h2>Edit Courier</h2><br>
  <form action="{{route('admin.courier.update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$couriers->id}}">
  <div class="form-group">
      <label for="email">Sender Name:</label>
      <input type="name" class="form-control" value="{{$couriers->sender_name}}" id="sender name" placeholder="Enter Name" name="sender_name">
    </div>
    <div class="form-group">
      <label for="email">Sender Email:</label>
      <input type="email" class="form-control" value="{{$couriers->sender_email}}" id="sender email" placeholder="Enter email" name="sender_email">
    </div>
    <div class="form-group">
      <label for="Address">Sender Address:</label>
      <input type="Address" class="form-control" value="{{$couriers->sender_address}}" id=" Sender Address" placeholder="Enter Address" name="sender_address">
    </div>
    <div class="form-group">
      <label for="Phone">Sender Phone:</label>
      <input type="phone" class="form-control" value="{{$couriers->sender_phone}}" id=" Sender Phone" placeholder="Enter Phone" name="sender_phone">
    </div>
    <div class="form-group">
    <label for="email">Riciver Name:</label>
      <input type="name" class="form-control" value="{{$couriers->reciver_name}}"  id="sender name" placeholder="Enter Name" name="reciver_name">
    </div>
    <div class="form-group">
      <label for="email">Riciver Email:</label>
      <input type="email" class="form-control" value="{{$couriers->reciver_email}}" id="sender email" placeholder="Enter email" name="reciver_email">
    </div>
    <div class="form-group">
      <label for="Address">Riciver Address:</label>
      <input type="Address" class="form-control" value="{{$couriers->reciver_address}}" id=" Sender Address" placeholder="Enter Address" name="reciver_address">
    </div>
    <div class="form-group">
      <label for="Phone">Reciver Phone:</label>
      <input type="Phone" class="form-control" value="{{$couriers->reciver_phone}}"id=" Riciver Phone" placeholder="Enter Phone" name="reciver_phone">
    </div>
    <div class="form-group">
      <label for="type">Courier type</label>
      <select name="courier_type" id="" class="form-control">
        <option value="">Select Type</option>
        <option value="logistics" @if($couriers->courier_type == 'logistics') selected @endif>Logistics</option>
        <option value="medical"  @if($couriers->courier_type == 'medical') selected @endif>Medical</option>
        <option value="luggage" @if($couriers->courier_type == 'luggage') selected @endif>Luggage</option>
        <option value="liquid" @if($couriers->courier_type == 'liquid') selected @endif>Liquid</option>
      </select>
    </div>
    <div class="form-group">
      <label for="type">Agent</label>
      <select name="agent_id" id="" class="form-control">
        <option value="">Select Agent</option>
        @if($agents)
          @foreach($agents as $agent)
          <option value="{{$agent->id}}" @if($agent->id == $couriers->agent_id) selected @endif>{{$agent->name}}</option>
          @endforeach
        @endif
      </select>
    </div>
    <div class="form-group">
      <label for="weight">Courier weight</label>
      <input type="number" class="form-control" value="{{$couriers->courier_weight}}"id=" " placeholder="Enter Weight" name="courier_weight">
    </div>
    <div class="form-group">
      <label for="type">Agent</label>
      <select name="status" id="" name="status" class="form-control">
        <option value="">Status</option>
        <option value="completed" @if($couriers->status == 'completed') selected @endif >Completed</option>
        <option value="on the way" @if($couriers->status == 'on the way') selected @endif >Pending</option>
        <option value="pending" @if($couriers->status == 'pending') selected @endif >Pending</option>
        <option value="return" @if($couriers->status == 'return') selected @endif >Return</option>
        <option value="canceled" @if($couriers->status == 'canceled') selected @endif >Canceled</option>

        
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>



@endsection('content')