<?php
    session_start();
   
    if(isset($_POST["btn_save"]))
    {
        $user = $_SESSION["user"];
        $work_xp = $_POST["work_xp"];
        $prv_emp = $_POST["prv_emp"];
        $func = $_POST["func"];
        $undergrad = $_POST["undergrad"];
        $ug_uni = $_POST["ug_uni"];
        $postgrad = $_POST["postgrad"];
        $pg_uni = $_POST["pg_uni"];     
          
        
        include("connection.php");
        
        $result1 = mysqli_query($con,"UPDATE cust_qual_deg SET undergrad='$undergrad', ug_uni='$ug_uni', postgrad='$postgrad', pg_uni='$pg_uni' WHERE username='$user'");
        
        $result2 = mysqli_query($con,"UPDATE cust_qual SET work_xp='$work_xp', prv_emp='$prv_emp', function='$func' WHERE username='$user'");
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 3)
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("connection.php");

        $result3 = mysqli_query($con, "SELECT * FROM cust_qual_deg WHERE username='$user'");
        $row1 = mysqli_fetch_row($result3);

        $result4 = mysqli_query($con, "SELECT * FROM cust_qual WHERE username='$user'");
        $row2 = mysqli_fetch_row($result4);        
       
    } 
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> My Qualifications | Hired!</title>
        <link rel="icon" href="images/favicon.png" type="image/png">
    </head>  
    
    <body class="font">  
        
        
        <div class="nav-fixed">
            <a href="home.php"> <img src="images/logo.png"></a> 
            <a href="logout.php" class="nav-page"> Logout </a>     
            <a href="profile.php" class="nav-page "> Student Profile </a> 
            
           
            <img class="nav-pro-pic" src="<?php echo $_SESSION['pic_path']?>?<?php echo rand(1,3000);?>">
        </div> 
       
        
            
        

                    <?php              
                        if(isset($_POST["upload"]))
                        {
                            $target_dir = "cv/";
                            $user = $_SESSION["user"];
                            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
                            $valid = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            if ($_FILES["fileToUpload"]["size"] > 5000000)
                            {
                                echo "<script> fail_size.parentElement.style.display='block'; </script>";
                                $valid = 0;
                            }

                            if($imageFileType != "pdf") 
                            {
                                echo "<script> fail_type.parentElement.style.display='block'; </script>";
                                $valid = 0;
                            }

                            if ($valid != 0) 
                            {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$user.".".$imageFileType)) 
                                {
                                    $cv_path = $target_dir.$_SESSION["user"].".".$imageFileType;
                                    include("connection.php");
                                    $result3 = mysqli_query($con, "UPDATE cust_qual SET cv_path='$cv_path' WHERE username='$user'");
                                    echo "<script> window.location.href = window.location.href; </script>";
                                } 
                                else
                                {
                                    echo "<script> fail_error.parentElement.style.display='block'; </script>";
                                }

                            }
                        }



                    ?>
                <form action="qualification.php" method="POST">

                </div>

                <div class="col-3">

                </div>

                <div class="col-6">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>Your Academic Qualifications</h1><br></center>
                            </div>
                        </div>
                        <hr>
                        <div class="row">                                
                            <div class="col-3 lbl2">Undergraduate Degree</div>
                            <div class="col-9">
                                <select name="undergrad" id="undergrad" disabled>
                                    <option value="<?php echo $row1[1]; ?>" hidden><?php echo $row1[1]; ?></option>
                                    <option value="0">None</option>      
                                    <option value="BA">Bachelor of Arts - BA</option>
                                    <option value="BSc">Bachelor of Science - BSc.</option>                         
                                </select>   
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl2">University / Institiution</div>
                            <div class="col-9">
                                <select name="ug_uni" id="ug_uni" disabled>
                                    <option value="<?php echo $row1[2]; ?>" hidden><?php echo $row1[2]; ?></option>
                                    <option value="0">None</option>                         
                                    <option value="University of Colombo">University of Colombo</option>                         
                                    <option value="University of Moratuwa">University of Moratuwa</option>                      
                                    <option value="University of Kelaniya">University of Kelaniya</option>                      
                                    <option value="University of Ruhuna">University of Ruhuna</option>                         
                                    <option value="University of Jaffna">University of Jaffna</option>                         
                                    <option value="NIBM">NIBM</option>       
                                    <option value="NSBM">NSBM</option>       
                                    <option value="SLIIT">SLIIT</option>     
                                    <option value="Foreign University">Foreign university</option>                      
                                </select>
                            </div>
                        </div>

                        <br>
                        
                        <div class="row">                                
                            <div class="col-3 lbl2">Postgraduate Degree</div>
                            <div class="col-9">
                                <select name="postgrad" id="postgrad" disabled>
                                    <option value="<?php echo $row1[3]; ?>" hidden><?php echo $row1[3]; ?></option>
                                    <option value="0">None</option>
                                    <option value="PhD.">Doctor of Philosophy - PhD.</option>
                                    <option value="MSc.">Master of Science - MSc.</option>                         
                                </select>                    


                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl2">University / Institiution</div>
                            <div class="col-9">
                                <select name="pg_uni" id="pg_uni" disabled>
                                    <option value="<?php echo $row1[4]; ?>" hidden><?php echo $row1[4]; ?></option>
                                    <option value="0">None</option>                         
                                    <option value="University of Colombo">University of Colombo</option>                         
                                    <option value="University of Moratuwa">University of Moratuwa</option>                      
                                    <option value="University of Kelaniya">University of Kelaniya</option>                      
                                    <option value="University of Ruhuna">University of Ruhuna</option>                         
                                    <option value="University of Jaffna">University of Jaffna</option>                         
                                    <option value="NIBM">NIBM</option>       
                                    <option value="NSBM">NSBM</option>       
                                    <option value="SLIIT">SLIIT</option>     
                                    <option value="Foreign University">Foreign university</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        
                        <hr>
                         <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>Your Work Experience</h1><br></center>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3 lbl">No. of years</div>
                            <div class="col-9">
                                   <input type="number" id="work_xp" name="work_xp" placeholder="# years of past work expeience" value="<?php echo $row2[1];?>" disabled>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl2">Previous employment at</div>
                            <div class="col-9">
                                   <input type="text" id="prv_emp" name="prv_emp" placeholder="Previous company" value="<?php echo $row2[2];?>" disabled>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Function</div>
                            <div class="col-9">
                                <select name="func" id="func" disabled>
                                    <option value="<?php echo $row2[3]; ?>" hidden><?php echo $row2[3]; ?></option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Customer Support">Customer Support</option>
                                    <option value="IT">IT</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Production">Production</option>
                                    <option value="R&D">Reasearch and Development</option>
                                    <option value="Sales and Distribution">Sales and Distribution</option>
                                </select>
                            </div>
                        </div>

                        <br>                       

                    </div>

                </div>


                <div class="col-3">

                </div>

                
                </form>
            </div>
        </div>

        
        
        <script>
            
            function edit(){
                document.getElementById("undergrad").disabled = false;
                document.getElementById("ug_uni").disabled = false;
                document.getElementById("postgrad").disabled = false;
                document.getElementById("pg_uni").disabled = false;
                document.getElementById("work_xp").disabled = false;
                document.getElementById("prv_emp").disabled = false;
                document.getElementById("func").disabled = false;               
                document.getElementById("btn_save").disabled = false;
                document.getElementById("btn_cancel").disabled = false;
                document.getElementById("btn_edit").disabled = true;
                
            }
            
             function cancel(){
                document.getElementById("undergrad").disabled = true ;
                document.getElementById("ug_uni").disabled = true;
                document.getElementById("postgrad").disabled = true;
                document.getElementById("pg_uni").disabled = true;
                document.getElementById("work_xp").disabled = true;
                document.getElementById("prv_emp").disabled = true;
                document.getElementById("func").disabled = true;               
                document.getElementById("btn_save").disabled = true;
                document.getElementById("btn_cancel").disabled = true;
                document.getElementById("btn_edit").disabled = false;
                
            }
            
            function upload_btn(file) {
                var ext = file.files[0].name.split('.').pop();                
                var valid = 1;
                var FileSize = file.files[0].size / 1024 / 1024; 
                
                if (FileSize > 5) 
                {
                    fail_size.parentElement.style.display='block';
                    valid = 0;   
                }                 
                else if ( ext == "pdf" || ext == "PDF") 
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

