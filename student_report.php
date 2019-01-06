<?php
    session_start();
    
    if(isset($_POST["btn_save"]))
    {
               
        
        include("connection.php");

        
        header('Location: student_report.php');
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 1)
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM student_result WHERE username='$user'");
        $row1 = mysqli_fetch_row($result1);

        $result2 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$user'");
        $row2 = mysqli_fetch_row($result2);

       
    }   
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Report Card | Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        <style>
            body {
            background-image: url("images/sh.jpg");
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
    </head>  
    
    <body class="font">  
        
           <?php              
                        

                        if(!isset($_SESSION["user"]) || $_SESSION["type"] != 1)
                        {
                            header('Location: login.php');
                        }
                        else
                        {
                            $user = $_SESSION["user"];

                            include("connection.php");

                            $result1 = mysqli_query($con, "SELECT * FROM student_result WHERE username='$user'");
                            $row1 = mysqli_fetch_row($result1);

                            $result2 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$user'");
                            $row2 = mysqli_fetch_row($result2);

                            
                        }   


                    ?>
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
          <a href="Student_index.php" class="nav-page"> Previous </a> 
            
            <img class="nav-pro-pic" src="<?php echo $_SESSION['pic_path'];?>?<?php echo rand(1,3000); ?>">
        
        </div> 
        <br>
        <br>
        <br>
        <br>

        
       
        
            
      

                <center>
                	<form action="profile.php" method="POST">

                </div>

                <div class="col-6 center">

                </div>

                <div class="col-6">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>Report Card</h1> <br></center>
                            </div>
                        </div>
                       
                        <hr>
                        <div class="row">                                
                            <div class="col-3 lbl">Name</div>
                            <div class="col-9">
                            
                                <input type="text" id="names" name="names" placeholder="Name" value="<?php echo $row2[1]; ?>"disabled >
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col-3 lbl">Class</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="class" placeholder="eg - 7A" value="<?php echo $row2[3];?>"disabled >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Term</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="term" placeholder="eg - 1" value="<?php echo $row1[1];?>" disabled >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Buddhism</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="buddhism" placeholder="eg - 7A" value="<?php echo $row1[2];?>" disabled >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Mother Language</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="m_language" placeholder="eg - 7A" value="<?php echo $row1[3];?>"disabled >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">English</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="english" placeholder="eg - 7A" value="<?php echo $row1[4];?>" disabled>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Science</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="science" placeholder="eg - 7A" value="<?php echo $row1[5];?>"disabled >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Health</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="health" placeholder="eg - 7A" value="<?php echo $row1[6];?>"disabled>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Tamil</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="" placeholder="eg - 7A" value="<?php echo $row1[7];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">History</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="history" placeholder="eg - 7A" value="<?php echo $row1[8];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Maths</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="maths" placeholder="eg - 7A" value="<?php echo $row1[9];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Geography</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="geography" placeholder="eg - 7A" value="<?php echo $row1[10];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Citizenship Studies</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="c_studies" placeholder="eg - 7A" value="<?php echo $row1[11];?>" disabled>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Western Music</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="w_music" placeholder="eg - 7A" value="<?php echo $row1[12];?>"disabled>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Estern Music</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="e_music" placeholder="eg - 7A" value="<?php echo $row1[13];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Art</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="art" placeholder="eg - 7A" value="<?php echo $row1[14];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Dancing</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="dancinng" placeholder="eg - 7A" value="<?php echo $row1[15];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Drama</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="drama" placeholder="eg - 7A" value="<?php echo $row1[16];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Praactical and Technical Skill</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="t_skill" placeholder="eg - 7A" value="<?php echo $row1[17];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">ICT</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="it" placeholder="IT" value="<?php echo $row1[18];?>"disabled disabled>
                            </div>
                        </div>

                        <br>
                         <div class="row">
                            <div class="col-3 lbl"> Total</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="tot" placeholder="Total" value="<?php echo $row1[19];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Average</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="avg" placeholder="average" value="<?php echo $row1[20];?>"disabled >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Position</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="position" placeholder="position" value="<?php echo $row1[21];?>"disabled >
                            </div>
                        </div>

                        <br>
                        
                <div class="col-3">

                </div>

                <div class="col-3 right-sidebar">

                  

                </div>
                </form>
                </center> 
                
            </div>
        </div>

        
        
        <script>
            
         
            
            
             
            
        </script>
        <?php include("footer.php"); ?>
    </body>
</html>

