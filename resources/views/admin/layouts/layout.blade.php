<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href={{ url('assets/css/icons/icomoon/styles.css') }} rel="stylesheet" type="text/css">
	<link href={{ url('assets/css/bootstrap.css') }} rel="stylesheet" type="text/css">
	<link href={{ url('assets/css/core.css') }} rel="stylesheet" type="text/css">
	<link href={{ url('assets/css/components.css') }} rel="stylesheet" type="text/css">
	<link href={{ url('assets/css/colors.css') }} rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src={{ url('assets/js/plugins/loaders/pace.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/core/libraries/jquery.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/core/libraries/bootstrap.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/loaders/blockui.min.js"') }}></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src={{ url('assets/js/plugins/visualization/d3/d3.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/visualization/d3/d3_tooltip.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/forms/styling/switchery.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/forms/styling/uniform.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/ui/moment/moment.min.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/plugins/pickers/daterangepicker.js') }}></script>

	<script type="text/javascript" src={{ url('assets/js/core/app.js') }}></script>
	<script type="text/javascript" src={{ url('assets/js/pages/dashboard.js') }}></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

			<ul class="nav navbar-nav navbar-right">		

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
                        @if (Auth::check())
                            <span>{{ auth()->user()->name }}</span>
                        @else
                            <span>victoria</span>
                        @endif
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href={{ route('profile',auth()->user()->name) }}><i class="icon-user-plus"></i> My profile</a></li>
						<li class="divider"></li>
						<li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button style="background-color: transparent;border:0;padding:5px 15px;width:100%;text-align:start;" type="submit"><i class="icon-switch2"></i> Logout</button>                        
                            </form>    
                        </li>   
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								
								<div class="media-body">
                                    @if (Auth::check())
                                        <span class="media-heading text-semibold">{{ auth()->user()->name }} </span>
                                        <div class="text-size-mini text-muted">
                                            <i class="icon-user text-size-small"></i><span style="margin-left: 5px;">{{ auth()->user()->role }}</span> 
                                        </div>
                                    @else
                                        <span class="media-heading text-semibold">Victoria Baker</span>
                                        <div class="text-size-mini text-muted">
                                            <i class="icon-user text-size-small"></i> &nbsp;Santa Ana, CA
                                        </div>
                                    @endif
									
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href={{ route('admin') }}><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Layouts</span></a>
									<ul>
										<li><a href="index.html" id="layout1">Layout 1 <span class="label bg-warning-400">Current</span></a></li>
										<li><a href="../../layout_2/LTR/index.html" id="layout2">Layout 2</a></li>
										<li><a href="../../layout_3/LTR/index.html" id="layout3">Layout 3</a></li>
										<li><a href="../../layout_4/LTR/index.html" id="layout4">Layout 4</a></li>
										<li class="disabled"><a href="../../layout_5/LTR/index.html" id="layout5">Layout 5 <span class="label">Coming soon</span></a></li>
									</ul>
								</li>
								
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>
										<li><a href="starters/horizontal_nav.html">Horizontal navigation</a></li>
										<li><a href="starters/1_col.html">1 column</a></li>
										<li><a href="starters/2_col.html">2 columns</a></li>
										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
												<li><a href="starters/3_col_double.html">Double sidebars</a></li>
											</ul>
										</li>
										<li><a href="starters/4_col.html">4 columns</a></li>
										<li>
											<a href="#">Detached layout</a>
											<ul>
												<li><a href="starters/detached_left.html">Left sidebar</a></li>
												<li><a href="starters/detached_right.html">Right sidebar</a></li>
												<li><a href="starters/detached_sticky.html">Sticky sidebar</a></li>
											</ul>
										</li>
									
									</ul>
								</li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
							
								<li>
									<a href="#"><i class="icon-footprint"></i> <span>utilisateurs</span></a>
									<ul>
										<li><a href={{ route('users.create') }}>Créer compte </a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					
					<!-- /main charts -->


					<!-- Dashboard content -->
						@yield('content')
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
