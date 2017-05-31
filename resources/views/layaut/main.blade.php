<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>K-Service</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="../assets/css/headers/header-default.css">
	<link rel="stylesheet" href="../assets/css/footers/footer-v3.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../assets/plugins/animate.css">
	<link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../assets/css/custom.css">
	    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="index.html">
					<img src="../assets/img/logo1-default.png" alt="Logo">
				</a>
				<!-- End Logo -->

				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">

                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li class="dropdown">
							<a href="{{route('home')}}">
								Home
							</a>
						</li>
						<!-- End Home -->

						<!-- Pages -->
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Recursos
							</a>
							<ul class="dropdown-menu">
								<!-- About Pages -->
								<li class="dropdown-submenu">
									<a href="{{route('mean.index')}}">Listar</a>
								</li>
								<!-- End About Pages -->

								<!-- Service Pages -->
								<li class="dropdown-submenu">
									<a href="{{route('mean.create')}}">Insertar</a>
								</li>
								<!-- End Service Pages -->

								<!-- Contacts -->
								<li class="dropdown-submenu">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
										Eliminar
									</a>
								</li>
								<!-- End Contacts -->

								<!-- Profile Pages -->
								<li class="dropdown-submenu">
									<a href="javascript:void(0);">Actualizar</a>
								</li>
								<!-- End Profile Pages -->

								<!-- Sub Level Menu -->
								<li class="dropdown-submenu">
									<a href="javascript:void(0);">Reporte Basico</a>
									<ul class="dropdown-menu no-bottom-space">
									</ul>
								</li>
								<!-- End Sub Level Menu -->
							</ul>
						</li>
						<!-- End Pages -->

						<!-- Blog -->
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Casos
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{route('cases.index')}}">Listar</a></li>
								<li><a href="{{route('cases.create')}}">Insertar</a></li>
								<li><a href="javascript:void(0);">Eliminar</a></li>
								<li><a href="javascript:void(0);">Actualizar</a></li>
								<li><a href="javascript:void(0);">Reporte Basico</a></li>
							</ul>
						</li>
						<!-- End Blog -->

						<!-- Portfolio -->
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Atencion
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
								<li><a href="{{route('attention.index')}}">Listar</a></li>
								<li><a href="{{route('attention.create')}}">Insertar</a></li>
								<li><a href="javascript:void(0);">Eliminar</a></li>
								<li><a href="javascript:void(0);">Actualizar</a></li>
								<li><a href="javascript:void(0);">Reporte Basico</a></li>
								</li>
							</ul>
						</li>
						<!-- End Portfolio -->

						<!-- Features -->
						<li class="dropdown active">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Medio Comunicacion
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
								<li><a href="{{route('media.index')}}">Listar</a></li>
								<li><a href="{{route('media.create')}}">Insertar</a></li>
								<li><a href="javascript:void(0);">Eliminar</a></li>
								<li><a href="javascript:void(0);">Actualizar</a></li>
								<li><a href="javascript:void(0);">Reporte Basico</a></li>
								</li>
							</ul>
						</li>
						<!-- End Features -->

						<!-- Features1 -->
						<li class="dropdown active">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Funcionarios
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
								<li><a href="{{route('official.index')}}">Listar</a></li>
								<li><a href="{{route('official.create')}}">Insertar</a></li>
								<li><a href="javascript:void(0);">Eliminar</a></li>
								<li><a href="javascript:void(0);">Actualizar</a></li>
								<li><a href="javascript:void(0);">Reporte Basico</a></li>
								</li>
							</ul>
						</li>
						<!-- End Features1 -->

						<!-- Features2 -->
						<li class="dropdown active">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Cargo
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
								<li><a href="{{route('position.index')}}">Listar</a></li>
								<li><a href="{{route('position.create')}}">Insertar</a></li>
								<li><a href="javascript:void(0);">Eliminar</a></li>
								<li><a href="javascript:void(0);">Actualizar</a></li>
								<li><a href="javascript:void(0);">Reporte Basico</a></li>
								</li>
							</ul>
						</li>
						<!-- End Features2 -->

						<!-- Features 
						<li class="dropdown active">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Cliente
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
								<li><a href="javascript:void(0);">Listar</a></li>
								<li><a href="javascript:void(0);">Insertar</a></li>
								<li><a href="javascript:void(0);">Eliminar</a></li>
								<li><a href="javascript:void(0);">Actualizar</a></li>
								<li><a href="javascript:void(0);">Reporte Basico</a></li>
								</li>
							</ul>
						</li>
						End Features -->

						<!-- Search Block -->
						<li>
							<i class="search fa fa-search search-btn"></i>
							<div class="search-open">
								<div class="input-group animated fadeInDown">
									<input type="text" class="form-control" placeholder="Buscar">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Buscar</button>
									</span>
								</div>
							</div>
						</li>
						<!-- End Search Block -->
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>
		<!--=== End Header ===-->
@yield('content')
<br></br><br></br><br></br><br></br><br></br><br></br>

		<!--=== Footer v3 ===-->
		<div id="footer-v3" class="footer-v3">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-sm-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="../assets/img/logo2-default.png" alt=""></a>
							<p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
							<p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Simple List -->
						<div class="col-sm-3 md-margin-bottom-40">
							<div class="thumb-headline"><h2>About Unify</h2></div>
							<ul class="list-unstyled simple-list margin-bottom-20">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Forum</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Community</a></li>
								<li><a href="#">Stories</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>

							<div class="thumb-headline"><h2>Help &amp; Information Center</h2></div>
							<ul class="list-unstyled simple-list">
								<li><a href="#">Help</a></li>
								<li><a href="#">Customer Service</a></li>
								<li><a href="#">New on Unify</a></li>
								<li><a href="#">Tour the New Journey</a></li>
								<li><a href="#">Registration Requirements</a></li>
							</ul>
						</div><!--/col-md-3-->

						<div class="col-sm-3">
							<div class="thumb-headline"><h2>Topics</h2></div>
							<ul class="list-unstyled simple-list margin-bottom-20">
								<li><a href="#">Bootstrap</a></li>
								<li><a href="#">Font Awesome</a></li>
								<li><a href="#">WordPress</a></li>
								<li><a href="#">Favicon</a></li>
								<li><a href="#">Javascript</a></li>
								<li><a href="#">iOS</a></li>
							</ul>

							<div class="thumb-headline"><h2>Tools &amp; Formats</h2></div>
							<ul class="list-unstyled simple-list">
								<li><a href="#">Today's Paper</a></li>
								<li><a href="#">Journal Community</a></li>
								<li><a href="#">Video Canter</a></li>
							</ul>

							<div class="thumb-headline"><h2>Archives</h2></div>
							<ul class="list-unstyled simple-list">
								<li><a href="#">February 2014</a></li>
								<li><a href="#">August 2013</a></li>
								<li><a href="#">December 2013r</a></li>
							</ul>
						</div><!--/col-md-3-->

						<div class="col-sm-3">
							<div class="thumb-headline"><h2>Developers</h2></div>
							<ul class="list-unstyled simple-list margin-bottom-20">
								<li><a href="#">Web Development</a></li>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Android Development</a></li>
								<li><a href="#">PHP Development</a></li>
								<li><a href="#">Programmer</a></li>
								<li><a href="#">Start-up</a></li>
							</ul>

							<div class="thumb-headline"><h2>Digital Network</h2></div>
							<ul class="list-unstyled simple-list">
								<li><a href="#">Wrapbootstrap.com</a></li>
								<li><a href="#">Bootstrap.com</a></li>
								<li><a href="#">Fortawesome.com</a></li>
								<li><a href="#">Jquery.com</a></li>
								<li><a href="#">Wordpress.com</a></li>
								<li><a href="#">Unslpash.com</a></li>
								<li><a href="#">Github.com</a></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Simple List -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<!-- Terms Info-->
						<div class="col-md-6">
							<p>
								2015 &copy; All Rights Reserved. Unify Theme by
								<a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
							</p>
						</div>
						<!-- End Terms Info-->

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="social-icons pull-right">
								<li><a href="#" data-original-title="Facebook" class="rounded-x social_facebook"></a></li>
								<li><a href="#" data-original-title="Twitter" class="rounded-x social_twitter"></a></li>
								<li><a href="#" data-original-title="Goole Plus" class="rounded-x social_googleplus"></a></li>
								<li><a href="#" data-original-title="Linkedin" class="rounded-x social_linkedin"></a></li>
								<li><a href="#" data-original-title="Pinterest" class="rounded-x social_pintrest"></a></li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer v3 ===-->
	</div><!--/wrapper-->

	<!--=== Style Switcher ===-->
	<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
	<div class="style-switcher animated fadeInRight">
		<div class="style-swticher-header">
			<div class="style-switcher-heading">Style Switcher</div>
			<div class="theme-close"><i class="icon-close"></i></div>
		</div>

		<div class="style-swticher-body">
			<!-- Theme Colors -->
			<div class="style-switcher-heading">Theme Colors</div>
			<ul class="list-unstyled">
				<li class="theme-default theme-active" data-style="default" data-header="light"></li>
				<li class="theme-blue" data-style="blue" data-header="light"></li>
				<li class="theme-orange" data-style="orange" data-header="light"></li>
				<li class="theme-red" data-style="red" data-header="light"></li>
				<li class="theme-light" data-style="light" data-header="light"></li>
				<li class="theme-purple last" data-style="purple" data-header="light"></li>
				<li class="theme-aqua" data-style="aqua" data-header="light"></li>
				<li class="theme-brown" data-style="brown" data-header="light"></li>
				<li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
				<li class="theme-light-green" data-style="light-green" data-header="light"></li>
				<li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
				<li class="theme-teal last" data-style="teal" data-header="light"></li>
			</ul>

			<!-- Theme Skins -->
			<div class="style-switcher-heading">Theme Skins</div>
			<div class="row no-col-space margin-bottom-20 skins-section">
				<div class="col-xs-6">
					<button data-skins="default" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Light</button>
				</div>
				<div class="col-xs-6">
					<button data-skins="dark" class="btn-u btn-u-xs btn-u-dark btn-block skins-btn">Dark</button>
				</div>
			</div>

			<hr>

			<!-- Layout Styles -->
			<div class="style-switcher-heading">Layout Styles</div>
			<div class="row no-col-space margin-bottom-20">
				<div class="col-xs-6">
					<a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn">Wide</a>
				</div>
				<div class="col-xs-6">
					<a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn">Boxed</a>
				</div>
			</div>

			<hr>

			<!-- Theme Type -->
			<div class="style-switcher-heading">Theme Types and Versions</div>
			<div class="row no-col-space margin-bottom-10">
				<div class="col-xs-6">
					<a href="E-Commerce/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>
				</div>
				<div class="col-xs-6">
					<a href="One-Pages/Classic/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>
				</div>
			</div>

			<div class="row no-col-space">
				<div class="col-xs-6">
					<a href="Blog-Magazine/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>
				</div>
				<div class="col-xs-6">
					<a href="RTL/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">RTL <small class="dp-block">Version</small></a>
				</div>
			</div>
		</div>
	</div><!--/style-switcher-->
	<!--=== End Style Switcher ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="../assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="../assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="../assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="../assets/plugins/jquery.parallax.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="../assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="../assets/js/app.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!--[if lt IE 9]>
    <script src="../assets/plugins/respond.js"></script>
    <script src="../assets/plugins/html5shiv.js"></script>
    <script src="../assets/plugins/placeholder-IE-fixes.js"></script>
  <![endif]-->

      <!-- Scripts -->
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
