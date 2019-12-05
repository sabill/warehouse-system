<br>
</body>

<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()?>assetsjs/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assetsjs/chart.min.js"></script>
	<script src="<?php echo base_url()?>assetsjs/chart-data.js"></script>
	<script src="<?php echo base_url()?>assetsjs/easypiechart.js"></script>
	<script src="<?php echo base_url()?>assetsjs/easypiechart-data.js"></script>
	<script src="<?php echo base_url()?>assetsjs/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url()?>assetsjs/custom.js"></script>
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>


    <!-- Sticky Footer 
    <footer class="sticky-footer" style="bottom= 0px;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>© 2019 Proyek Multidisiplin</span>
            <span>Jakarta Selatan, <a href="universitaspertamina.ac.id">Universitas Pertamina</a>.</span>
          </div>
        </div>
    </footer>
-->
</body>
</html>
