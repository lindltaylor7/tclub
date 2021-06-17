<section class="listing-details-wrapper bgimage">
    <div class="bg_image_holder"><img src="{{asset('img/details-img.jpg')}}" alt=""></div>
    @include('layout.main_menu')
    <div class="listing-info content_above">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <ul class="list-unstyled listing-info--meta">
                        <li>
                            <div class="average-ratings">
                                <span class="atbd_meta atbd_listing_rating">{{$unico->valorations->avg('puntuation')}}<i class="la la-star"></i></span>
                                <span><strong>{{$unico->valorations->count()}}</strong> Visitas</span>
                            </div>
                        </li>
                        <li>
                            @foreach ($unico->categories as $categor)
                                <div class="atbd_listing_category">
                                    <a href=""><span class="{{$categor->icon}}"></span>{{$categor->name}}</a>
                                </div>
                            @endforeach
                        </li>
                    </ul><!-- ends: .listing-info-meta -->
                    <h1>{{$unico->name}}</h1>
                    <p class="subtitle">{{$unico->slogan}}</p>
                </div>
                <div class="col-lg-4 col-md-5 d-flex align-items-end justify-content-start justify-content-md-end">
                    <div class="atbd_listing_action_area">
                        <div class="atbd_action atbd_save">
                            <div class="action_button">
                                <a href="" class="atbdp-favourites"><span class="la la-heart-o"></span> Save</a>
                            </div>
                        </div>
                        <div class="atbd_action atbd_share dropdown">
                            <span class="dropdown-toggle" id="social-links" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                <span class="la la-share"></span>Share
                            </span>
                            <div class="atbd_director_social_wrap dropdown-menu" aria-labelledby="social-links">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="" target="_blank"><span class="fab fa-facebook-f color-facebook"></span>Facebook</a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank"><span class="fab fa-twitter color-twitter"></span>Twitter</a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank"><span class="fab fa-youtube color-youtube"></span>Youtube</a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank"><span class="fab fa-instagram color-instagram"></span>Instagram</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Ends social share-->
                        </div>
                        <!-- Report Abuse-->
                        <div class="atbd_action atbd_report">
                            <div class="action_button">
                                <a href="" data-toggle="modal" data-target="#atbdp-report-abuse-modal"><span class="la la-flag-o"></span> Report</a>
                            </div>
                            <!-- Modal (report abuse form) -->
                        </div>
                    </div><!-- ends: .atbd_listing_action_area -->
                </div>
            </div>
        </div>
        <div class="modal fade" id="atbdp-report-abuse-modal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="atbdp-report-abuse-modal-label">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="/" id="atbdp-report-abuse-form" class="form-vertical">
                        <div class="modal-header">
                            <h3 class="modal-title" id="atbdp-report-abuse-modal-label">Report Abuse</h3>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="atbdp-report-abuse-message" class="not_empty">Your Complaint<span class="atbdp-star">*</span></label>
                                <textarea class="form-control" id="atbdp-report-abuse-message" rows="4" placeholder="Message..." required=""></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="moda_claim_listing" tabindex="-1" role="dialog" aria-labelledby="claim_listing_label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="claim_listing_label"><i class="la la-check-square"></i> Claim This Listing</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Your Name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="url" class="form-control" placeholder="Listing URL" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="form-control" rows="6" placeholder="Provie Listing Information" required></textarea>
                                        <button type="submit" class="btn btn-secondary">Submit Query</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .listing-info -->
</section><!-- ends: .card-details-wrapper -->