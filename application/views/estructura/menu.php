        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <h2>Aplicativo SUNAT</h2>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="<?php echo base_url(); ?>assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?=$username?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
		      <!-- header area start -->
			  <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li class="active"> 
                                        <a href="<?php echo site_url('login/valida');?>"><i class="ti-home"></i><span>Inicio</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-server"></i><span>Apartado 1</span></a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Generar datos AE</a></li>
											<li><a href="index.html">Consolidado PDT</a></li>
											<li><a href="index.html">Otros Reportes</a></li>
                                        </ul>
                                    </li>
									<li>
                                        <a href="javascript:void(0)"><i class="ti-server"></i><span>Apartado 2</span></a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Directorio</a></li>
											<li><a href="index.html">Consolidado</a></li>
											<li><a href="index.html">Estados disgregados</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->

        <!-- page title area end -->
