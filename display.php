
<?php
    session_start();
    
    if($_SESSION["type"] != 1)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<title>Admin Panel | Lumbini College</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <link href="css/style3.css" rel="stylesheet" type="text/css">
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
                        
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <div class="nav-fixed font">
                                <a href="logout.php"> <img src="images/logo.png"></a>
                                <a href="logout.php" class="nav-page"> Logout </a> 
                                <a href="Student_index.php" class="nav-page">Previous </a>
                 
                            </div>  
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

    <!---Main Content-->

    <div class="container main">
         <!--<div class="row"><div class="col-5 center big card-heading-blue">Admin Panel  -  Student</div></div>-->
         <h3><center>Student - Pastpaper Panel</center></h3> 
        
        <div id="pastPapersDisplay">
                
            <div class="card center">
                <a href="BLOCKIMG" download>
                    <img class="container " src="BLOCKIMG" alt="" style="width:75%">
                </a>
                <div class="containerCard">
                 
                </div>
            </div> 

        </div>

        <div id="pastPapers">
            
        </div>
        


    </div>
    
</body>
<script src="assets/js/pages/display.js"></script>

</html>