<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>courier | Landing, Responsive &amp; Business Templatee</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="user/assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="user/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="user/assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="user/assets/img/favicons/favicon.ico">
  <link rel="manifest" href="user/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="user/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="{{asset('/user/assets/css/theme.css')}}" rel="stylesheet">

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('courier-logo.webp')}}"  height="100" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" style="background-color: #EB9B14; color:white" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base" >
            <li class="nav-item px-2"><a class="nav-link" style="color: white;" aria-current="page" href="{{route('home')}}">Home</a></li>
            <li class="nav-item px-2"><a class="nav-link" style="color: white;" aria-current="page" href="{{route('user.courier.createform')}}">Make Courier</a></li>
            <a class="nav-link" style="color: white;" aria-current="page" href="{{ auth()->user() ? route('user.courier.show', auth()->user()->id) : route('user.courier.show',0)}}">My Courier</a>
            <li class="nav-item px-2"><a class="nav-link" style="color: white;" href="#services">Our Services</a></li>
            <li class="nav-item px-2"><a class="nav-link" style="color: white;" href="#services">Our Services</a></li>
            <li class="nav-item px-2"><a class="nav-link" style="color: white;" href="#findUs">Find Us</a></li>
          </ul>
          <div class="dropdown d-none d-lg-block">
            <!-- <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-warning"></i></button> -->
            <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
              <form>
                <input class="form-control border-200" type="search" placeholder="Search" aria-label="Search" style="background:#FDF1DF;" />
              </form>
            </div>
          </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="#contact">Contact Us</a>
          <form class="d-flex my-3 d-block d-lg-none">
            <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

  <div style="margin: 20px;">
    <h3>My Couriers</h3>
    <br>
				<div class="row">
                  
	                  <div class="col-md-12 mt">
	                  	<div class="content-panel">
	                          <table class="table table-hover">
	                  	  	  <h4><a href="{{route('user.courier.createform')}}" class="btn btn-primary">Add New</a></h4>
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

									  <td><a href="{{route('user.courier.delete',$data->id)}}" class="btn btn-danger">Delete</a>
									<!-- <a href="{{route('admin.courier.edit',$data->id)}}" class="btn btn-primary">Edit</a> -->
									</td>
	                                  

	                              </tr>
								  @endforeach
	                           
	                             
	                              </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row -->

        </div>


         <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-1000">

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="fw-bold text-white">Get an update every week</h2>
            <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p>
          </div>
          <div class="col-lg-6">
            <h5 class="text-primary mb-3">SUBSCRIBE TO NEWSLETTER </h5>
            <form class="row gx-2 gy-2 align-items-center">
              <div class="col">
                <div class="input-group-icon">
                  <label class="visually-hidden" for="inputEmailCta">Address</label>
                  <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" />
                </div>
              </div>
              <div class="d-grid gap-3 col-sm-auto">
                <button class="btn btn-danger" type="submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-900 pb-0 pt-5">

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="{{asset('user/assets/img/gallery/footer-logo.png')}}" height="51" alt="" /></a>
            <p class="text-500 my-4">The most trusted Courier<br />company in your area.</p>
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
            <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Other links </h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-500" href="#!">Blogs</a></li>
              <li class="lh-lg"><a class="text-500" href="#!">Movers website</a></li>
              <li class="lh-lg"><a class="text-500" href="#!">Traffic Update</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
            <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Services</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-500" href="#!">Corporate goods</a></li>
              <li class="lh-lg"><a class="text-500" href="#!">Artworks</a></li>
              <li class="lh-lg"><a class="text-500" href="#!">Documents</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
            <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-500" href="#!">About Us</a></li>
              <li class="lh-lg"><a class="text-500" href="#!">Contact US</a></li>
              <li class="lh-lg"><a class="text-500" href="#!">Get Update</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 bg-1000">

      <div class="container">
        <div class="row justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2021</p>
          </div>
          <div class="col-12 col-sm-8 col-md-6">
            <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="assets/js/theme.js')}}"></script>

  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>