<?php
    

    if(isset($_POST['search']))
    {
        $username=$_POST['username'];

        $connect =mysqli_connect("localhost","root","","school_mgt_system");

        $query = "SELECT * FROM `student_result` WHERE username = $username";

        $result = mysqli_query($connect, $query);


        if(mysqli_num_rows($result)>0){

        
            while ($row = mysqli_fetch_array($result)){
               $username= $row['username'];
               $term =$row['term'];
               $buddhism=$row['buddhism'];
               $m_languaage=$row['m_languaage'];
               $english=$row['english'];
               $science =$row['science'];
               $health=$row['health'];
               $tamil=$row['tamil'];
               $history=$row['history'];
               $maths=$row['maths'];
               $geography=$row['geography'];
               $c_studiess=$row['c_studiess'];
               $history=$row['history'];
               $w_music=$row['w_music'];
               $e_music=$row['e_music'];
               $art=$row['art'];
               $dancing=$row['dancing'];
               $drama=$row['drama'];
               $t_skill=$row['t_skill'];
               $it=$row['it'];
               $avg=$row['avg'];



    
            }

        }

        else{
            echo "undefined ID";
               $username= "";
               $term="";
               $buddhism="";
               $m_languaage="";
               $english="";
               $science ="";
               $health="";
               $tamil="";
               $history="";
               $maths="";
               $geography="";
               $c_studiess="";
               $history="";
               $w_music="";
               $e_music="";
               $art="";
               $dancing="";
               $drama="";
               $t_skill="";
               $it="";
               $avg="";

    }
        

    mysqli_free_result($result);
    mysqli_close($connect); 

    }

        else{
               $username= "";
               $term ="";
               $buddhism="";
               $m_languaage="";
               $english="";
               $science ="";
               $health="";
               $tamil="";
               $history="";
               $maths="";
               $geography="";
               $c_studiess="";
               $history="";
               $w_music="";
               $e_music="";
               $art="";
               $dancing="";
               $drama="";
               $t_skill="";
               $it="";
               $avg="";
    }

?>


<html>
<head>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Report Card| Lumbini College</title>
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
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="teacher_R_Evaluation.php" class="nav-page"> Previous </a> 
            <a href="logout.php" class="nav-page"> Logout </a> 
                 
        </div>
        <div>
            <br>
            <br>
            <br>
            <br>
        </div> 

       
    
        <center>
            <form action="Admin_re_reportcard.php" method="post">
            <div class="col-6" >                  
            <div class="card-profile">
                <div class="row">
                    <div class="col-12 card-heading-blue">
                        <center><br><h1>Student Report Card</h1> <br></center>
                    </div>
                </div>
                       
        <hr>
         <div class="row">                                
            <div class="col-3 lbl">Username</div>
        <div class="col-5">
            <input type="text" name="username" >
        
            <input type ="submit" name="search" value="Find" class="btn btn-green btn-large btn-wide"><br><br>
            
        </div>

        </div>


        <div class="row">                                
            <div class="col-3 lbl">Term</div>
        <div class="col-9">
            <input type="text" name="term"  value="<?php echo $term; ?>"> <br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Buddhism</div>
        <div class="col-9">
            <input type="text" name="buddhism"  value="<?php echo $buddhism; ?>"><br><br>
        </div>
        </div>

        <div class="row">                                
            <div class="col-3 lbl">Mother Language</div>
        <div class="col-9">
            <input type="text" name="m_languaage"  value="<?php echo $m_languaage; ?>"><br><br>
        </div>
        </div>

        <div class="row">                                
            <div class="col-3 lbl">English</div>

        <div class="col-9">
            <input type="text" name="english"  value="<?php echo $english; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Science</div>
        <div class="col-9">
            <input type="text" name="science"  value="<?php echo $science; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Health</div>
        <div class="col-9">
            <input type="text" name="health"  value="<?php echo $health; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Tamil</div>
        <div class="col-9">
            <input type="text" name="tamil"  value="<?php echo $tamil; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">History</div>
        <div class="col-9">
            <input type="text" name="history"  value="<?php echo $history; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Maths</div>
        <div class="col-9">
            <input type="text" name="maths"  value="<?php echo $maths; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Geography</div>
        <div class="col-9">
            <input type="text" name="geography"  value="<?php echo $geography; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Citizenship Studies</div>
        <div class="col-9">
            <input type="text" name="c_studiess"  value="<?php echo $c_studiess; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Western Music</div>
        <div class="col-9">
            <input type="text" name="w_music"  value="<?php echo $w_music; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Eastern Music</div>
        <div class="col-9">
            <input type="text" name="e_music"  value="<?php echo $e_music; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Art</div>
        <div class="col-9">
            <input type="text" name="art"  value="<?php echo $art; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Dancing</div>
        <div class="col-9">
            <input type="text" name="dancing"  value="<?php echo $dancing; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Drama</div>
        <div class="col-9">
            <input type="text" name="drama"  value="<?php echo $drama; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">Practical and Technical Skill</div>
        <div class="col-9">
            <input type="text" name="t_skill"  value="<?php echo $t_skill; ?>"><br><br>
        </div>
        </div>
        <div class="row">                                
            <div class="col-3 lbl">ICT</div>
        <div class="col-9">
            <input type="text" name="it"  value="<?php echo $it; ?>"><br><br>
        </div>
        </div>
         <div class="row">                                
            <div class="col-3 lbl">Average</div>
        <div class="col-9">
            <input type="text" name="avg"  value="<?php echo $avg; ?>"><br><br>
        </div>
        </div>
        



        
    </form>
  </center> 
        
</body>

<?php include("footer.php"); ?>
        
</html>