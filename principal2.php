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
    <body>
        <header>
            <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a>

            <a href="principal.php" class="nav-page">Previous</a>

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

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Report Card</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>
                                


                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href=".php">Report Card</a>
                                        </div>
                                    </div>
                                <hr>
                                
                            </div>
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
                                         
                                    <div class='center'><strong>Search Progress</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="line-db-php.html">Student Progress</a>
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
                                    <div class='center'><strong>Class Progress</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

                                    <div class='center'>
                                       <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="progress.php"> Class Progress</a>
                                        </div>
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>

            
            
             <div class="row" id="cust_table" style="display:none">
                
               
                
                    
                      
        <?php include("footer.php"); ?>

        

      
    </body>
</html>