@extends('layouts.svg')
<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel = "icon" type = "image/png" href = "images/icons/rrjm-icon.png">
    <link href="{{ url('css/app-style.css') }}" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    


    <title>RRJM System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('css')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
@section('navbar')
<div class="wrapper">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
            <span class="fs-4"><svg class="bi me-2" width="200" height="60"><use xlink:href="#logo-svg"/></svg>
            </div>
            <div class="sidebar-header-logo">
            <svg class="bi me-2" width="40" height="40"><use xlink:href="#icon"/></svg>
            </div>
            <!-- <div class="profile-userpic">
              <img src="images/sample.jpg" class="img-circle" alt="">
            </div>
            END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE 
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                Michael Latagan
              </div>
              <div class="profile-usertitle-job">
                Admin
              </div>
            </div> -->
            
            <ul class="list-unstyled components">
                <li>
                    <a href="/statusdashboard" class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-chart-pie"></i>
                    </div>
                    <span class="nav__label">Dashboard</span> 
                    </a>
                    <!-- <div class="collapse list-unstyled" id="dashboard">
                            <a class="subMenu" href="/statusdashboard"><label>Overview</label></a>
                            <a class="subMenu" href="/client"><label>Active Client</label></a>
                            <a class="subMenu" href="/"><label>Reports</label></a>
                    </div> -->
                </li>
                <li>
                    <a data-toggle="collapse" href="#clients" class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-user-tie"></i>
                    </div>
                    <span class="nav__label">Clients</span> 
                    </a>
                    <div class="collapse list-unstyled" id="clients">
                            <a class="subMenu" href="/client"><label>Active Client</label></a>
                            <a class="subMenu" href="/addclient_jobsite"><label>Add New Client</label></a>
                            <a class="subMenu" href="/"><label>Jobsite</label></a>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#joborder"  class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-briefcase"></i> 
                    </div>
                    <span class="nav__label"></span> Job Orders
                  
                    </a>
                    <div class="collapse list-unstyled" id="joborder">
                            <a class="subMenu" href="/joborder"><label>All Job Orders</label></a>
                            <a class="subMenu" href="/selectclient"><label>Add Job Order</label></a>
                            <a class="subMenu" href="/"><label>Job Report</label></a>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#applicant" class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-users"></i>
                    </div>
                    <span class="nav__label">Applicants</span> 
                    </a>
                    <div class="collapse list-unstyled" id="applicant">
                            <a class="subMenu" href="/applicant_list"><label>Applicant List</label></a>
                            <a class="subMenu" href="/selectposition"><label>Add New Applicant</label></a>
                            <a class="subMenu" href="/"><label>Applicant Report</label></a>
                    </div>
                    
                </li>
                <li>
                    <a href="/deployment" class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-paper-plane"></i>
                    </div>
                    <span class="nav__label">Deployment</span> 
                    </a>
                </li>
                <li>
                    <a href="#" class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-clipboard-list"></i>
                    </div>
                    <span class="nav__label">Marketing Pipeline</span> 
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#account" class="sideMenu">
                    <div class="icon-container">
                    <i class="fas fa-user-cog"></i>
                    </div>
                    <span class="nav__label">Account</span> 
                    </a>
                    <div class="collapse list-unstyled" id="account">
                            <a class="subMenu" href="/profile"><label>Profile</label></a>
                            <a class="subMenu" href="/selectposition"><label>Change Password</label></a>
                            <a class="subMenu" href="/"><label>Applicant Report</label></a>
                    </div>
                    
                </li>
                
                
            </ul>
      </nav>

  

    
<!-- <div class="top-nav-container">
  
<div class="toggle" onclick="toggleMenu();"> </div> 
<div class="search-container">
  <form action="" class="search-content">
    <input type="search" placeholder="Search" aria-label="Search" class="search-box"/>
    <i class="fas fa-search search-icon"></i>
  </form>
</div> -->

<!--<nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="nav-content">
      <div class="logo"><a href="#">
        
      </a></div>
        <div class="links">
        <ul class="links">
          <li><i class="fas fa-chart-pie" style="margin-right: 20px;"></i><span class="nav__label">Dashboard</span> </li>
          <li>
            <input type="checkbox" id="show-features">
            <label for="show-features">Clients</label>
            <ul>
              <li><a href="/client">Active Clients</a></li>
              <li><a href="/addclient_jobsite">Add Client</a></li>
              <li><a href="#">Report</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Services</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Job Orders</label>
            <ul>
              <li><a href="#">All Job Orders</a></li>
              <li><a href="#">Add Job Order</a></li>
              <li><a href="#">View Job Order</a></li>
              <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Feedback</a></li>
        </ul>
        </div>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav> -->
  
              <!--  <nav class="navbar">
              
                <div class="toggle" onclick="toggleMenu();"> </div>
                <ul class="nav nav-pills justify-content-end">
                    
                  <form class="form-inline my-2 my-lg-0">
                    
                    <input class="form-control mr-sm-3"  placeholder="Search" aria-label="Search">
                    <i class="fas fa-search"></i>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    
                  </form>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/sample.jpg" width="40" height="40" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown right">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Change Password</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Settings</a>
                    </div>
                  </li>
                  
                </ul>
              
                </nav>
          
          
<nav class="navbar navbar-expand-lg navbar-light justify-content-end">

  <div class="row justify-content-end">
  <div class="col-lg-6">
  <div class="toggle" onclick="toggleMenu();"> </div>
  </div>
    <div class="col-lg-6">
    <div class="collapse navbar-collapse" id="navbarScroll">
    
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown" aria-expanded="false">
                <img src="images/sample.jpg" width="40" height="40" class="avatar img-fluid rounded-circle mr-1" alt="Img"> <span class="text-dark"></span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
								<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart align-middle mr-1"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings &amp; Privacy</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Sign out</a>
							</div>
						</li>
    </div>  

    </div>
  </div>
</nav>

<nav class="navbar navbar-expand navbar-light navbar-bg ">
        <div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<div class="toggle" onclick="toggleMenu();"> </div>
						</div>
						<div class="col-6 text-right">
							<p class="mb-0">

				<ul class="navbar-nav aign-self-end">
          <form class="d-none d-sm-inline-block">
            <div class="input-group input-group-navbar">
              <input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
              <div class="input-group-append">
                <button class="btn" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search align-middle"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
              </div>
            </div>
          </form>
					<li class="nav-item px-2 dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Main Menu
            </a>
						<div class="dropdown-menu dropdown-menu-left dropdown-mega" aria-labelledby="servicesDropdown">
							<div class="d-md-flex align-items-start justify-content-start">
								<div class="dropdown-mega-list">
									<div class="dropdown-header">Home</div>
									<a class="dropdown-item" href="#">Active Clients</a>
									<a class="dropdown-item" href="#">Dashboard</a>
									<a class="dropdown-item" href="#">Applicants</a>
									<a class="dropdown-item" href="#">Recruitment</a>
									<a class="dropdown-item" href="#">Laison</a>
									<a class="dropdown-item" href="#">Processing</a>
									<a class="dropdown-item" href="#">Admin</a>
									<a class="dropdown-item" href="#">Employee</a>
									<a class="dropdown-item" href="#">Frontdesk</a>
								</div>

							</div>
						</div>
					</li>
				</ul>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown" aria-expanded="false">
                <img src="images/sample.jpg" width="40" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood"> <span class="text-dark">Michael Latagan</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
								<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart align-middle mr-1"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings &amp; Privacy</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
							</p>
						</div>
					</div>
				</div>


</nav>
--> 
<main class="main">
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="top-nav-container">
              <div class="toggle" onclick="toggleMenu();"> </div>
             
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (Auth::user()->role == '1' ) <span >Admin</span>
                                    @elseif (Auth::user()->role == '2') <span >User</span>
                                    @endif   | {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <span class="dropdown-item">
                                    @if (Auth::user()->role == '1' ) <span >Admin</span>
                                    @elseif (Auth::user()->role == '2') <span >User</span>
                                    @endif  
                                    </span>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      
        <main >
            <div class="content">
          <div class="container-fluid">
          @show
          @yield('content')
              
          </div>  
          </div>
        </main>
      </div>
            
      
      <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted align-content-center">
            
						<div class="col-6 text-left footer-brand">
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
						<div class="col-6 text-right footer-brand">
							<p >
								© 2021 - <a href="index.html">RRJM International Manpower Services</a>
							</p>
						</div>
</div>
				</div>
			</footer>    
      
      </main>
     
</div>


    


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="{{ url('js/app.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('scripts')
    @section('script')
    <script>
 
</script>
            @if(Session::has('client_added'))
            <script>
              swal("Great Job!", "{!! Session::get('client_added') !!}","Success",{
                icon: "success",
                button:"OK"

              })
            </script>
            @endif
              
   <!--     <script>
      $(document).on('click', 'ul li', function(){
          $(this).addClass('active').siblings().removeClass('active')
        })
      </script>
      -->
      <script>
        
      </script>
</body>


</html>