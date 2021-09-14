<section class="places section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Nuestros Productos</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cat-places-wrapper">
                    @foreach ($ciudades_top as $c)
                    @if (($c->addresses->count() != 0) && ($c->status == 1))
                    <div class="category-place-single">
                        <figure>
                            <a href="{{route('ciudad.show',$c->id)}}">
                                @foreach ($c->images as $image)
                                <img src="{{asset('storage/'.$image->url)}}" alt="imagen ciudad" style="width:545px; height: 270px;">
                                @endforeach
                            </a>
                            <figcaption>
                                <h3>{{$c->name}}</h3>
                                <p>({{$c->addresses->count()}})</p>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-place-single -->
                    @endif
                    @endforeach
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </div>
</section>
