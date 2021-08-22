//var chart = require('tui-chart');
var Chart = require('chart.js');


var ChartCtrl = (function(){

    var drawPieChart = function() {

		var config, canvas, ctx;

        config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						1000,
						650
					],
					backgroundColor: [
						window.chartColors.green,
						window.chartColors.orange
					]
				}],
				labels: [
					'Income',
					'Expense'
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Income & Expense - Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};
		
		canvas = document.getElementById('pieCanvas');

		if(canvas){
			ctx = canvas.getContext('2d');
			new Chart(ctx, config);
		}

        
        
    };

    var drawLineChart = function(){
		var config, canvas, ctx;

        config = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'Income',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						100,
                        150,
                        80,
                        200,
                        250,
                        80,
                        300
					],
					fill: false,
				}, {
					label: 'Expense',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						60,
                        100,
                        100,
                        150,
                        200,
                        150,
                        100
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Income & Expense - Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};
		
		canvas = document.getElementById('lineCanvas');

		if(canvas){
			ctx = canvas.getContext('2d');
			new Chart(ctx, config);
		}
    };

    var drawUsingChartJS = function(){
		var config, canvas, ctx;

		var color = Chart.helpers.color;
		config = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Income',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					100,
					150,
					80,
					200,
					250,
					80,
					300
				]
			}, {
				label: 'Expense',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					60,
					100,
					100,
					150,
					200,
					150,
					100
				]
			}]

		};
		
		canvas = document.getElementById('canvas');

		if(canvas){
			ctx = canvas.getContext('2d');
			new Chart(ctx, {
				type: 'bar',
				data: config,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Income & Expense'
					}
				}
			});
		}
        
        
    };

    
    var init = function(){
        drawUsingChartJS();
        drawLineChart();
        drawPieChart();
    };

    return {
        init: init
    };
})();

module.exports = ChartCtrl;