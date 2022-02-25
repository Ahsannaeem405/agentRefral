@extends('backend.admin.main')
@include('backend.admin.layouts.head')
@include('backend.admin.layouts.topbar')
@include('backend.admin.layouts.sidebar')
@section('content')
@include('backend.admin.include.main-header')
<style type="text/css">
    .canvasjs-chart-credit{
        display: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                    Total Agents
                                </span>
                            </div>
                            <div class="count-stat">{{$agent}}
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
                                    Total Referral Users
                                </span>
                            </div>
                            <div class="count-stat">{{$user}}
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
                                    Total Cities
                                </span>
                            </div>
                            <div class="count-stat">{{$cities}}
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
                                    Total Referrals
                                </span>
                            </div>
                            <div class="count-stat">{{$refreal}}
                                <!-- <span class="indicator positive"> + 2.847</span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

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
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Statistics "
	},
	axisY: {
		title: "Growth Rate ",
		suffix: ""
	},
	axisX: {
		title: ""
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#\"\"",
		dataPoints: [
			{ label: "Cities", y: <?php echo $cities ?>},	
			{ label: "Agent", y: <?php echo $agent;?> },	
			{ label: "Users ", y: <?php echo $user;?> },	
            { label: "Referrals  ", y: <?php echo $refreal;?> },	
		]
	}]
});
chart.render();

}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
@endsection