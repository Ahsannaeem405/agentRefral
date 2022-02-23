
@extends('backend.agent.main')
@section('content')
@include('backend.agent.include.main-header')
<div class="container">
    <div class="row">
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                  Pending Invites 
                                </span>
                            </div>
                            <div class="count-stat">{{$pending}}
                                <!-- <span class="indicator positive"></span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                Accepted 
                                </span>
                            </div>
                            <div class="count-stat">{{$accepted}}
                                <!-- <span class="indicator negative"> - 12.352</span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                  Recived 
                                </span>
                            </div>
                            <div class="count-stat">{{$recieved}}
                                <!-- <span class="indicator positive"> </span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                               Sent
                                </span>
                            </div>
                            <div class="count-stat">{{$sent}}
                                <!-- <span class="indicator positive"> + 2.847</span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Statistics "
	},
	axisY: {
		title: "Growth Rate",
		suffix: ""
	},
	axisX: {
		title: ""
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			{ label: "Accepted ", y: <?php echo $accepted ?>},	
			{ label: "Recived ", y: <?php echo $recieved;?> },	
			{ label: "Sent ", y: <?php echo $sent;?> },	
            { label: "Pending", y: <?php echo $pending;?> },	
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

<div class="container">
   
    <script>
	document.addEventListener("DOMContentLoaded", function() {
		var webpMachine = new webpHero.WebpMachine()
		webpMachine.polyfillDocument()
	});
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
@endsection