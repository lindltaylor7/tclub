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
                    @foreach ($ciudades_top as $ciudad_top)
                        <div class="category-place-single">
                            <figure>
                                <a href="{{route('ciudad.show',$ciudad_top->id)}}"><img src="{{asset('img/place1.jpg')}}" alt=""></a>
                                <figcaption>
                                    <h3>{{$ciudad_top->name}}</h3>
                                    <p>{{$ciudad_top->addresses->count()}} empresas</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->                        
                    @endforeach
                </div><!-- ends: .col-lg-12 -->
            </div>
            <div class="col-lg-12">
                <div class="place-list-wrapper">
                    <ul class="list-unstyled">
                        @foreach ($ciudades as $ciudad)
                            <li><a href="">{{$ciudad->name}} ({{$ciudad->addresses->count()}})</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .places -->