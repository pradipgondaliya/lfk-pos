<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
<title>LFK | Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="dashboard.html" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="dashboard.html" class="logo-small">
<img src="assets/img/logo-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search Here ...">
<div class="search-addon">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</div>
</div>
<a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
<img src="assets/img/flags/singapore.png" alt="" height="20">
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/china.png" alt="" height="16"> China
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/fr.png" alt="" height="16"> France
</a>

</div>
</li>


<li class="nav-item dropdown">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<img src="assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">4</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Titles Goes here</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Task name Changed</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-06.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">LFK POS System</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>

<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">New Task 2</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6>John Doe</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="signin.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="generalsettings.html">Settings</a>
<a class="dropdown-item" href="signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="index.html"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/cash.svg" alt="img"><span> Order</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="#">Order Pro Forma (PS)</a></li>
<li><a href="#">Orders</a></li>
<li><a href="#">Sessions</a></li>
<li><a href="#">Payments</a></li>
<li><a href="#">Customers</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Products</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="#">Proucts</a></li>
<li><a href="#">Proucts Variants</a></li>
<li><a href="#">Discount & Loyalty</a></li>
<li><a href="#">Gift Card & e-Wallet</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/edit.svg" alt="img"><span> Reporting</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="#">Orders</a></li>
<li><a href="#">Sales Details</a></li>
<li><a href="#">Sessions Report</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Configuration</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="#">Settings</a></li>
<li><a href="#">Payment Methods</a></li>
<li><a href="#">Coins & Bills</a></li>
<li><a href="#">Point of Sale</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Products</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="#">POS Product Category</a></li>
 <li><a href="#">Attributes</a></li>
</ul>
</li>

<li class="">
<a href="javascript:void(0);"><img src="assets/img/icons/log-out.svg" alt="img"><span> Logout</span> </a>

</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
<h6>Total Purchase Due</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
<h6>Total Sales Due</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash2">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash3.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
<h6>Total Sale Amount</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash3">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash4.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
<h6>Total Sale Amount</h6>
</div>
</div>
</div>

</div>
<!-- this button for POS system-->
<div class="card">
    <div class="row">
        <div class="col-md-4">

            <div class="pos-btn">
                <a href="pos.html" class="btn btn-custom">Start Sessions</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-lg-12 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h5 class="card-title mb-0">Purchase & Sales</h5>
<div class="graph-sets">
<ul>
<li>
<span>Sales</span>
</li>
<li>
<span>Purchase</span>
</li>
</ul>
<div class="dropdown">
<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
 2022 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li>
        <a href="javascript:void(0);" class="dropdown-item">2023</a>
        </li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2022</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2021</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2020</a>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="sales_charts"></div>
</div>
</div>
</div>

</div>

</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>