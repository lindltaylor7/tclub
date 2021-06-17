<section class="section-padding-strict section-bg">
    <div class="atbd_location_grid_wrap">
        <div class="container">
            <div class="row">
                @foreach ($ciudades as $ciu)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{route('ciudad.show',$ciu->id)}}" class="atbd_location_grid">{{$ciu->name}} ({{$ciu->addresses->count()}})</a>
                    </div><!-- ends: .col-lg-3 -->
                @endforeach
            </div>
        </div>
    </div><!-- ends: .atbd_location_grid_wrap -->
</section><!-- ends: section -->