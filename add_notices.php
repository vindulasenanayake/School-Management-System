<?php 
    session_start();
    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 3 )
        {
            header('Location: login.php');
        } 
?>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title> Add Notices | Lumbini College!</title>
        <link rel="icon" href="images/logo1.png" type="image/png"> 
    </head>  
    
    <body class="font">
        
    <?php       
       
        if(isset($_POST["btn_save"]))
        {
            
            include("connection.php");

            $user = $_SESSION["user"];
            $title = $_POST["title"];
            $function = $_POST["function"];
            $job_desc = $_POST["job_desc"];
            $req = $_POST["req"];
            $photo = "";
            $ad = "";
            
            
            
                        
            $target_dir = "images/ad/";
            
            if(isset($_FILES["ad"])){
                $target_file = $target_dir.basename($_FILES["ad"]["name"]);
                $valid = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                if ($_FILES["ad"]["size"] > 2097152)
                {
                    echo "<script> fail_size.parentElement.style.display='block'; </script>";
                    $valid = 0;
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
                {
                    echo "<script> fail_type.parentElement.style.display='block'; </script>";
                    $valid = 0;
                }

                if ($valid != 0) 
                {
                    $ad = $target_dir.$user.rand().".".$imageFileType;

                    if (move_uploaded_file($_FILES["ad"]["tmp_name"], $ad)) 
                    {                    
                                            
                    } 
                    else
                    {
                        echo "<script> fail_error.parentElement.style.display='block'; </script>";
                    }

                }
            }
            $result4 = mysqli_query($con, "INSERT INTO client_job_vc (username, title, function, job_desc, req, photo, ad) VALUES ('$user', '$title', '$function', '$job_desc', '$req', '$photo', '$ad') ");                
            
            echo "<script> window.location.href = 'jobs.php'; </script>";
            //header("location: jobs.php");
            
              
            
        }

               
                           
        ?>
        
        
        <div class="nav-fixed">
          <a href="ac_admin.php"> <img src="images/logo.png"></a>
            

            <a href="logout.php" class="nav-page"> Logout </a>       
            <a href="ac_admin.php" class="nav-page">Academic and publicatio</a> 
            <a href="admin_pannel.php" class="nav-page">Admin panel</a>       
            
            <a class="nav-name">Welcome <?php echo $_SESSION['real_name']; ?>!</a>
            <img class="nav-pro-pic" src="<?php echo $_SESSION['pic_path'];?>">
        
        </div> 
             
        
        
        <div class="container">
            <div class="row">
                <div class="col-3 left-sidebar center">
                    <div class="card-name"> 
                        <img src="<?php echo $_SESSION['pic_path'];?>?<?php echo rand(1,3000); ?>" width="100%">
                    </div>
                    
                    <div class="card-name">           
                        <div class="row">
                            <div class="col-12">
                                <br>
                                Posting as <br> <strong><?php echo $_SESSION['real_name']; ?></strong><br>&nbsp;
                            </div>
                        </div> 
                    </div>

                    
                </div>

                <div class="col-3">

                </div>
 
                <div class="col-9">
                    <form method="POST" action="add_notices.php" enctype="multipart/form-data">
                        
                    
                    <div class="row">                        
                      
                        <div class="col-4"><a href="notices.php">   
                            <button type="button" class="btn btn-black btn-wide">&larr; Back</button>
                        </a></div>
                        
                        <div class="col-4"><button name="btn_save" id="btn_save" type="submit" class="btn btn-green btn-wide">Save</button></div>
                          
                        <div class="col-4"><button name="btn_cancel" id="btn_cancel" type="reset" class="btn btn-red btn-wide">Reset</button></div>
            
                    </div>

                    <div class="card-profile">
                        <div class="row">
                            <div class="col-3 lbl">Title</div>
                            <div class="col-9">
                                   <input type="text" id="title" name="title" placeholder="Job title" required>
                            </div>
                        </div>
                        
                        <br>
                        
                        

                        <br>
                        
                        <div class="row">
                            <div class="col-3 lbl">Description</div>
                            <div class="col-9">
                                <textarea type="text" id="job_desc" class="textarea" name="job_desc" placeholder="Provide a short job description (300 characters max)" maxlength="300" required></textarea>
                            </div>
                        </div>

                        <br>                          

                        
                        
                        <br>
                        
                        
                        <br> 
                       
                        
                    </form>
                </div>
                
            </div>
     
        
        <script>
            function upload_btn(file) {
                var ext = file.files[0].name.split('.').pop();                
                var valid = 1;
                var FileSize = file.files[0].size / 1024 / 1024; 
                
                if (FileSize > 2) 
                {
                    fail_size.parentElement.style.display='block';
                    valid = 0;   
                }                 
                else if ( ext == "jpg" || ext == "JPG" || ext == "jpeg" || ext == "JPEG" || ext == "png" || ext == "PNG" ) 
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
                    document.getElementById("btn_save").disabled = false;                    
                    fail_size.parentElement.style.display='none';
                    fail_type.parentElement.style.display='none';
                }
                else
                {
                    document.getElementById("btn_save").disabled = true;
                       
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
        </div>
    </body>
</html>

