<section class="intro-wrapper bgimage overlay overlay--dark">
    <div class="bg_image_holder"><img src="img/intro.jpg" alt=""></div>
    <div class="mainmenu-wrapper">
        <div class="menu-area menu1 menu--light">
            <div class="top-menu-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-fullwidth">
                                <div class="logo-wrapper order-lg-0 order-sm-1">
                                    <div class="logo logo-top">
                                        <a href="index.html"><img src="img/logo-white.png" alt="logo image" class="img-fluid"></a>
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
                                                        <a href="{{route('home')}}">Home</a>

                                                    </li>
                                                    <li class="dropdown has_dropdown">
                                                        <a href="#" class="dropdown-toggle" id="drop3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
                                                        <ul class="dropdown-menu" aria-labelledby="drop3">
                                                            <li><a href="{{route('rubrounico')}}">Rubro unico</a></li>
                                                            <li><a href="{{route('busqueda_avanzada')}}">Busqueda avanzada</a></li>
                                                            <li><a href="all-listings-list.html">Listing List</a></li>


                                                            <li><a href="listing-details.html">Listing Details</a></li>
                                                            <li><a href="add-listing.html">Add Listing</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown has_dropdown">
                                                        <a href="#" class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                                        <ul class="dropdown-menu" aria-labelledby="drop4">
                                                            <li><a href="all-categories.html">All Categories</a></li>
                                                            <li><a href="all-locations.html">All Locations</a></li>
                                                        </ul>
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
                                                            <li><a href="invoice.html">Invoice</a></li>
                                                            <li><a href="faqs.html">FAQ</a></li>
                                                            <li><a href="about.html">About</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="cards.html">Products Cards</a></li>
                                                            <li><a href="headers.html">Header Styles</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown has_dropdown">
                                                        <a class="dropdown-toggle" href="#" id="drop1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Blog
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="drop1">
                                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                            <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                                            <li><a href="blog-details-standard.html">Blog Details</a></li>
                                                            <!-- dropdowns example -->
                                                            <li class="dropdown-menu--inner">
                                                                <a href="#">Dropdown Levels</a>
                                                                <ul class="list-unstyled">
                                                                    <li><a href="">Places</a></li>
                                                                    <li><a href="">Shop</a></li>
                                                                    <li><a href="">Business</a></li>
                                                                </ul>
                                                            </li>
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
                                                        <input type="text" class="form-control search_field top-search-field" placeholder="What are you looking for?" autocomplete="off">
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
                                                    <a href="add-listing.html" class="btn btn-xs btn-gradient btn-gradient-two">
                                                        <span class="la la-plus"></span> Add Listing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
                                                    <span>or</span>
                                                    <a href="" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>
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
                                                <li><a href="dashboard-listings.html">My Profile</a></li>
                                                <li><a href="dashboard-listings.html">My Listing</a></li>
                                                <li><a href="dashboard-listings.html">Favorite Listing</a></li>
                                                <li><a href="add-listing.html">Add Listing</a></li>
                                                <li><a href="">Logout</a></li>
                                            </ul>
                                            <div class="search_area">
                                                <form action="/">
                                                    <div class="input-group input-group-light">
                                                        <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-secondary">Search</button>
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
    <div class="directory_content_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="search_title_area">
                        <h2 class="title">Triad Club</h2>
                        <p class="sub_title">Encuentra las empresas top del Perú</p>
                    </div><!-- ends: .search_title_area -->
                    <form action="/" class="search_form">
                        <div class="atbd_seach_fields_wrapper">
                            <div class="single_search_field search_query">
                                <input class="form-control search_fields" type="text" placeholder="Buscar...">
                            </div>
                            <div class="single_search_field search_category">
                                <select class="search_fields" id="at_biz_dir-category">
                                    <option value="">Selecciona una categoria</option>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="single_search_field search_location">
                                <select class="search_fields" id="at_biz_dir-location">
                                    <option value="">Selecciona un lugar</option>
                                    <option value="ab">AB Simple</option>
                                    <option value="australia">Australia</option>
                                    <option value="australia-australia">Australia</option>
                                </select>
                            </div>
                            <div class="atbd_submit_btn">
                                <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Buscar</button>
                            </div>
                        </div>
                    </form><!-- ends: .search_form -->
                    <div class="directory_home_category_area">
                        <ul class="categories">
                            <li>
                                <a href="">
                                    <span class="color-primary"><i class="la la-cutlery"></i></span>
                                    Restaurants
                                </a>
                            </li>
                            <li>

                                <a href="{{route('ciudades')}}">
                                    <span class="color-success"><i class="la la-map-marker"></i></span>
                                    Ciudades
                                </a>
                            </li>
                            <li>
                                <a href="{{route('rubros')}}">
                                    <span class="color-warning"><i class="la la-shopping-cart"></i></span>
                                    Rubros
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="color-danger"><i class="la la-bed"></i></span>
                                    Hotels
                                </a>
                            </li>
                        </ul>
                    </div><!-- ends: .directory_home_category_area -->
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </div><!-- ends: .directory_search_area -->

</section>


<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/" id="login-form">
                    <input type="text" class="form-control" placeholder="Username or Email" required>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                        <input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
                        <label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label>
                    </div>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign In</button>
                </form>
                <div class="form-excerpts">
                    <ul class="list-unstyled">
                        <li>Not a member? <a href="">Sign up</a></li>
                        <li><a href="">Recover Password</a></li>
                    </ul>
                    <div class="social-login">
                        <span>Or connect with</span>
                        <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('empresa.register_modal')

<<<<<<< HEAD:resources/views/layout/main_header.blade.php
<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Registro de Empresa</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('business.register')}}" id="signup-form" method="post">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Nombre de la empresa" required>
                    <input type="text" class="form-control" name="ruc" placeholder="RUC" required>
                    <input type="text" class="form-control" name="phone" placeholder="Teléfono o Celular" required>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrarse</button>

                </form>
                <div class="form-excerpts">
                    <ul class="list-unstyled">
                        <li>Already a member? <a href="">Sign In</a></li>
                        <li><a href="">Recover Password</a></li>
                    </ul>
                    <div class="social-login">
                        <span>Or Signup with</span>
                        <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
=======
>>>>>>> 95caca26b7324332653a5bf53f3cadff128e4419:resources/views/layout/headers/main_header.blade.php
