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
        
        <title>Lumbini College</title>
		
		<script src="script/Chart.js"></script>
		<script src="script/utils.js"></script>
		<style>
			canvas {
				-moz-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
			}
		</style>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">
        <?php
           if(isset($_POST["submit_user"]))
            {
                $username = $_POST["user_s"];
                include("connection.php");  
                $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username' AND type = 1 ");
                $num = mysqli_num_rows($res);
               
                if($num == 1)
                {
                    mysqli_query($con, "DELETE FROM user_login WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM student_info WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM cust_name WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM cust_qual_deg WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM cust_qual WHERE username='$username' ");
                    echo "<script> alert('User successfully deleted'); </script>";
                }
                else
                {
                    echo "<script> alert('Could not find user'); </script>";
                }                
            }  
        
            if(isset($_POST["submit_company"]))
            {
                $username = $_POST["user_s"];
                include("connection.php");  
                $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username' AND type = 2 ");
                
                $num = mysqli_num_rows($res);
               
                if($num == 1)
                {
                    mysqli_query($con, "DELETE FROM user_login WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM client_contact WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM teachers_info WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM client_job_vc WHERE username='$username' ");
                    echo "<script> alert('User successfully deleted'); </script>";
                }
                else
                {
                    echo "<script> alert('Could not find user'); </script>";
                }                
            }
        
            if(isset($_POST["submit_reset"]))
                {
                    $username = $_POST["user_s"];
                    include("connection.php");  
                    $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username'");

                    $num = mysqli_num_rows($res);

                    if($num == 1)
                    {
                        mysqli_query($con, "UPDATE user_login SET pw=md5('12345') WHERE username='$username' ");
                        echo "<script> alert('Password successfully reset. New password is 12345'); </script>";
                    }
                    else
                    {
                        echo "<script> alert('Could not find user'); </script>";
                    }                
                }

           
        
        ?>

		
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
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                            
                            <li><a href="logout.php"><b>logout</b></a></li>
                            <li><a href="prin_profile.php"><b>Profile</b></a></li>
                            <li class="hidden-xs"></li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
		
			<!Term Test Marks>
			<div style="width: 48%; vertical-align: left; ">
				<canvas id="canvas"></canvas>
				<progress id="animationProgress" max="1" value="0" style="width: 100%"></progress>
			</div>
			<br>
			<br>
			<button id="randomizeData">Term Test Marks</button>
			<script>
				var progress = document.getElementById('animationProgress');
				var config = {
					type: 'line',
					data: {
						labels: ['1st Term', '2nd Term', '3rd Term'],
						datasets: [{
							label: 'Maths',
							fill: false,
							borderColor: window.chartColors.green,
							backgroundColor: window.chartColors.green,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'Sinhala',
							fill: false,
							borderColor: window.chartColors.blue,
							backgroundColor: window.chartColors.blue,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'English',
							fill: false,
							borderColor: window.chartColors.red,
							backgroundColor: window.chartColors.red,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'Science',
							fill: false,
							borderColor: window.chartColors.yellow,
							backgroundColor: window.chartColors.yellow,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'History',
							fill: false,
							borderColor: window.chartColors.purple,
							backgroundColor: window.chartColors.purple,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'Buddhism',
							fill: false,
							borderColor: window.chartColors.orange,
							backgroundColor: window.chartColors.orange,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}]
					},
					options: {
						title: {
							display: true,
							text: 'Student Progress'
						},
						animation: {
							duration: 2000,
							onProgress: function(animation) {
								progress.value = animation.currentStep / animation.numSteps;
							},
							onComplete: function() {
								window.setTimeout(function() {
									progress.value = 0;
								}, 2000);
							}
						}

					}
				};

				window.onload = function() {
					var ctx = document.getElementById('canvas').getContext('2d');
					window.myLine = new Chart(ctx, config);
				};

				document.getElementById('randomizeData').addEventListener('click', function() {
					config.data.datasets.forEach(function(dataset) {
						dataset.data = dataset.data.map(function() {
							return randomScalingFactor();
						});
					});

					window.myLine.update();
				});
			</script>
			
			<!A/L results>
			<div style="width: 47%; vertical-align: right;">
				<canvas id="canvas"></canvas>
				<progress id="animationProgress" max="1" value="0" style="width: 100%"></progress>
			</div>
			<br>
			<br>
			<button id="randomizeData">A/L Results</button>
			<script>
				var progress = document.getElementById('animationProgress');
				var config = {
					type: 'line',
					data: {
						labels: ['1st Term', '2nd Term', '3rd Term'],
						datasets: [{
							label: 'Maths',
							fill: false,
							borderColor: window.chartColors.green,
							backgroundColor: window.chartColors.green,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'Sinhala',
							fill: false,
							borderColor: window.chartColors.blue,
							backgroundColor: window.chartColors.blue,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'English',
							fill: false,
							borderColor: window.chartColors.red,
							backgroundColor: window.chartColors.red,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'Science',
							fill: false,
							borderColor: window.chartColors.yellow,
							backgroundColor: window.chartColors.yellow,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'History',
							fill: false,
							borderColor: window.chartColors.purple,
							backgroundColor: window.chartColors.purple,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}, {
							label: 'Buddhism',
							fill: false,
							borderColor: window.chartColors.orange,
							backgroundColor: window.chartColors.orange,
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor()
							]
						}]
					},
					options: {
						title: {
							display: true,
							text: 'Student Progress'
						},
						animation: {
							duration: 2000,
							onProgress: function(animation) {
								progress.value = animation.currentStep / animation.numSteps;
							},
							onComplete: function() {
								window.setTimeout(function() {
									progress.value = 0;
								}, 2000);
							}
						}

					}
				};

				window.onload = function() {
					var ctx = document.getElementById('canvas').getContext('2d');
					window.myLine = new Chart(ctx, config);
				};

				document.getElementById('randomizeData').addEventListener('click', function() {
					config.data.datasets.forEach(function(dataset) {
						dataset.data = dataset.data.map(function() {
							return randomScalingFactor();
						});
					});

					window.myLine.update();
				});
			</script>
      
        


        <footer>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        
                        <p class="copy-rights">Copyright by Lumbini College &reg;</p>
                    </div>
                </div>
            </div>
            
        </footer>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>