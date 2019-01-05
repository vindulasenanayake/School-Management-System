<!DOCTYPE html>
<html>
<head>
    <title>Student Progress | Lumbini College</title>
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/logo1.png" type="image/png">
    <style>
        body {
            background-color: White;
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .column {
                float: left;
            }
            .left {
                width: 20%;
                background-color:#f2f2f2;
            }
            .right {
                width: 80%;
            }
            .block {
                display: block;
                width: 75%;
                border: 5%;
                margin: 12%;
                color: White;
                background-color: #4CAF50;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                font-family: inherit;
            }
        iframe{
            width:100%;
            height:100%;
        }
    </style>
</head>

<body class="font">        
    <div class="nav-fixed font">
        <a href="logout.php"> <img src="images/logo.png"></a>
        <a href="logout.php" class="nav-page"> Logout </a> 
        <a href="Principal_R_Evaluation.php" class="nav-page">Previous</a>
                         
    </div>
    <div>
        <br>
        <br>
        <br>
    </div> 
    <div class="row">
        <div class="column left">
            <a href="Prog_ClassA.php" target = "prog_chart"><button id="classA" type="submit" class="block">Class A</button></a>
            <a href="Prog_ClassB.php" target = "prog_chart"><button id="classB" type="submit" class="block">Class B</button></a>
            <a href="Prog_ClassC.php" target = "prog_chart"><button id="classC" type="submit" class="block">Class C</button></a>
            <a href="Prog_ClassD.php" target = "prog_chart"><button id="classD" type="submit" class="block">Class D</button></a>
            <a href="Prog_ClassE.php" target = "prog_chart"><button id="classE" type="submit" class="block">Class E</button></a>
            <a href="Prog_ClassF.php" target = "prog_chart"><button id="classF" type="submit" class="block">Class F</button></a>
        </div>
        <div class="column right">
                
                    <iframe name="prog_chart" src="Prog_ClassA.php">
                        <p>Your browser does not support iframes.</p>
                    </iframe>
                
        </div>
    </div>
	

	<!-- javascript -->
    <script src="script/jquery.js"></script>
    <script src="script/Chart.js"></script>
    <script src="script/utils.js"></script>
    <script src="script/grade9_class.js"></script>
    
</body>

<?php include("footer.php"); ?>

</html>