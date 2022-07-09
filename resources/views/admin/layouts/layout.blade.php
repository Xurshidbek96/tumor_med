<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('admin/style.css')}}">

	<title>Admin</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="{{url('/')}}" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="@yield('home')">
				<a href="{{url('/')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="@yield('numbers')">
				<a href="">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Raqamlar</span>
				</a>
			</li>
			<li class="@yield('humans')">
				<a href="{{route('humans.index')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Bemorlar</span>
				</a>
			</li>
			<li class="@yield('infos')">
				<a href="">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Savol javob</span>
				</a>
			</li>
			<li class="@yield('results')">
				<a href="">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Natijalar</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->
		@yield('content')
	</section>
	<!-- CONTENT -->
	
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>;

	<script src="{{asset('admin/script.js')}}"></script>
</body>
</html>