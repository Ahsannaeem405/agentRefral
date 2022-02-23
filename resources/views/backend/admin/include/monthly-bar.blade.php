<?php

use Illuminate\Support\Facades\App;
use App\Models\referral;
$total_referrals=referral::count();
// dd($total_referrals);
$val=11;
$val2=12;
?>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Statistics "
	},
	axisY: {
		title: "Growth Rate (in %)",
		suffix: "%"
	},
	axisX: {
		title: ""
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			{ label: "Total Referrals", y: <?php echo $total_referrals ?>},	
			{ label: "Sent", y: <?php echo $val;?> },	
			{ label: "Recived ", y: <?php echo $val2;?> },	
		]
	}]
});
chart.render();

}
</script>

<div class="container mb-5">
	<div class="row">
		<div class="col">
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		</div>
	</div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
