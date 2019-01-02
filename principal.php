<?php
    session_start();
    
    if($_SESSION["type"] != 4)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
?>
<html>
    <head>
        
        <title>Principal | Lumbini College</title>

        
        <link href="css/style1.css" rel="stylesheet">
        
        
        <link rel="icon" href="images/logo1.png" type="image/png">
       
        
    </head>

    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
    <body>
        <header>
            <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a>
            <a href="principal2.php" class="nav-page">Next</a>
        </div>   

          <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Principal Pannel</div></div><br>
            <div class="row">
                
                <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/prin.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

<<<<<<< HEAD
            <div class="blogs-home common-heading-2">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/student.jpg" alt=""/>
                                    </div>
                                    <div class='row'>
                                    <div class='center'><strong>PROFILE</strong></div>                                  
                                </div><hr>

                                    <div class='row,center'>
                                        
                                           
                                            <a href="princi_notice_view.php"><button class="button button2">VIEW</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/teacher.jpg" alt="" />
                                    </div>
                                    <div class='row'>
                                    <div class='center'><strong>NOTICE</strong></div>                                  
                                </div><hr>

                                    <div class='row,center'>
                                        
                                           
                                            <a href="princi_notice_view.php"><button class="button button2">VIEW</button></a>
=======
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>View Student</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>
                                


                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="viewusers.php">View Student</a>
                                        </div>
>>>>>>> 6ec7c037f0a5a41e38da9c15874656c53af84e4f
                                    </div>
                                <hr>
                                
                            </div>
<<<<<<< HEAD
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/prin.jpg" alt="" />
                                    </div>
                                    </div>
                                <div class='row'>
                                    <div class='center'><strong>TIMETABLE</strong></div>                                  
                                </div><hr>

                                    <div class='row,center'>
                                        
                                           
                                            <a href="princi_time_view.php"><button class="button button2">VIEW</button></a>


                                            
                                       
=======
                        </div>                  
                    </div>
                 </div>
                
                
                
                <div class="col-3 center">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/prin.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                         
                                    <div class='center'><strong>Search student</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="s_profile.php">Search student</a>
                                        </div>
                                        </form>
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                
                                
                <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/prin.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Principal</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

                                    <div class='center'>
                                       <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href=".php">Principal</a>
                                        </div>
>>>>>>> 6ec7c037f0a5a41e38da9c15874656c53af84e4f
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
<<<<<<< HEAD
              
=======

>>>>>>> 6ec7c037f0a5a41e38da9c15874656c53af84e4f
            
            
             <div class="row" id="cust_table" style="display:none">
                
               
                
                    
                      
        <?php include("footer.php"); ?>

        

      
    </body>
</html>