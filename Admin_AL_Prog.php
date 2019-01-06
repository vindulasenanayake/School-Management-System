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
        <script src="script/Chart.js"></script>
		<script src="script/utils.js"></script>
        <link rel="icon" href="images/logo1.png" type="image/png">
        <style>
            body {
            background-color: White;
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
          }
          canvas {
				-moz-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
			}
			#wrap {
 				width: 100%;
			}
			.left{
				width: 40%;
				float:left;
			}
			.right{
				width: 40%;
				float:right;
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
            <br>
        </div> 
        <div id="wrap">
			<!Term Test Marks>
			<div style="width: 40%;" class="left">
				<canvas id="canvas"></canvas>
				<progress id="animationProgress1" max="1" value="0" style="width: 100%"></progress>
			</div>
		
			<br>
			<br>
			<div class="left">
				<button id="randomizeData">Term Test Marks</button>
			</div>
			<script>
				var progress = document.getElementById('animationProgress1');
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
							text: 'Grade 9 Results'
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
					var ctx1 = document.getElementById('canvas').getContext('2d');
					window.myLine = new Chart(ctx1, config);
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
			<div style="width: 40%;" class="right">
				<canvas id="canvas2"></canvas>
				<progress id="animationProgress2" max="1" value="0" style="width: 100%"></progress>
			</div>
		
			<br>
			<br>
			<div class="right">
				<button id="randomizeData">A/L Results</button>
			</div>
		</div>
			<script>
				var progress = document.getElementById('animationProgress2');
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
							text: 'A/L Results'
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
					var ctx2 = document.getElementById('canvas2').getContext('2d');
					window.myLine = new Chart(ctx2, config);
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

    
</body>

<?php include("footer.php"); ?>
        
</html>