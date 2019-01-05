<?php
    session_start();
    
     if(isset($_SESSION["user"]))
    {
        if ($_SESSION["type"] == 1)
        {
            header('Location: student.php');
        }
        else if ($_SESSION["type"] == 2)
        {
            header('Location: teacher.php');
        }
        else if ($_SESSION["type"] == 4)
        {
            header('Location: principal.php');
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Welocome to Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login.php"><b>Login</b></a></li>
                            

                            <li class="hidden-xs"></li>
                           
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        
        
        <section>

            <div class="banner-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h1>School Management System</h1>

                        </div>
                    </div>
                </div>
            </div>

            <div class="blogs-home common-heading-2">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/student.jpg" alt=""/>
                                    </div>
                                    <div class="bottom-details">
                                      
                                        
                                        <a href="login.php">STUDENT</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                       <p align="center"><b>Mission</b><br></p> 
                                       <br>"Making the school an efficient and productive establishment, being adhere to the national objectives of education through the implementation of complete syllabus letting students to optimise their potentials to bestow upon the nation a generation of talented students who are humane, socially responsible and well disciplined being rich with great attitudes, values and aesthetic sense and who can be victorious in the fauture challenges."

                                       <br><br><p align="center"><b>Vision</b></p><br>
                                       "To be the best co-school in the island, bestowing upon the nation students rich in goodness and values and who are empowered with the skills and competencies compatible with the requirements of the new world which are gained through decipline."
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/teacher.jpg" alt="" />
                                    </div>
                                    <div class="bottom-details">
                                        
                                        
                                        <a href="login.php">TEACHER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
        </section>

        
       
       <center>
       <footer>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        
                        <p class="copy-rights">Copyright by Lumbini College &reg;</p>
                    </div>
                </div>
            </div>
            
        
     </footer>
    </center>
       
        
      
    </body>

</html>