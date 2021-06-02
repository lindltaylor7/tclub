@extends('layout.template')

@section('title', 'Ciudades')

@section('name_page', 'Ciudades')

@section('content')
    @include('layout.header')
    <section class="places section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Destination We Love</h2>
                        <p>Explore best listings around the world by city</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cat-places-wrapper">
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="img/place1.jpg" alt=""></a>
                                <figcaption>
                                    <h3>London, UK</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="img/place2.png" alt=""></a>
                                <figcaption>
                                    <h3>New York</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="img/place3.png" alt=""></a>
                                <figcaption>
                                    <h3>Sydney</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="img/place4.png" alt=""></a>
                                <figcaption>
                                    <h3>Paris, France</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                    </div><!-- ends: .col-lg-12 -->
                </div>
                <div class="col-lg-12">
                    <div class="place-list-wrapper">
                        <ul class="list-unstyled">
                            <li><a href="">Dubai (45)</a></li>
                            <li><a href="">Melbourne (95)</a></li>
                            <li><a href="">Sydney (90)</a></li>
                            <li><a href="">Brisbane (73)</a></li>
                            <li><a href="">Perth (97)</a></li>
                            <li><a href="">Toronto (960)</a></li>
                            <li><a href="">Vancouver (46)</a></li>
                            <li><a href="">Montreal (46)</a></li>
                            <li><a href="">Calgary (16)</a></li>
                            <li><a href="">Edmonton (6)</a></li>
                            <li><a href="">Ottawa (53)</a></li>
                            <li><a href="">Atlantic Canada (83)</a></li>
                            <li><a href="">Berlin (71)</a></li>
                            <li><a href="">Munich (46)</a></li>
                            <li><a href="">Hamburg Area (727)</a></li>
                            <li><a href="">Frankfurt Area (655)</a></li>
                            <li><a href="">Stuttgart Area (9)</a></li>
                            <li><a href="">Barcelona (46)</a></li>
                            <li><a href="">Madrid (790)</a></li>
                            <li><a href="">Spain (52)</a></li>
                            <li><a href="">Dublin (657)</a></li>
                            <li><a href="">Galway (12)</a></li>
                            <li><a href="">Limerick (6)</a></li>
                            <li><a href="">Tokyo, JP (24)</a></li>
                            <li><a href="">Kanagawa (276)</a></li>
                            <li><a href="">Osaka (146)</a></li>
                            <li><a href="">Kyoto (70)</a></li>
                            <li><a href="">Nagoya (64)</a></li>
                            <li><a href="">Mexico City (195)</a></li>
                            <li><a href="">Cancun (328)</a></li>
                            <li><a href="">Monterrey (27)</a></li>
                            <li><a href="">Baja California Sur (42)</a></li>
                            <li><a href="">Amsterdam (446)</a></li>
                            <li><a href="">Maastricht (3)</a></li>
                            <li><a href="">London (25)</a></li>
                            <li><a href="">Yorkshire (967)</a></li>
                            <li><a href="">Edinburgh (923)</a></li>
                            <li><a href="">Kent (80)</a></li>
                            <li><a href="">Manchester (60)</a></li>
                            <li><a href="">Glasgow (52)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.footer')
@endsection
