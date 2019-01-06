<?php
    session_start();

    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
?>

<!doctype html>


<title>Lumbini College </title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
<link rel="stylesheet" href="assets/css/model.css">
<link rel="stylesheet" href="assets/css/_button.css">
<link rel="stylesheet" href="assets/css/_selectDropDown.css">
<link rel="stylesheet" href="assets/css/_textArea.css">
<link rel="stylesheet" href="assets/css/_textbox.css">
<link rel="stylesheet" href="assets/css/notices.css">
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="images/logo1.png" type="image/png">
</head>
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">



            </a>

        </li>

        <li class="float-right">
            


            <li><a href="logout.php"><b>Logout</b></a></li>
            <li class="hidden-xs"></li>
            <li><a href="prin_admin.php"><b>Previous</b></a></li>
            <li class="hidden-xs"></li>
        </li>
    </ul>
</nav>





<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">

    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">

                            <div class="detail">
                            <br>
                            <br>
                                <h4>Notice</h4>

                            </div>
                        </div>
                    </li>
                    <br>
                    <br>




                    <br>
                    <br>

        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">

                    <li>
                        <small class="text-muted">Location: </small>
                        <p>Lumbini College, Havelock Town, Colombo 05, Sri Lanka</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>info@lumbiniollege.sch.lk.</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p> (+94)11 2582006.</p>
                        <hr>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>


<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Notice Board
                <small>Welcome to Lumbini College !</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">


            </div>
        </div>
    </div>
    <div class="container-fluid">

      <div class="row clearfix" id="new_notice_content">

      </div>

      <div class="row clearfix" id="notice_content">
            <div id="BLOCK">
              <div class="col-lg-12 col-md-12" id="IDNUM">
                  <div class="card">
                      <div class="header">
                          <h2><strong>ID:</strong> <span id="id_conatain">IDNUM</span></h2>
                          <small>Created by USER at: DATE </small>
                          <ul class="header-dropdown">
                              
                          </ul>
                      </div>
                      <div class="body">
                          <h6>This is Note</h6>
                          <p class="m-b-0">CONTENT
                          <br><br> WRITER
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>ID:</strong> 25823</h2>
                        <small>Created by Admin at: 5 Nov, 2018</small>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-delete"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h6>This is Note</h6>
                        <p class="m-b-0">There will be a techers meeting on 9th of november from 1.00 p.m onward in the school main hall. All the teachers are requested to be present on that meeting.
                        <br><br> Principal
                        </p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>ID:</strong> 25824</h2>
                        <small>Created by Admin at: 1st Nov, 2018</small>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-delete"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h6>This is Note</h6>
                        <p class="m-b-0">There will be a techers meeting on 1st of november from 1.00 p.m onward in the school main hall. All the teachers are requested to be present on that meeting.
                        <br><br> Principal
                        </p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/principal_notices.js"></script>
</body>


</html>
