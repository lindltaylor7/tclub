<section class="categories-cards section-padding-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>¿Qué rubro está buscando en {{$ciudad->name}}?</h2>
                    <p>Descubra los mejores restaurantes, tiendas, hoteles, centros turísticos y muchos lugares en {{$ciudad->name}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categorias as $categoria)
                @foreach ($categoria->cities as $c)
                    @if($c->name == $cat->name)
                    <div class="col-lg-4 col-sm-6">
                        <div class="category-single category--img">
                            <figure class="category--img4">
                                <img src="{{asset('img/cat1.jpg')}}" alt="">
                                <figcaption class="overlay-bg">
                                    <a href="{{route('rubro.show',$categoria->id)}}" class="cat-box">
                                        <div>
                                            <div class="icon">
                                                <span class="{{$categoria->icon}}"></span>
                                            </div>
                                            <h4 class="cat-name">{{$categoria->name}}</h4>
                                            @foreach ($cat as $c)
                                            <span class="badge badge-pill badge-success">{{$categoria->cities->count()}} Empresas</span>
                                            @endforeach
                                        </div>
                                    </a>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-single -->
                    </div><!-- ends: .col -->
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</section><!-- ends: .categories-cards -->