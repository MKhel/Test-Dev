@extends('layouts.svg')
<!--<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href="{{ url('css/dashboard-style.css') }}" rel="stylesheet">
</head> 
<body>
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header"> 
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>RRJM</span>
            </h3>
                <label for="sibebar-toggle" class="ti-menu-alt"></label> 
        </div>

        <div class="sidebar-menu">
        <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >
                    <svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#home"/></svg>Dashboard</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="active"><a href="/statusdashboard" class="nav-link link-success">Overview</a></li>
                              <li><a href="/client" class="nav-link link-success">Active Client Dashboard</a></li>
                              <li><a href="#" class="nav-link link-success">Reports</a></li>
                    </ul>
                    <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              
                            </ul>
                        </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#pageSubmenu" ><svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#geo-fill"/></svg>Active Client</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="/selectclient" class="nav-link link-success">Add Job Order</a></li>
                            <li><a href="/addclient_jobsite" class="nav-link link-success">Add New Client</a></li>
                            <li><a href="/joborder" class="nav-link link-success">Job Oders</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#DeploySubmenu" data-toggle="collapse" aria-expanded="false" ><svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#collection"/></svg>Deployment</a>
                    <ul class="collapse list-unstyled" id="DeploySubmenu">
    
                            <li><a href="dashboard" class="nav-link link-success">Status</a></li>
                            <li><a href="#" class="nav-link link-success">Updates</a></li>
                            <li><a href="#" class="nav-link link-success">Reports</a></li>
                          
                    </ul>
                </li>
                <li>
                    <a href="#"><svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;"><use xlink:href="#table"/></svg>Marketing Pipeline</a>
                </li>
                <li>
                    <a href="#"><svg class="bi me-2" width="20" height="20" style="margin-right: 10px; color: green;" ><use xlink:href="#people-circle"/></svg>Account</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">            
            </div>

            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <img src="images/sample.jpg" alt="">
            </div>
        </header>

        <main>
        @show
        @yield('content')
        </main>
    </div>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collapsible Sidebar</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ url('css/dashboard-style.css') }}" rel="stylesheet">
</head>

<body>
  <div class="page-container">
    <nav class="nav">
      <div class="nav__border"></div>
      <a href="#" class="nav__link">
        <div class="nav__icon-container">
          <i class="material-icons">dashboard</i>
        </div>
        <span class="nav__label">Dashboard</span>
      </a>
      <a href="#" class="nav__link">
        <div class="nav__icon-container">
          <i class="material-icons">alarm</i>
        </div>
        <span class="nav__label">Alerts</span>
      </a>
      <a href="#" class="nav__link">
        <div class="nav__icon-container">
          <i class="material-icons">extension</i>
        </div>
        <span class="nav__label">Plugins</span>
      </a>
      <a href="#" class="nav__link">
        <div class="nav__icon-container">
          <i class="material-icons">power_settings_new</i>
        </div>
        <span class="nav__label">Log Out</span>
      </a>
    </nav>
    <main class="main">
    </main>
  </div>
  <script>
    // Navigation
    {
      const collapsedClass = "nav--collapsed";
      const lsKey = "navCollapsed";
      const nav = document.querySelector(".nav");
      const navBorder = nav.querySelector(".nav__border");
      if (localStorage.getItem(lsKey) === "true") {
        nav.classList.add(collapsedClass);
      }
      navBorder.addEventListener("click", () => {
        nav.classList.toggle(collapsedClass);
        localStorage.setItem(lsKey, nav.classList.contains(collapsedClass));
      });
    }
  </script>
</body>

</html>