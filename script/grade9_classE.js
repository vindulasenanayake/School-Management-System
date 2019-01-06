$(document).ready(function () {
	/**
	 * call the data_class.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/Group_10/api/data_class.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var subject = [];
			var mark1 = [];
			var mark2 = [];

			for(var i in data){
				if (subject.includes(data[i].subjects)){
				}
				else{
					subject.push(data[i].subjects);
				}
				
				if (data[i].term == "Term1") {
					mark1.push(data[i].E);
				}
				else if (data[i].term == "Term2") {
					mark2.push(data[i].E);
				}	
			}
			


			var chartdata = {
				labels : subject,
				datasets : [
					{
						label : "1st Term",
						data : mark1,
						backgroundColor : "rgba(10, 20, 30, 0.7)",
						borderColor :"rgba(10, 20, 30, 1)",
						borderWidth : 1
					},
					{
						label : "2nd Term",
						data : mark2,
						backgroundColor :"rgba(150, 150, 100, 0.7)",
						borderColor :"rgba(150, 150, 100, 1)",
						borderWidth : 1
					}
				]
			};

			var ctx = $("#bar-chartcanvas");

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Class E",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				},
				scales : {
					yAxes : [{
						ticks : {
							min : 0
						}
					}]
					
				}
			};

			var chart = new Chart( ctx, {
				type : "bar",
				data : chartdata,
				options : options
			});
		},	
	 	error : function(data) {
				console.log(data);
			}
	});

});