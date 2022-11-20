<!DOCTYPE html>
<html>

<head>
	<title></title>
	<script type="text/javascript" src="../../assets/vendor/chartJs/chart.js"></script>
</head>

<body>
	<style type="text/css">
		body {
			font-family: roboto;
		}
	</style>

	<h2></h2>



	<div style="width: 80%;height: 700px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
					<?php
					include "../../config.php";
					$category =	mysqli_query($conn, "SELECT * FROM category_name");
					while ($c = mysqli_fetch_array($category)) {
					?> 
					"<?php echo $c['name']; ?>",
					<?php } ?>
				],
				datasets: [{
					label: '# Jumlah Video',
					data: [
						<?php
						$video =	mysqli_query($conn, "SELECT * FROM video_upload");
						while ($v = mysqli_fetch_array($video)) {
							$id = $v['id_category'];
							$j =	mysqli_query($conn, "SELECT * FROM video_upload WHERE id_category='$id'");
							$jumlah = mysqli_num_rows($j);
						?>
							"<?php echo $jumlah; ?>",
						<?php } ?>

					],
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
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</body>

</html>