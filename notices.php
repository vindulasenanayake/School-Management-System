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
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="images/logo1.png" width="48" height="48" alt="Lumbini College"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">



            </a>

        </li>

        <li class="float-right">
            

            <li><a href="admin_pannel.php"><b>Admin Panel</b></a></li>
            <li class="hidden-xs"></li>
            <li><a href="ac_admin.php"><b>Academic and Publications</b></a></li>
            <li class="hidden-xs"></li>
            <li><a href="logout.php"><b>Logout</b></a></li>
            <li class="hidden-xs"></li>
        </li>
    </ul>
</nav>

<!-- modal start -->
<div id="add_notice" class="modal">
  <div class="modalContent">
    <div class="modalContentInner">

      <form id="add_notice_form">

        <h2>Add Notice</h2>

        <div class="outer_textbox">
          <div class="ErrorClass" id="titleError">
          </div>
          <label for="Title" class="labelClass_textBox"><b>Title</b></label>
          <input type="text" placeholder="Enter tiltle here ...." name="tile" id="title" required>
        </div>

        <div class="outer_textarea">
          <div class="ErrorClass" id="contentError">
          </div>
          <div for="content" class="labelClass_textarea"><b>Content</b></div>
          <textarea name="content" id='content' name="content" placeholder="Enter New Notice here...."></textarea>
        </div>

        <div class="outer_textbox">
          <div class="ErrorClass" id="writerError">
          </div>
          <label for="project_code" class="labelClass_textBox"><b>Writer</b></label>
          <input type="text" placeholder="Enter writer name here..." name="writer" id="writer" required>
        </div>

        <div class="outer_selectDropDown">
          <div class="ErrorClass" id="receiverError">
          </div>
          <label for="receiver" class="labelClass_selectDropDown"><b>Receiver</b></label>
          <div class="custom-select">
            <select id="receiver">
              <option value="0">Select reciver</option>
              <option value="1">All</option>
              <option value="2">Students</option>
              <option value="3">Teachers</option>
            </select>
          </div>
        </div>

        <div class="clearfix">

            <button type="button" id="no" class="signupbtn clear">cancel</button>
            <button type="button" id="yes" class="signupbtn delete">Publish</button>

        </div>

      </form>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- delete modal start -->
<div id="delete_notice" class="modal">
  <div class="modalContent">
    <div class="modalContentInner">



        <h2>Delete notice</h2>
          <p> Are you sure you want to delete thia notice ?</p>

        <div class="clearfix">

            <button type="button" id="delete_notice_no" class="signupbtn clear">No</button>
            <button type="button" id="delete_notice_yes" class="signupbtn delete">Yes</button>

        </div>


    </div>
  </div>
</div>
<!-- delete modal end -->

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
                                <h4>Academic and Publications</h4>

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
                <h2>Noticeboard
                <small>Welcome to Lumbini College !</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">


            </div>
        </div>
    </div>
    <div class="container-fluid">
      <div class="col-lg-6 col-md-12">
          <button class="btn btn-primary btn-round btnCss" id="add_notice_button">Add Notice</button>
      </div>
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
                              <li class="remove">
                                  <a id="notice_delete_click" role="button" class="boxs-close"><span class="idContainer hide">IDNUM</span><i class="zmdi zmdi-delete"></i></a>
                              </li>
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
<script src="assets/js/pages/notices.js"></script>
</body>


</html>
