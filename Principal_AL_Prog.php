<!doctype html>
<html>

<head>
	<title>A/L Results | Lumbini College</title>
	<script src="script/jquery.js"></script>
	<script src="script/Chart.js"></script>
    <script src="script/utils.js"></script>
	
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/logo1.png" type="image/png">
    <style>
        body {
            background-color: White;
            background-size: cover;
			
            }
            .grid-container {
				display: grid;
				grid-template-columns: 50% 49%;
				grid-gap: 1%;
				background-color:#A9A9A9;
				padding: 1%;
				
			}

			.grid-container > div {
				background-color: rgba(255, 255, 255, 0.7);
				text-align: center;
				padding: 2% 2%;
				font-size: 30px;
				
			}
			.row{
				background-color: #A9A9A9;
				height: 30px;
				font-size: 25px;
				padding: 2% 1%;
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
    </div>
	<div class='row'>
        <div class='center'><strong>Commerce Stream - AL Results</strong></div>                                  
    </div> 
    <div class="grid-container">
  		<div>
		  <!-- 1st container - econ -->
		  	<div class="chart-container">
				<canvas id="bar-Economics"></canvas>
			</div>
		</div>
		<div>
			<div class="chart-container">
				<canvas id="bar-Business"></canvas>
			</div>
		</div>  
		<div>
		<!-- 3rd container - bar graph -->
			<div class="chart-container">
				<canvas id="bar-Accounting"></canvas>
			</div>
		</div>
		<div>
		 <!-- Testing - pie chart -->
			<div class="chart-container">
					<canvas id="pie-chartcanvas-1"></canvas>
			<div>
		</div>
	</div>

	<script>
		

			$(document).ready(function () {
				/**
				 * call the data_al.php file to fetch the result from db table.
				 */
				$.ajax({
					url : "http://localhost/Group_10/api/data_al.php",
					type : "GET",
					success : function(data){
						console.log(data);

						var grade = [];
						var y1A = [];
						var y2A = [];
						var y3A = [];

						for(var i in data){
							if (grade.includes(data[i].grade)){
							}
							else{
								grade.push(data[i].grade);
							}
							
							if (data[i].al_year == 2016) {
								y1A.push(data[i].Accounting);
							}
							else if (data[i].al_year == 2017) {
								y2A.push(data[i].Accounting);
							}
							else if (data[i].al_year == 2018) {
								y3A.push(data[i].Accounting);
							}
	
						}
						

						var chartA = {
							labels : grade,
							datasets : [
								{
									label : "2016",
									data : y1A,
									backgroundColor : "rgba(0,0,128, 0.7)",
									borderColor :"rgba(0,0,128, 1)",
									borderWidth : 1
								},
								{
									label : "2017",
									data : y2A,
									backgroundColor :"rgba(30,144,255, 0.7)",
									borderColor :"rgba(30,144,255, 1)",
									borderWidth : 1
								},
								{
									label : "2018",
									data : y3A,
									backgroundColor :"rgba(128,0,128, 0.7)",
									borderColor :"rgba(128,0,128, 1)",
									borderWidth : 1
								} 
							]
						};

						var ctx = $("#bar-Accounting");
						

						var optionsA = {
							title : {
								display : true,
								position : "top",
								text : "Accounting",
								fontSize : 18,
								fontColor : "#111",
							},
							legend : {
								display : true,
								position : "bottom"
							},
							scales : {
								yAxes : [{
									ticks : {
										min : 0
									},
									scaleLabel: {
										display: true,
										labelString: 'No.of students'
									}
								}],
								xAxes : [{
									scaleLabel: {
										display: true,
										labelString: 'Grades'
									}
								}]	
							}
						};

						var chart = new Chart( ctx, {
							type : "bar",
							data : chartA,
							options : optionsA
						});

						// chart 2

						var grade = [];
						var y1E = [];
						var y2E = [];
						var y3E = [];

						for(var i in data){
							if (grade.includes(data[i].grade)){
							}
							else{
								grade.push(data[i].grade);
							}
							
							if (data[i].al_year == 2016) {
								y1E.push(data[i].Economics);
							}
							else if (data[i].al_year == 2017) {
								y2E.push(data[i].Economics);
							}
							else if (data[i].al_year == 2018) {
								y3E.push(data[i].Economics);
							}
	
						}
						

						var chartE = {
							labels : grade,
							datasets : [
								{
									label : "2016",
									data : y1E,
									backgroundColor : "rgba(255,69,0, 0.7)",
									borderColor :"rgba(255,69,0, 1)",
									borderWidth : 1
								},
								{
									label : "2017",
									data : y2E,
									backgroundColor :"rgba(218,165,32, 0.7)",
									borderColor :"rgba(218,165,32, 1)",
									borderWidth : 1
								},
								{
									label : "2018",
									data : y3E,
									backgroundColor :"rgba(139,0,0, 0.7)",
									borderColor :"rgba(139,0,0, 1)",
									borderWidth : 1
								} 
							]
						};

						var ctx = $("#bar-Economics");
						

						var optionsE = {
							title : {
								display : true,
								position : "top",
								text : "Economics",
								fontSize : 18,
								fontColor : "#111",
							},
							legend : {
								display : true,
								position : "bottom"
							},
							scales : {
								yAxes : [{
									ticks : {
										min : 0
									},
									scaleLabel: {
										display: true,
										labelString: 'No.of students'
									}
								}],
								xAxes : [{
									scaleLabel: {
										display: true,
										labelString: 'Grades'
									}
								}]	
							}
						};

						var chart = new Chart( ctx, {
							type : "bar",
							data : chartE,
							options : optionsE
						});

						// chart 3
						
						var grade = [];
						var y1B = [];
						var y2B = [];
						var y3B = [];

						for(var i in data){
							if (grade.includes(data[i].grade)){
							}
							else{
								grade.push(data[i].grade);
							}
							
							if (data[i].al_year == 2016) {
								y1B.push(data[i].Business_Studies);
							}
							else if (data[i].al_year == 2017) {
								y2B.push(data[i].Business_Studies);
							}
							else if (data[i].al_year == 2018) {
								y3B.push(data[i].Business_Studies);
							}
	
						}
						

						var chartB = {
							labels : grade,
							datasets : [
								{
									label : "2016",
									data : y1B,
									backgroundColor : "rgba(0,128,0, 0.7)",
									borderColor :"rgba(0,128,0, 1)",
									borderWidth : 1
								},
								{
									label : "2017",
									data : y2B,
									backgroundColor :"rgba(32,178,170, 0.7)",
									borderColor :"rgba(32,178,170, 1)",
									borderWidth : 1
								},
								{
									label : "2018",
									data : y3B,
									backgroundColor :"rgba(154,205,50, 0.7)",
									borderColor :"rgba(154,205,50, 1)",
									borderWidth : 1
								} 
							]
						};

						var ctx = $("#bar-Business");
						

						var optionsB = {
							title : {
								display : true,
								position : "top",
								text : "Business Studies",
								fontSize : 18,
								fontColor : "#111",
							},
							legend : {
								display : true,
								position : "bottom"
							},
							scales : {
								yAxes : [{
									ticks : {
										min : 0
									},
									scaleLabel: {
										display: true,
										labelString: 'No.of students'
									}
								}],
								xAxes : [{
									scaleLabel: {
										display: true,
										labelString: 'Grades'
									}
								}]	
							}
						};

						var chart = new Chart( ctx, {
							type : "bar",
							data : chartB,
							options : optionsB
						});
					},	
					error : function(data) {
							console.log(data);
						}
				});

			});

			// pie chart
			$(document).ready(function () {

				var ctx1 = $("#pie-chartcanvas-1");

				var data1 = {
					labels : ["A", "B", "C", "S", "F"],
					datasets : [
						{
							label : "Year 2018",
							data : [55, 65, 75, 70, 35],
							backgroundColor : [
								"rgba(30,144,255, 0.7)",
								"rgba(128,0,128, 0.7)",
								"rgba(255,69,0, 0.7)",
								"rgba(218,165,32, 0.7)",
								"rgba(0,128,0, 0.7)"

							],
							borderColor : [
								"rgba(30,144,255, 1)",
								"rgba(128,0,128, 1)",
								"rgba(255,69,0, 1)",
								"rgba(218,165,32, 1)",
								"rgba(0,128,0, 1)"
							],
							borderWidth : [1, 1, 1, 1, 1]
						}
					]
				};

				var options = {
					title : {
						display : true,
						position : "top",
						text : "Commerce Stream",
						fontSize : 18,
						fontColor : "#111"
					},
					legend : {
						display : true,
						position : "bottom"
					}
				};


				var chart1 = new Chart( ctx1, {
					type : "pie",
					data : data1,
					options : options
				});

			});	
	</script>
			
</body>

<?php include("footer.php"); ?>

</html>