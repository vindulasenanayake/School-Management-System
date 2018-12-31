<?php
    session_start();
    
    if(isset($_POST["btn_save"]))
    {
        $user = $_SESSION["user"];
        $names = $_POST["names"];
        $gr1 = $_POST["gr1"];
        $gr2 = $_POST["gr2"];
        $gr3 = $_POST["gr3"];
        $gr4 = $_POST["gr4"];
        $gr5 = $_POST["gr5"];
        $gr6 = $_POST["gr6"];
        $gr7 = $_POST["gr7"];
        $gr8 = $_POST["gr8"];
        $gr9 = $_POST["gr9"];
        $gr10 = $_POST["gr10"];
        $gr11 = $_POST["gr11"];
        $gr12 = $_POST["gr12"];
        $gr13 = $_POST["gr13"];
           
        include("connection.php");
        
        $result3 = mysqli_query($con,"UPDATE student_info SET names='$names', gender='$gender',age='$age',class='$class',telephone='$telephone',address='$address', WHERE username='$user'");
        
       
        
        header('Location: profile.php');
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 1)
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$user'");
        $row1 = mysqli_fetch_row($result1);

       
    }   
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Profile | Lumbini College</title>
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

                            $result1 = mysqli_query($con, "SELECT * FROM extra_activities WHERE username='$user'");
                            $row3 = mysqli_fetch_row($result1);

                            
                        }   


                    ?>
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
          <a href="student.php" class="nav-page"> Previous</a>       
            
            
            
        
        </div> 
        <br>
        <br>
        <br>
        <br>

        
       
        
            
      

                 
                <form action="profile.php" method="POST">

                </div>

                <div class="col-6 center">

                </div>

                <div class="col-9">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>Extra Curricular Activities</h1> <br></center>
                            </div>
                        </div>
                       
                        <hr>
                         <div class="row">                                
                            <div class="col-3 lbl">Name</div>
                            <div class="col-9">
                            
                                <input type="text" id="names" name="names" placeholder="Name" value="<?php echo $row3[1]; ?>" >
                            </div>
                        </div>



                        <br>

                        <div class="row">                                
                            <div class="col-3 lbl">Grade 1</div>
                            <div class="col-9">
                            
                                <textarea type="text" id="gr1" name="gr1" placeholder="Grade 1" ><?php echo $row3[2]; ?></textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Grade 2</div>
                            <div class="col-9">
                               
                                         <textarea type="text" id="gr2" name="gr2" placeholder="Grade 2" ><?php echo $row3[3]; ?></textarea>
                                
                            </div>
                        </div>

                        <br>

                        
                        <div class="row">
                            <div class="col-3 lbl">Grade 3</div>
                            <div class="col-9">
                                   <textarea type="text" id="gr3" name="gr3" placeholder="Grade 3" ><?php echo $row3[4]; ?></textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Grade 4</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr4" name="gr4" placeholder="Grade 4" ><?php echo $row3[5]; ?></textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col-3 lbl">Grade 5</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr5" name="gr5" placeholder="Grade 5" ><?php echo $row3[6]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 6</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr6" name="gr6" placeholder="Grade 6" ><?php echo $row3[7]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 7</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr7" name="gr7" placeholder="Grade 7" ><?php echo $row3[8]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 8</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr8" name="gr8" placeholder="Grade 8" ><?php echo $row3[9]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 9</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr9" name="gr9" placeholder="Grade 9" ><?php echo $row3[10]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 10</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr10" name="gr10" placeholder="Grade 10" ><?php echo $row3[11]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 11</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr11" name="gr11" placeholder="Grade 11" ><?php echo $row3[12]; ?></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-3 lbl">Grade 12</div>
                            <div class="col-9">
                                    <textarea type="text" id="gr12" name="gr12" placeholder="Grade 12" ><?php echo $row3[13]; ?></textarea>
                            </div>
                        </div>

                        <br>

                        
                        <div class="row">
                            <div class="col-3 lbl">Grade 13</div>
                            <div class="col-9">
                                <textarea type="text" id="gr13" name="gr13" placeholder="Grade 13" ><?php echo $row3[14]; ?></textarea>
                            </div>
                        </div>

                        <br>                          

                       


                <div class="col-3">

                </div>

                <div class="col-3 right-sidebar">

                  

                </div>
                </form>
            </div>
        </div>

        
        
        <script>
            
         
            
            
             
            
        </script>
        <?php include("footer.php"); ?>
    </body>
</html>

