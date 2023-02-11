<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>@yield('title') | Laundry SMKN 1 Ciamis</title>


	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ url('') }}/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ url('') }}/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{ url('') }}/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ url('') }}/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ url('') }}/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ url('') }}/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ url('') }}/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ url('') }}/css/style.css">

	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="#" class="logo"><img src="{{ url('') }}/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Help</a></li>
			<li><a href="#">Settings</a></li>
			<li class="ts-account">
				<a href="#"><img src="{{ url('') }}/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Edit Account</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				<li class="open"><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				</li>
				<li><a href="/konsumen"><i class="fa fa-users"></i> Konsumen</a></li>
				<li><a href="/karyawan"><i class="fa fa-users"></i> Karyawan</a></li>
				<li><a href="/transaksi"><i class="fa fa-credit-card"></i> Transaksi</a></li>

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="{{ url('') }}/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
			</ul>
		</nav>
		<div class="content-wrapper">
            @yield('content')
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="{{ url('') }}/js/jquery.min.js"></script>
	<script src="{{ url('') }}/js/bootstrap-select.min.js"></script>
	<script src="{{ url('') }}/js/bootstrap.min.js"></script>
	<script src="{{ url('') }}/js/jquery.dataTables.min.js"></script>
	<script src="{{ url('') }}/js/dataTables.bootstrap.min.js"></script>
	<script src="{{ url('') }}/js/Chart.min.js"></script>
	<script src="{{ url('') }}/js/fileinput.js"></script>
	<script src="{{ url('') }}/js/chartData.js"></script>
	<script src="{{ url('') }}/js/main.js"></script>
	<script>
		function deleteFunction() {
			if(!confirm("Apakah kamu yakin akan menghapus?"))
			event.preventDefault();
		}
	</script>
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>