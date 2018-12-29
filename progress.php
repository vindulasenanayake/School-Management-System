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
		
		<canvas id="myChart" width="400" height="400"></canvas>
		<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
		</script>    
        
        <section>

            <div class="banner-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h1>STUDENT PROGRESS</h1>
                            
                        </div>
                    </div>
                </div>
            </div>

            

            
            
        </section>

      
        


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