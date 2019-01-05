$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/Group_10_Charini/api/data9.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var mark = {
				Buddhism : [],
				Sinhala : [],
				Science : [],
				English : [],
				Mathematics : [],
				History : [],
				Geography : [],
				Tamil : [],
				Health : [],
				Citizenship : [],
				Technical : [],

			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
				if (data[i].subjects == "Buddhism") {
					mark.Buddhism.push(data[i].mark);
				}
				else if (data[i].subjects == "Sinhala") {
					mark.Sinhala.push(data[i].mark);
				}
				else if (data[i].subjects == "Science") {
					mark.Science.push(data[i].mark);
				}
				else if (data[i].subjects == "English") {
					mark.English.push(data[i].mark);
				}
				else if (data[i].subjects == "Mathematics") {
					mark.Mathematics.push(data[i].mark);
				}
				else if (data[i].subjects == "History") {
					mark.History.push(data[i].mark);
				}
				else if (data[i].subjects == "Geography") {
					mark.Geography.push(data[i].mark);
				}
				else if (data[i].subjects == "Tamil") {
					mark.Tamil.push(data[i].mark);
				}
				else if (data[i].subjects == "Health & PT") {
					mark.Health.push(data[i].mark);
				}
				else if (data[i].subjects == "Citizenship Studies") {
					mark.Citizenship.push(data[i].mark);
				}
				else if (data[i].subjects == "Practical & Technical Skills") {
					mark.Technical.push(data[i].mark);
				}
			}

			//get canvas
			var ctx = $("#line-chart9");

			var data = {
				labels : ["Term1", "Term2","Term3"],
				datasets : [
					{
						label : "Buddhism",
						data : mark.Buddhism,
						backgroundColor : "orange",
						borderColor : "orange",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Sinhala",
						data : mark.Sinhala,
						backgroundColor : "green",
						borderColor : "green",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Science",
						data : mark.Science,
						backgroundColor : "blue",
						borderColor : "blue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "English",
						data : mark.English,
						backgroundColor : "yellow",
						borderColor : "yellow",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Mathematics",
						data : mark.Mathematics,
						backgroundColor : "red",
						borderColor : "red",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "History",
						data : mark.History,
						backgroundColor : "black",
						borderColor : "black",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Geography",
						data : mark.Geography,
						backgroundColor : "brown",
						borderColor : "brown",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Tamil",
						data : mark.Tamil,
						backgroundColor : "lightgreen",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Health & PT",
						data : mark.Health,
						backgroundColor : "purple",
						borderColor : "purple",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Citizenship Studies",
						data : mark.Citizenship,
						backgroundColor : "lightblue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Practical & Technical Skills",
						data : mark.Technical,
						backgroundColor : "grey",
						borderColor : "grey",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Grade 9",
					fontSize : 18,
					fontColor : "#111"
					
				},
				legend : {
					display : true,
					position : "bottom"
				}
			};

			var chart = new Chart( ctx, {
				type : "line",
				data : data,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});