<section class="categories-cards section-padding-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Busque su Producto</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus assumenda, sint voluptatum dolores 
                        exercitationem similique praesentium perspiciatis velit adipisci ipsum iure expedita eos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categorias as $categoria)
            @if (($categoria->businesses->count() != 0) && ($categoria->status == 1))
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
                                    <span class="badge badge-pill badge-success">{{$categoria->businesses->count()}}
                                        Empresas</span>
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
