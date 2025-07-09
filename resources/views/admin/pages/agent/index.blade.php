@extends('admin.layout.master')
@section('content')
<br>
<h3>Agents</h3>
				<div class="row">
                  
	                  <div class="col-md-12 mt">
	                  	<div class="content-panel">
	                          <table class="table table-hover">
	                  	  	  <h4><a href="{{route('admin.createform')}}" class="btn btn-primary">Add New</a></h4>
	                  	  	  <hr>
	                              <thead>
	                              <tr>
	                                  <th>ID</th>
	                                  <th> Name</th>
	                                  <th> Email</th>
	                                  <th>Phone</th>
                                      <th>Address</th>
									  <th>Status</th>
									  @if(auth()->user()->user_type == 'admin')
									  <th>Actions</th>
									  @endif
	                              </tr>
	                              </thead>
	                              <tbody>
								@foreach($agents as $data)		
	                              <tr>
	                                  <td>{{$data->id}}</td>
									  <td>{{$data->name}}</td>
									  <td>{{$data->email}}</td>
									  <td>{{$data->phone}}</td>
									  <td>{{$data->address}}</td>
									  <td>{{$data->status}}</td>

										
									  @if(auth()->user()->user_type == 'admin')
											<td><a href="{{route('admin.agent.delete',$data->id)}}" class="btn btn-danger">Delete</a>
									<a href="{{route('admin.agent.edit',$data->id)}}" class="btn btn-primary">Edit</a>
									</td>
										@endif


	                                  

	                              </tr>
								  @endforeach
	                           
	                             
	                              </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row -->

  

	                  	
@endsection('content')