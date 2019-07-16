<!DOCTYPE html>
<html lang="en">
	<head>
	<title>@yield('title', 'ICT')</title>

	  	@include('partials.header')

	</head>
<body class="app sidebar-mini rtl">
	<header class="app-header">
		<div class="app-header__logo" href=""></div>
		<a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

		@include('partials.navbar')

		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

		@include('partials.sidebar')

	</header>
	<main class="app-content">
	<div class="app-title">
        <div>
		    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
		    <p>Selamat datang di ICT 2018 UIN Maulana malik Ibrahim </p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
	        <li class="breadcrumb-item">
		        <i class="fa fa-home fa-lg"></i>
		    </li>
	        <li class="breadcrumb-item">
		        <a href="#">Dashboard</a>
		    </li>
        </ul>
    </div>
		@yield('content')

	</main>
	@include('partials.scripts')
	@yield('js')
</body>
</html>