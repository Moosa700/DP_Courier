@extends('admin.layout.master')

@section('content')
<div class="row">
	<div class="col-lg-9 main-chart">

		<div class="row mtbox">
			<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
				<div class="box1">
					<span class="li_user"></span>
					<h3>{{$users}} USERS</h3>
				</div>
			</div>
			<div class="col-md-2 col-sm-2 box0">
				<div class="box1">
					<span class="li_user"></span>
					<h3>{{$agents}} AGENTS</h3>
				</div>
			</div>
			<div class="col-md-2 col-sm-2 box0">
				<div class="box1">
					<span class="li_stack"></span>
					<h3>{{$new_couriers_count}} NEW COURIERS</h3>
				</div>
			</div>
			<div class="col-md-2 col-sm-2 box0">
				<div class="box1">
					<span class="li_stack"></span>
					<h3>{{$all_couriers_count}} ALL COURIERS</h3>
				</div>
			</div>

		</div>


	</div>

</div>
        @endsection('content')