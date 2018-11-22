<?php
    session_start();
    
    if(isset($_POST["btn_save"]))
    {
        $user = $_POST["user"];
        $type = $_POST["type"];
        $names = $_POST["names"];
        $gender = $_POST["gender"];
        $telephone= $_POST["telephone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $age = $_POST["age"];
  
        
        include("connection.php");
        
        $result3 = mysqli_query($con,"UPDATE student_info SET names='$names', gender='$gender',age='$age',class='$class',telephone='$telephone', email='$email',address='$address', WHERE username='$user'");
        
       
        
        header('Location: profile.php');
    }

    if($_SESSION["type"] != 3)
    {
        header('Location: login.php');
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
                        

                        if(!isset($_SESSION["user"]) || $_SESSION["type"] != 3)
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
                        
                        if(isset($_POST["suser"]))
                    {
                        
                        $res = mysqli_query($con, "SELECT type FROM user_login WHERE username='$user' ");
                        $row = mysqli_fetch_row($res);


                        if($row[0] == 1)
                        {
                            $res2 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$username' ");
                            $row2 = mysqli_fetch_row($res2);
                            $display_name = $row2[1]." ".$row2[2]." ".$row2[3];
                            $display_type = "Student";

                            echo "<script> document.getElementById('cust_table').style.display='block'; </script>";
                        }
                      
                        else
                        {
                            echo "<script> alert('Could not find user'); </script>";
                        }                
                    }

                    ?>
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
            

            <a href="logout.php" class="nav-page"> Logout </a>       
            <a href="qualification.php" class="nav-page "> Extra Curricular Activities </a>      
            <a href="home.php" class="nav-page"> Home </a> 
         
        
        </div> 
        <br>
        <br>
        <br>
        <br>
    
               <form action="profile.php" method="POST">

                </div>

                <div class="col-12 center">

                </div>
                
                    <div class="col-9">
                            
                                <input type="text" id="suser" name="suser" placeholder="Insert Index Number">
                                <button type="submit" name="submit_view_user" class="btn btn-blue btn-large btn-wide">Search</button>
                    </div>
             
               </form>
       
        
            
      

                 
                <form action="profile.php" method="POST">

                </div>

                <div class="col-12 center">

                </div>

                <div class="col-6">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>My Details</h1> <br></center>
                            </div>
                        </div>
                       
                        <hr>
                        <div class="row">                                
                            <div class="col-3 lbl">Name</div>
                            <div class="col-9">
                            
                                <input type="text" id="names" name="names" placeholder="Name" value="<?php echo $row1[1]; ?>" disabled>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Gender</div>
                            <div class="col-9">
                                <input  type="text" name="gender" id="gender" placeholder ="grnder" value="<?php echo $row1[6]; ?>" disabled>
                            </div>
                        </div>

                        <br>

                        
                        <div class="row">
                            <div class="col-3 lbl">Age</div>
                            <div class="col-9">
                                   <input type="text" id="age" name="age" placeholder="Age" value="<?php echo $row1[7];?>" disabled>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Class</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="class" placeholder="eg - 7A" value="<?php echo $row1[4];?>" disabled>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col-3 lbl">Telephone</div>
                            <div class="col-9">
                                   <input type="text" id="telephone" name="telephone" placeholder="eg - +94712345678" value="<?php echo $row1[5]; ?>" disabled>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Email</div>
                            <div class="col-9">
                                   <input type="email" id="email" name="email" placeholder="email" value="<?php echo $row1[2]; ?>" disabled>
                            </div>
                        </div>

                        <br>

                        

                        <div class="row">
                            <div class="col-3 lbl">Address</div>
                            <div class="col-9">
                                <textarea type="text" id="address" name="address" placeholder="Address" disabled><?php echo $row1[3]; ?></textarea>
                            </div>
                        </div>

                        <br>                          

                       




                <div class="col-3 right-sidebar">

                    <button name="btn_edit" id="btn_edit" type="button" class="btn btn-blue btn-large btn-wide" onclick="edit()">View details</button>    
                       

                </div>
                </form>
            </div>
        </div>

         <div class="col-3 right-sidebar">

                    <button name="btn_edit" id="btn_edit" type="button" class="btn btn-blue btn-large btn-wide" onclick="edit()">Edit details</button>    
                    <button name="btn_save" id="btn_save" type="submit" class="btn btn-green btn-large btn-wide" disabled>Save changes</button>    
                    <button name="btn_cancel" id="btn_cancel" type="reset" class="btn btn-red btn-large btn-wide" onclick="cancel()" disabled>Cancel</button>    

                </div>

        
        
        <script>
            
            function edit(){
               
                document.getElementById("names").disabled = false;
                document.getElementById("gender").disabled = false;
                document.getElementById("class").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("telephone").disabled = false;
                document.getElementById("age").disabled = false;
                document.getElementById("address").disabled = false;
                document.getElementById("btn_save").disabled = false;
                document.getElementById("btn_cancel").disabled = false;
                document.getElementById("btn_edit").disabled = true;
                
            }
            
             function cancel(){
               
                document.getElementById("names").disabled = true;
                document.getElementById("class").disabled = true;
                document.getElementById("gender").disabled = true;
                document.getElementById("email").disabled = true;
                document.getElementById("telephone").disabled = true;
                document.getElementById("age").disabled = true;
                document.getElementById("address").disabled = true;
                document.getElementById("btn_save").disabled = true;
                document.getElementById("btn_edit").disabled = false;
                document.getElementById("btn_cancel").disabled = true;

            }
            
            
             
            
        </script>
        <?php include("footer.php"); ?>
    </body>
</html>

