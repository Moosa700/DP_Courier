      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="{{asset('courier-logo.webp')}}"   width="120"></a></p>
              	  <!-- <h5 class="centered">Go Couriers</h5> -->
              	  	
                  <li class="mt">
                      <a class="active" href="{{route('admin.dashboard')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                 

                  <li class="sub-menu">
                      <a href="@if(auth()->user()->user_type == 'admin'){{route('admin.couriers')}}@else{{route('agent.couriers',auth()->user()->id)}}@endif" >
                          <i class="fa fa-cube"></i>
                          <span>Couriers</span>
                      </a>
  
                  </li>

                  <li class="sub-menu">
                      <a href="{{route('admin.agents')}}" >
                      <i class="fa fa-users"></i>
                          <span>Agents</span>
                      </a>
                      </li>
        
                  <li class="sub-menu">
                      <a href="@if(auth()->user()->user_type == 'admin'){{route('admin.message')}}@else {{route('agent.messages',auth()->user()->id)}} @endif" >
                          <i class="fa fa-envelope"></i>
                          <span>Messages</span>
                      </a>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->