<?php
    session_start();
    header('Cache-Control: no-cache');
    header('Pragma: no-cache');
    
    if(isset($_POST["btn_save"]))
    {
        $user = $_SESSION["user"];
        $cont_name = $_POST["cont_name"];
        $cont_tele = $_POST["cont_tele"];
        $com_name = $_POST["com_name"];
        $com_add = $_POST["com_add"];
        $br_no = $_POST["br_no"];
        $bus_type = $_POST["bus_type"];
        $email = $_POST["email"];
       
        
         include("connection.php");
        
        $result3 = mysqli_query($con,"UPDATE client_info SET com_name='$com_name',com_add='$com_add', br_no='$br_no', bus_type='$bus_type' WHERE username='$user'");
        
        $result4 = mysqli_query($con,"UPDATE client_contact SET cont_name='$cont_name', cont_tele='$cont_tele', email='$email' WHERE username='$user'");
        
        header('Location: client_profile.php');
   
    }

    if(!isset($_SESSION["user"]) && $_SESSION["type"] != 2 )
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM upload WHERE username='$user'");
        $row1 = mysqli_fetch_row($result1); 
                
        $result2 = mysqli_query($con, "SELECT * FROM upload WHERE username='$user'");
        $row2 = mysqli_fetch_row($result2);
        
        $_SESSION["real_name"] = $row1[1];
        $_SESSION["pic_path"] = $row1[4];
        
        
    }   
?>

<html>
    <head>
        
        <title>Admin Panel | Lumbini College</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">
</head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-inverse header">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><b>Home</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="ac_admin.php"><b>Academic and Publications</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="logout.php"><b>logout</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="te admin.php"><b>Previous</b> </a></li>
                             <li class="hidden-xs"></li>  
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

       <section>

            <div class="banner-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h1>Teacher Panel | Lumbini College</h1>
                            
                        </div>
                    </div>
                </div>
            </div>

    
    <body class="font">  
    
             
            
        <div class="container">
            <div class="row">
                <div class="col-12 left-sidebar">
                    <div class="card-name">                        
                        <img src="<?php echo $_SESSION['pic_path']?>?<?php echo rand(1,3000); ?>?<?php echo rand(1,3000); ?>" width="100%">
                    </div>

                    <form action="client_profile.php" method="POST" enctype="multipart/form-data">
                        <label class="btn btn-wide btn-blue">
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="return upload_btn(this)" accept=""><center>Choose Assignment</center></label>
                        <input type="submit" value="Upload Image" name="upload" id="upload" class="btn btn-wide btn-green" disabled>
                         <input type="reset" value="Cancel" name="cancel_up" id="cancel_up" class="btn btn-wide btn-red" onclick="cancel_btn()" disabled>
                    </form>

                    <div class="alert-fail" hidden>
                        <span class="close-btn-fail" id="fail_type" onclick="fail_type_close()">&times;</span>
                        Only .jpg .jpeg or .png files can be uploaded   
                    </div>

                    <div class="alert-fail" hidden>
                        <span class="close-btn-fail" id="fail_size" onclick="fail_size_close()">&times;</span>
                        File too large. Max 1MB.
                    </div>

                    <div class="alert-fail" hidden>
                        <span class="close-btn-fail" id="fail_error" onclick="fail_error_close()">&times;</span>
                        Error uploading image. Try again later.
                    </div>

                    <?php              
                        if(isset($_POST["upload"]))
                        {
                            $target_dir = "images/uploads/";
                            $user = $_SESSION["user"];
                            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
                            $valid = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            echo $imageFileType;
                            // $filename = pathinfo($_FILES["fileToUpload"])

                            if ($_FILES["fileToUpload"]["size"] > 1000000)
                            {
                                 echo "<script> fail_size.parentElement.style.display='block'; </script>";
                                $valid = 0;
                            }

                            if( $imageFileType != "pdf") 
                            {
                                echo "<script> fail_type.parentElement.style.display='block'; </script>";
                                $valid = 0;
                            }

                            if ($valid != 0) 
                            {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$user.".".$imageFileType)) 
                                {
                                    $pro_pic = $target_dir.$_SESSION["user"].".".$imageFileType;
                                    include("connection.php");
                                    $result3 = mysqli_query($con, "UPDATE upload SET logo='$pro_pic' WHERE username='$user'");
                                    echo "<script> window.location.href = window.location.href; </script>";
                                } 
                                else
                                {
                                    echo "<script> fail_error.parentElement.style.display='block'; </script>";
                                }

                            }
                        }



                    ?>
               
        
        
        <script>
            
            function edit(){
                document.getElementById("cont_name").disabled = false;
                document.getElementById("cont_tele").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("com_name").disabled = false;
                document.getElementById("com_add").disabled = false;
                document.getElementById("br_no").disabled = false;
                document.getElementById("bus_type").disabled = false;               
                document.getElementById("btn_save").disabled = false;
                document.getElementById("btn_cancel").disabled = false;
                document.getElementById("btn_edit").disabled = true;
            }
            
             function cancel(){
                document.getElementById("cont_name").disabled = true;
                document.getElementById("cont_tele").disabled = true;
                document.getElementById("email").disabled = true;
                document.getElementById("com_name").disabled = true;
                document.getElementById("com_add").disabled = true;
                document.getElementById("br_no").disabled = true;
                document.getElementById("bus_type").disabled = true;               
                document.getElementById("btn_save").disabled = true;
                document.getElementById("btn_cancel").disabled = true;
                document.getElementById("btn_edit").disabled = false;
             }
            
            function upload_btn(file) {
                var ext = file.files[0].name.split('.').pop();                
                var valid = 1;
                var FileSize = file.files[0].size / 10000 / 10000; 
                
                if (FileSize > 1) 
                {
                    fail_size.parentElement.style.display='block';
                    valid = 0;   
                }                 
                else if ( ext == "PDF" ) 
                {
                    valid = 1 
                }
                else 
                {
                    fail_type.parentElement.style.display='block';
                    valid = 0
                }
                
                if (valid == 1) 
                {
                    document.getElementById("upload").disabled = false;
                    document.getElementById("cancel_up").disabled = false; 
                    fail_size.parentElement.style.display='none';
                    fail_type.parentElement.style.display='none';
                }
                else
                {
                    document.getElementById("upload").disabled = true;
                    document.getElementById("cancel_up").disabled = true;    
                }
            }
            
            function fail_type_close() {
                fail_type.parentElement.style.display='none';
            }
            
            function fail_size_close() {
                fail_size.parentElement.style.display='none';
            }
            
            function fail_error_close() {
                fail_error.parentElement.style.display='none';
            }
            
            function cancel_btn() {
                document.getElementById("upload").disabled = true;
                document.getElementById("cancel_up").disabled = true;
                fail_type.parentElement.style.display='none';
                fail_size.parentElement.style.display='none';
                fail_error.parentElement.style.display='none';
            }
             
            
        </script>
        
        <?php include("footer.php"); ?>
    </body>
</html>

