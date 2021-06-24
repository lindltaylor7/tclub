<div class="mainmenu-wrapper">
    <div class="menu-area menu1 menu--light">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper order-lg-0 order-sm-1">
                                <div class="logo logo-top">
                                    <a href="{{route('home')}}"><img src="{{asset('img/logo-td.png')}}" width="100"
                                            alt="logo image" class="img-fluid"></a>
                                </div>
                            </div><!-- ends: .logo-wrapper -->
                            <div class="menu-container order-lg-1 order-sm-0">
                                <div class="d_menu">
                                    <nav class="navbar navbar-expand-lg mainmenu__menu">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon icon-menu"><i
                                                    class="la la-reorder"></i></span>
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
                                                    <a href="{{route('rubro.index')}}">Rubros</a>
                                                </li>
                                                {{-- <li class="dropdown has_dropdown">
                                                    <a class="dropdown-toggle" href="#" id="drop2" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Nosotros
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="drop2">
                                                        <li><a href="author-profile.html">Author Profile</a></li>
                                                        <li><a href="dashboard-listings.html">Author Dashboard</a></li>
                                                        <li><a href="pricing-plans.html">Pricing Plans</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="faqs.html">Preguntas</a></li>
                                                        <li><a href="about.html">Sobre Nosotros</a></li>
                                                    </ul>
                                                </li> --}}
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
                                                    <input type="text"
                                                        class="form-control search_field top-search-field"
                                                        placeholder="Buscar" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="search-categories">
                                        <ul class="list-unstyled">
                                            @foreach ($categorias as $rubro)
                                                <li><a href="{{route('rubro.show',$rubro->id)}}"><span class="{{$rubro->icon}} bg-success"></span> {{$rubro->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div><!-- ends: .search-wrapper -->
                                <!-- start .author-area -->
                                <div class="author-area">



                                        <ul class="navbar-nav">
                                            @if (Auth::check())
                                            <div class="menu-container order-lg-1 order-sm-0">
                                                <div class="d_menu">
                                                    <nav class="navbar navbar-expand-lg mainmenu__menu">
                                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                            data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse"
                                                            aria-expanded="false" aria-label="Toggle navigation">
                                                            <span class="navbar-toggler-icon icon-menu"><i
                                                                    class="la la-reorder"></i></span>
                                                        </button>
                                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                                        <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                                            <ul class="navbar-nav">
                                                                <li class="dropdown has_dropdown">
                                                                    <a class="dropdown-toggle" href="#" id="drop2" role="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Bienvenido {{Auth::user()->name}}
                                                                    </a>
                                                                    <ul class="dropdown-menu" aria-labelledby="drop2">
                                                                        <li><a href="{{route('user.dashboard',Auth::id())}}">Dashboard</a></li>
                                                                        <li>
                                                                        <form style="display: inline" action="{{route('logout')}}" method="POST">
                                                                            @csrf
                                                                            <a href="#" onclick="this.closest('form').submit()">Log Out</a>
                                                                        </form>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.navbar-collapse -->
                                                    </nav>
                                                </div>
                                            </div>

                                            @else
                                            <li>
                                                <a href="" class="access-link btn btn-xs btn-gradient btn-gradient-two"
                                                    data-toggle="modal" data-target="#login_modal">Login</a>
                                                <span>o</span>
                                                <a href="" class="access-link btn btn-xs btn-gradient btn-gradient-two"
                                                    data-toggle="modal" data-target="#signup_modal">Registro</a>
                                            </li>
                                            @endif



                                        </ul>

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
                                            @if (Auth::check())
                                            <li><a href="{{route('user.dashboard',Auth::id())}}">Mi Dashboard</a></li>

                                            <li>
                                                <form action="{{route('logout')}}" method="POST">
                                                    <a href="#" onclick="this.closest('form').submit()">Cerrar
                                                        Sesión</a>
                                                </form>
                                            </li>
                                            @else
                                            <li>
                                                <a href="" class="access-link btn btn-xs btn-gradient btn-gradient-two mb-3"
                                                    data-toggle="modal" data-target="#login_modal">Login</a>

                                                <a href="" class="access-link btn btn-xs btn-gradient btn-gradient-two"
                                                    data-toggle="modal" data-target="#signup_modal">Registro</a>
                                            </li>
                                            @endif

                                        </ul>
                                     <!-- ends: .search_area -->
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
@include('usuarios.modal.register')
