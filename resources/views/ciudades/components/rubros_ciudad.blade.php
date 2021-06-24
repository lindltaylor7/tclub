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
                @if(($categoria->name == $cat->name) && ($categoria->status == 1))
                    <div class="col-lg-4 col-sm-6">
                        <div class="category-single category--img">
                            <figure class="category--img4">
                                @foreach ($categoria->images as $image)
                                    <img  src="{{asset('storage/'.$image->url)}}" alt="" style="width:350px; height:280px; object-fit: cover;">
                                @endforeach
                                <figcaption class="overlay-bg">
                                    <a href="{{route('rubro.show',$categoria->id)}}" class="cat-box">
                                        <div>
                                            <div class="icon">
                                                <span class="{{$categoria->icon}}"></span>
                                            </div>
                                            <h4 class="cat-name">{{$categoria->name}}</h4>
                                            <span class="badge badge-pill badge-success">{{$categoria->cities->count()}} Empresas</span>
                                        </div>
                                    </a>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-single -->
                    </div><!-- ends: .col -->
                @endif
            @endforeach
        </div>
    </div>
</section><!-- ends: .categories-cards -->