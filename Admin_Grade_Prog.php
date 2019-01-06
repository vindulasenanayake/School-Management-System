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
                width: 77%;
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
        <a href="Admin_R_Evaluation.php " class="nav-page"> Previous</a>
        
                         
    </div>
    <div>
        <br>
        <br>
        <br>
    </div> 
    <div class="row">
        <div class="column left">
            <button id="grade11" type="button" class="block">Grade 11</button>
            <button id="grade10" type="button" class="block">Grade 10</button>
            <a href="Prin_grade9.php" target = "grade_chart"><button id="grade9" type="submit" class="block">Grade 9</button></a>
            <a href="Prin_grade8.php" target = "grade_chart"><button id="grade8" type="submit" class="block">Grade 8</button></a>
            <button id="grade7" type="button" class="block">Grade 7</button>
            <button id="grade6" type="button" class="block">Grade 6</button>
        </div>
        <div class="column right">
            <iframe name="grade_chart" src="Prin_grade9.php">
                <p>Your browser does not support iframes.</p>
            </iframe>

        </div>
    </div>
	

    
</body>

<?php include("footer.php"); ?>

</html>
