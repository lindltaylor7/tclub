<div class="mainmenu-wrapper">
    <div class="menu-area menu1 menu--light">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper order-lg-0 order-sm-1">
                                <div class="logo logo-top">
                                    <a href="{{route('home')}}"><img src="{{asset('img/logo-white.png')}}" alt="logo image" class="img-fluid"></a>
                                </div>
                            </div><!-- ends: .logo-wrapper -->
                            <div class="menu-container order-lg-1 order-sm-0">
                                <div class="d_menu">
                                    <nav class="navbar navbar-expand-lg mainmenu__menu">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon icon-menu"><i class="la la-reorder"></i></span>
                                        </button>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                            <ul class="navbar-nav">
                                                <li>
                                                    <a href="{{route('home')}}">Inicio</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('empresa.index')}}">Empresas</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('ciudad.index')}}">Ciudades</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('rubro.index')}}">Categorias</a>
                                                </li>
                                                <li class="dropdown has_dropdown">
                                                    <a class="dropdown-toggle" href="#" id="drop2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Pages
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="drop2">
                                                        <li><a href="author-profile.html">Author Profile</a></li>
                                                        <li><a href="dashboard-listings.html">Author Dashboard</a></li>
                                                        <li><a href="pricing-plans.html">Pricing Plans</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="faqs.html">Preguntas</a></li>
                                                        <li><a href="about.html">Sobre Nosotros</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                            </div>
                            <div class="menu-right order-lg-2 order-sm-2">
                                <div class="search-wrapper">
                                    <div class="nav_right_module search_module">
                                        <span class="icon-left" id="basic-addon9"><i class="la la-search"></i></span>
                                        <div class="search_area">
                                            <form action="/">
                                                <div class="input-group input-group-light">
                                                    <input type="text" class="form-control search_field top-search-field" placeholder="Buscar" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="search-categories">
                                        <ul class="list-unstyled">
                                            <li><a href=""><span class="la la-glass bg-danger"></span> Food & Drinks</a></li>
                                            <li><a href=""><span class="la la-cutlery bg-primary"></span> Restaurants</a></li>
                                            <li><a href=""><span class="la la-map-marker bg-success"></span> Places</a></li>
                                            <li><a href=""><span class="la la-shopping-cart bg-secondary"></span> Shopping & Store</a></li>
                                            <li><a href=""><span class="la la-bed bg-info"></span> Hotels</a></li>
                                            <li><a href=""><span class="la la-bank bg-warning"></span> Art & History</a></li>
                                        </ul>
                                    </div>
                                </div><!-- ends: .search-wrapper -->
                                <!-- start .author-area -->
                                <div class="author-area">
                                    <div class="author__access_area">
                                        <ul class="d-flex list-unstyled align-items-center">
                                            <li>
                                                <a href="" class="access-link btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#login_modal">Login</a>
                                                <span>or</span>
                                                <a href="" class="access-link btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#signup_modal">Registro</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end .author-area -->
                                <div class="offcanvas-menu d-none">
                                    <a href="" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                    <div class="offcanvas-menu__contents">
                                        <a href="" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                        <div class="author-avatar">
                                            <img src="img/author-avatar.png" alt="" class="rounded-circle">
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><a href="dashboard-listings.html">Mi Perfil</a></li>
                                            <li><a href="dashboard-listings.html">Mis Empresas</a></li>
                                            <li><a href="dashboard-listings.html">Mis Ofertas</a></li>
                                            <li><a href="add-listing.html">Agregar Empresa</a></li>
                                            <li><a href="">Cerrar Sesión</a></li>
                                        </ul>
                                        <div class="search_area">
                                            <form action="/">
                                                <div class="input-group input-group-light">
                                                    <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-secondary">Buscar</button>
                                            </form>
                                        </div><!-- ends: .search_area -->
                                    </div><!-- ends: .author-info -->
                                </div><!-- ends: .offcanvas-menu -->
                            </div><!-- ends: .menu-right -->
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->
    </div>
</div><!-- ends: .mainmenu-wrapper -->