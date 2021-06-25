<section class="intro-wrapper bgimage overlay overlay--dark">

    <div class="bg_image_holder"><img src="{{asset('img/portada-main.jpg')}}" alt=""></div>
    @include('layout.main_menu')
    <div class="directory_content_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="search_title_area">

                        <h2 class="title">TRIAD CLUB</h2>
                        <p class="sub_title">Encuentra todas las empresas TOP del Perú</p>

                    </div><!-- ends: .search_title_area -->
                    <form method="POST" action="{{route('mostrar')}}" class="search_form">
                        @csrf

                        <div class="atbd_seach_fields_wrapper">
                            <div class="single_search_field search_query">

                                <input class="form-control search_fields" name="search" type="search" placeholder="Buscar..." required>
                            </div>
                            <div class="single_search_field search_category">

                                <select class="search_fields" id="at_biz_dir-category">
                                    <option value="#">Seleccione un Rubro</option>
                                    @foreach ($categorias as $categoria)
                                    @if($categoria->status == 1)
                                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="single_search_field search_location">
                                <select name="ciudad" class="search_fields" id="at_biz_dir-location">
                                    <option value="" selected="true" disabled="disabled">Seleccione una Ciudad</option>
                                    @foreach ($ciudades as $ciudad)
                                    @if($ciudad->status == 1)
                                        <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="atbd_submit_btn">
                                <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Buscar</button>
                            </div>
                        </div>
                    </form>
                    <div class="directory_home_category_area">
                        <ul class="categories">

                            @foreach ($categorias as $cat)
                            @if($cat->status == 1)
                                <li>
                                    <a href="{{route('rubro.show',$cat->id)}}" value="{{$cat->id}}">
                                        <span class="color-success"><i class="{{$cat->icon}}"></i></span>
                                        {{$cat->name}}
                                    </a>
                                </li>
                            @endif
                            @endforeach
                        </ul>
                    </div><!-- ends: .directory_home_category_area -->
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </div><!-- ends: .directory_search_area -->
</section><!-- ends: .intro-wrapper -->


@include('layout.modals.modal_login')

