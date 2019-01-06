
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
        
        <link rel="icon" href="images/logo1.png" type="image/png">

<style>
    body{background-color: #f2f2f2; color: #333;}
    .main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
    h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
    .img-box{margin-top: 20px;}
    .img-block{float: left; margin-right: 5px; text-align: center;}
    p{margin-top: 0;}
    img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  height: 300px;
  margin: auto;
}

.card img{
    width: 100%;
    height: 100px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

#pastPapersDisplay{
    display: none;
}
</style>
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
                            <li><a href="logout.php"><b>logout</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="Student_index.php"><b>Previous</b> </a></li>
                             <li class="hidden-xs"></li>  
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

    <!---Main Content-->

    <div class="container main">
        <h3><center>Student - Notice Panel</center></h3>
        
        <div id="pastPapersDisplay">
                
            <div class="card">
                <a href="BLOCKIMG" download>
                    <img src="BLOCKIMG" alt="" style="width:100%">
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