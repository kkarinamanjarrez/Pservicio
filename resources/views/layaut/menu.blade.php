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
