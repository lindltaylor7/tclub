<section class="header-breadcrumb bgimage overlay overlay--dark">
    <div class="bg_image_holder">
        @foreach ($unico->images as $image)
        <img src="{{asset('storage/'.$image->url)}}" alt="">
        @endforeach
    </div>
    @include('layout.main_menu')
    <div class="breadcrumb-wrapper content_above">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-title">{{$unico->name}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{route('ciudad.show',$ciudad->id)}}">{{$ciudad->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$unico->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- ends: .breadcrumb-wrapper -->
</section>
