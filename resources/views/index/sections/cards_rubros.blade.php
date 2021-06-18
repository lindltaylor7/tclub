<section class="categories-cards section-padding-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>¿Qué rubro estás buscando?</h2>
                    <p>Descubra los mejores restaurantes, tiendas, hoteles, centros turísticos y muchos lugares en todo el Perú</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categorias as $categoria)
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
                                        <span class="badge badge-pill badge-success">{{$categoria->businesses->count()}} Empresas</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
            @endforeach
        </div>
    </div>
</section><!-- ends: .categories-cards -->