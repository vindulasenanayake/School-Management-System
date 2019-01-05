<?php
    session_start();
    header('Cache-Control: no-cache');
    header('Pragma: no-cache');
    
    if(isset($_POST["btn_save"]))
    {
      $statusMsg = '';
        $targetDir = "uploads/";
        $grade = $_POST['grade'];
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
       
        
         include("connection.php");
        
        $result3 = mysqli_query($con,"UPDATE upload SET file_name='".$fileName."',com_add='$com_add', br_no='$br_no', bus_type='$bus_type' WHERE username='$user'");
        
       
        
        header('Location: assignment.php');
   
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 3 )
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM upload WHERE file_name='.$fileName.'");
        $row1 = mysqli_fetch_row($result1); 
                
        
        $_SESSION["real_name"] = $row1[1];
        $_SESSION["pic_path"] = $row1[4];
        
        
    }   
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Lumbini College | Academic and Publications</title>
        <link rel="icon" href="images/favicon.png" type="image/png">
    </head>  
    
    <body class="font">  
        
        
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
            
             <a href="ac_admin.php" class="nav-page">Previous</a>
            <a href="logout.php" class="nav-page"> Logout </a>       
                
            
            
        
        </div> 
             
            
        <div class="container">
            <div class="row">
                <div class="col-12 left-sidebar">
                    <div class="card-name">                        
                        <img src="<?php echo $_SESSION['pic_path']?>?<?php echo rand(1,3000); ?>?<?php echo rand(1,3000); ?>" width="100%">
                    </div>

                    <form action="uploadPastPapers.php" method="POST" enctype="multipart/form-data">
                        <label class="btn btn-wide btn-blue">
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="return upload_btn(this)" accept="image/*"><center>Choose Pastpaper</center></label>
                        <input type="submit" value="Upload Pastpaper" name="upload" id="upload" class="btn btn-wide btn-green" disabled>
                         <input type="reset" value="Cancel" name="cancel_up" id="cancel_up" class="btn btn-wide btn-red" onclick="cancel_btn()" disabled>
                    </form>

                    <div class="alert-fail" hidden>
                        <span class="close-btn-fail" id="fail_type" onclick="fail_type_close()">&times;</span>
                        Only .jpg .jpeg .png or .pdf files can be uploaded   
                    </div>

                    <div class="alert-fail" hidden>
                        <span class="close-btn-fail" id="fail_size" onclick="fail_size_close()">&times;</span>
                        File too large. Max 10MB.
                    </div>

                    <div class="alert-fail" hidden>
                        <span class="close-btn-fail" id="fail_error" onclick="fail_error_close()">&times;</span>
                        Error uploading image. Try again later.
                    </div>

                    <?php              
                        if(isset($_POST["upload"]))
                        {
                            $target_dir = "uploads/";
                            $user = $_SESSION["user"];
                            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
                            $valid = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // $filename = pathinfo($_FILES["fileToUpload"])

                            if ($_FILES["fileToUpload"]["size"] > 1000000)
                            {
                                 echo "<script> fail_size.parentElement.style.display='block'; </script>";
                                $valid = 0;
                            }

                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType =!"pdf") 
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
                                    $result3 = mysqli_query($con, "UPDATE upload SET logo='$file_name' WHERE username='$user'");
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
                document.getElementById("file_name").disabled = false;
                document.getElementById("uploaded_on").disabled = false;
                document.getElementById("class").disabled = false;
                              
                document.getElementById("btn_save").disabled = false;
                document.getElementById("btn_cancel").disabled = false;
                document.getElementById("btn_edit").disabled = true;
            }
            
             function cancel(){
                document.getElementById("file_name").disabled = true;
                document.getElementById("uploaded_on").disabled = true;
                document.getElementById("class").disabled = true;
                             
                document.getElementById("btn_save").disabled = true;
                document.getElementById("btn_cancel").disabled = true;
                document.getElementById("btn_edit").disabled = false;
             }
            
            function upload_btn(file) {
                var ext = file.files[0].name.split('.').pop();                
                var valid = 1;
                var FileSize = file.files[0].size / 1024 / 1024; 
                
                if (FileSize > 1) 
                {
                    fail_size.parentElement.style.display='block';
                    valid = 0;   
                }                 
                else if ( ext == "jpg" || ext == "JPG" || ext == "jpeg" || ext == "JPEG" || ext == "png" || ext == "PNG" || ext == "pdf") 
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

