@extends('admin.layout.master')
@section('content')
<br>
<h3>All Couriers</h3>
				<div class="row">
                  
	                  <div class="col-md-12 mt">
	                  	<div class="content-panel">
	                          <table class="table table-hover">
	                  	  	  <h4><a href="{{route('admin.courier.createformer')}}" class="btn btn-primary">Add New</a></h4>
	                  	  	  <hr>
	                              <thead>
	                              <tr>
	                                  <th>ID</th>
	                                  <th>Sender Name</th>
	                                  <th>Sender Phone</th>
	                                  <th>Sender Mail</th>
									  
	                                  <th>Reciver Name</th>
	                                  <th>Reciver Phone</th>
	                                  <th>Reciver Mail</th>
									  <th>Status</th>

									  <th>Actions</th>
	                              </tr>
	                              </thead>
	                              <tbody>
								@foreach($couriers as $data)		
	                              <tr>
	                                  <td>{{$data->id}}</td>
									  <td>{{$data->sender_name}}</td>
									  <td>{{$data->sender_phone}}</td>
									  <td>{{$data->sender_email}}</td>
									  <td>{{$data->reciver_name}}</td>
									  <td>{{$data->reciver_phone}}</td>
									  <td>{{$data->reciver_email}}</td>
									  <td>{{$data->status}}</td>

									  <td><a href="{{route('admin.courier.delete',$data->id)}}" class="btn btn-danger">Delete</a>
									<a href="{{route('admin.courier.edit',$data->id)}}" class="btn btn-primary">Edit</a>
									</td>
	                                  

	                              </tr>
								  @endforeach
	                           
	                             
	                              </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row -->

  

	                  	
@endsection('content')