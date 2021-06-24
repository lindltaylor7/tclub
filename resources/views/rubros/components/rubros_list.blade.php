<section class="categories-cards section-padding-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>¿Que rubro estas buscando?</h2>
                    <p>Visualizaras los rubros  cuantas empresas tiene</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($rubros as $rubro)
            @if($rubro->status == 1)
            <div class="col-lg-4 col-sm-6">
                <div class="category-single category--img">
                    <figure class="category--img4">
                        @foreach ($rubro->images as $image)
                        @if($image->url)
                        <img src="{{asset('storage/'.$image->url)}}" alt="">
                        @else
                        <img src="https://uladech.edu.pe/images/stories/noticias/portada/habilidades-digitales-aptitus-big.jpg" alt="">
                        @endif
                        @endforeach

                        <figcaption class="overlay-bg">
                            <a href="{{route('rubrounico',$rubro->id)}}" class="cat-box">
                                <div>
                                    <div class="icon">
                                        <span class="la la-hotel"></span>
                                    </div>
                                    <h4 class="cat-name">{{$rubro->name}}</h4>
                                    <span class="badge badge-pill badge-success">{{$rubro->businesses->count()}} empresas</span>
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
</section>