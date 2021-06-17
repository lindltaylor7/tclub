<section class="places section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Nuestro Perú</h2>
                    <p>Explora las mejores empresas del país por ciudades</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cat-places-wrapper">
                    @foreach ($ciudades_top as $c)
                    <div class="category-place-single">
                        <figure>
                            <a href="{{route('ciudad.show',$c->id)}}"><img src="{{asset('img/place1.jpg')}}" alt=""></a>
                            <figcaption>
                                <h3>{{$c->name}}</h3>
                                <p>({{$c->addresses->count()}})</p>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-place-single -->
                    @endforeach
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </div>
</section>