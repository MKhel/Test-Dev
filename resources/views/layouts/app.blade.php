@extends('layouts.svg')
<!DOCTYPE html>
<html lang="en">

 <head>
 	<title>@yield('title')</title>
	 <link rel = "icon" href = 
"{{asset('/img/RRJM-LOGO-06.png')}}" 
        type = "image/x-icon">
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	 
    <script src="https://kit.fontawesome.com/14c22b72dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
    
    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/simple-sidebar.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->


  <!--<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script src="{{ asset('pickadate/lib/picker.js')}}"></script>
    
    
    
        <link href="{{ url('vendor/bootstrap/css/navbar-top-fixed.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />

-->
 </head>
 <body>
 @section('navbar')


<div class="d-flex" id="wrapper">

<!-- Sidebar -->
    <div class="bg-white border-right navsidebar" id="sidebar-wrapper" >


<nav id="" class="col-md-6 col-lg-2 d-md-block bg-white sidebar collapse ">
<div class="sidebar-heading"><a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
  
  <span class="fs-4"><svg class="bi me-2" width="200" height="60"><use xlink:href="#logo-svg"/></svg></span>
    </a>
  </div>

  <div class="p-3 bg-white" style="width: 300px;">
  
  <ul class="nav nav-pills flex-column mb-auto">
  <li class="mb-1">     
                      <li class="sidebar-item active">
                        <a class="btn btn-toggle align-items-left rounded collapsed active" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#home"/></svg>Dashboard</span>
                          
                        </a>
                      
	   
                        <button class="btn btn-toggle align-items-left rounded collapsed active" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            
                        </button>
                       
                        
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="/statusdashboard" class="nav-link link-success">Overview</a></li>
                              <li><a href="/client" class="nav-link link-success">Active Client Dashboard</a></li>
                              <li><a href="#" class="nav-link link-success">Reports</a></li>
                            </ul>
                        </div>
                      </li>
                      
                      <li class="mb-1">
                        <button class="btn btn-toggle align-items-left rounded collapsed" data-bs-toggle="collapse" data-bs-target="#client-collapse" aria-expanded="false">
                          <svg class="bi me-2" width="20" height="20" style="margin-right: 30px; color: green;"><use xlink:href="#geo-fill"/></svg>Active Client
                        </button>
                        <div class="collapse" id="client-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/add_joborder" class="nav-link link-success">Add Job Order</a></li>
                            <li><a href="/addclient_jobsite" class="nav-link link-success">Add New Client</a></li>
                            <li><a href="joborders" class="nav-link link-success">Job Oders</a></li>
                          </ul>
                        </div>
                      </li>

                      <li class="mb-1">
                        <button class="btn btn-toggle align-items-left rounded collapsed" data-bs-toggle="collapse" data-bs-target="#marketing-collapse" aria-expanded="false">
                        <svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#table"/></svg>Marketing Pipeline
                        </button>
                        <div class="collapse" id="marketing-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="dashboard" class="nav-link link-success"></a></li>
                            <li><a href="#" class="nav-link link-success">Updates</a></li>
                            <li><a href="#" class="nav-link link-success">Reports</a></li>
                          </ul>
                        </div>
                      </li>
                    
                      <li class="mb-1">
                        <button class="btn btn-toggle align-items-left rounded collapsed" data-bs-toggle="collapse" data-bs-target="#deployment-collapse" aria-expanded="false">
                            <svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#collection"/></svg>Deployment
                        </button>
                        <div class="collapse" id="deployment-collapse">
                              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="deployment" class="nav-link link-success" >Overview</a></li>
                                <li><a href="#" class="nav-link link-success">Updates</a></li>
                                <li><a href="#" class="nav-link link-success">Reports</a></li>
                              </ul>
                        </div>
                      </li>
                      <li class="border-top my-3"></li>
                          <li class="mb-1">
                              <button class="btn btn-toggle align-items-left rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                <svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;" ><use xlink:href="#people-circle"/></svg>Account
                              </button>
                              <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="dashboard" class="nav-link link-success">Settings</a></li>
                                    <li><a href="#" class="nav-link link-success">Change Password</a></li>
                                    <li><a href="#" class="nav-link link-success">Log out</a></li>
                                </ul>
                              </div>
                          </li>
  </ul>
</div>
</nav>
  <hr>

</div>
<!-- /#sidebar-wrapper -->
<main class="container-fluid">
<!-- Page Content -->
<div class="container-fluid maincontainer">
<div id="page-content-wrapper">

<div class="col">
  <nav class="navbar bg-white">
    
    

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <a class="sidebar-toggle" id="menu-toggle">
      <span class="navbar-toggler-icon"><i class="fas fa-stream" style="color: green;"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
    
      </ul>
    </div>
  </nav>
</div>
<br>

    
      <div class="container-fluid maincontainer">
      
        
      @show
      @yield('content')
      </div>
    

</div>
</main> 
</div>
</div>
</div>
</div>

<!-- /#page-content-wrapper -->




 

 @section('footer')
 <footer class="footer">
    <div class="container-fuild">
            <div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
							</ul>
						</div>
      <div class="col-6 text-right">
          <p class="mb-0">
                © 2021 -   <a href="index.html" class="text-muted">AppStack</a>
							</p>
      </div>
    </div>
</footer>
 @show
 </body>



  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
 </html>