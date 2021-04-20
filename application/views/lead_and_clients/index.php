<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Leads and Clients</title>
	<link rel="stylesheet" href="user_guide/css/style.css">
	<script>
	window.onload = function () {

	var options = {
		title: {
			text: "Customer and number of new leads"
		},
		animationEnabled: true,
		data: [{
			type: "pie",
			startAngle: 40,
			toolTipContent: "<b>{label}</b>: {y}",
			showInLegend: "true",
			legendText: "{label}",
			indexLabelFontSize: 16,
			indexLabel: "{label} - {y}",
			dataPoints: [
<?php	foreach($get_each_client as $client) { ?>
				{ y: <?= $client['number_of_leads'] ?>, label: "<?= $client['client_name'] ?>" },
<?php 	} ?>
			]

		}]
	};
	$("#chartContainer").CanvasJSChart(options);

	}
</script>
</head>
<body>
<div class='container'>
	<h3>List of all customers and # of leads</h3>
	<table>
		<thead>
			<tr>
				<th>Customer Name</th>
				<th>Number of Leads</th>
			</tr>
		</thead>
		<tbody>
<?php	foreach($get_each_client as $client) { ?>
			<tr>
				<td><?= $client['client_name'] ?></td>
				<td><?= $client['number_of_leads'] ?></td>
			</tr>
<?php 	} ?>
		</tbody>
	</table>
</div>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>