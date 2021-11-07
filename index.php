<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Weather Forecasting</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">

	<!-- Boxicons CDN Link  -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Iconify link -->
	<!-- 	<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
	<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script> -->

</head>
<body>
	<div class="sidebar">
		<div class="logo_content">
			<div class="logo">
				<i class='bx bxs-sun'></i>
				<div class="logo_name">Weatherfufu</div>
			</div>
				<i class='bx bx-menu' id="btn"></i>
		</div>

		<ul class="nav_list">
			<li>
				<i class='bx bx-search'></i>		
				<input type="text" placeholder="Search..." style="color: white;">
				<span class="tooltip">Search</span>
			</li>

			<li>
				<a href="#">
					<i class='bx bx-cloud-snow'></i>
					<span class="links_name">Forecast</span>
					</a>
				<span class="tooltip">Forecast</span>
			</li>

			<li>
				<a href="#">
					<i class='bx bx-cog'></i>
					<span class="links_name">Settings</span>
					</a>
				<span class="tooltip">Settings</span>
			</li>
		</ul>

	</div>

	<div class="home_content">
		<div class="text">Home content</div>
	</div>


	<script type="text/javascript">
		let btn = document.querySelector("#btn");
		let sidebar = document.querySelector(".sidebar");
		let searchBtn = document.querySelector(".bx-search");

		btn.onclick = function() {
			sidebar.classList.toggle("active");
		}

		searchBtn.onclick = function() {
			sidebar.classList.toggle("active");
		}
	</script>

</body>
</html>

	<!-- <span class="iconify" data-icon="carbon:settings" style="color: white;"></span>
	<span class="iconify" data-icon="fluent:weather-cloudy-24-regular" style="color: white;"></span>
	<span class="iconify" data-icon="fluent:weather-hail-day-24-regular" style="color: white;"></span>
	 -->
