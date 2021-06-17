<section class="header-breadcrumb bgimage overlay overlay--dark">
    <div class="bg_image_holder"><img src="img/breadcrumb1.jpg" alt=""></div>

    @include('layout.main_menu')

    <div class="breadcrumb-wrapper content_above">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-title">Bienvenido: {{$users->name}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- ends: .breadcrumb-wrapper -->
</section>


<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/" id="login-form">
                    <input type="text" class="form-control" placeholder="Username or Email" required>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                        <input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
                        <label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label>
                    </div>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign In</button>
                </form>
                <div class="form-excerpts">
                    <ul class="list-unstyled">
                        <li>Not a member? <a href="">Sign up</a></li>
                        <li><a href="">Recover Password</a></li>
                    </ul>
                    <div class="social-login">
                        <span>Or connect with</span>
                        <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/" id="signup-form">
                    <input type="email" class="form-control" placeholder="Email" required>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign Up</button>
                </form>
                <div class="form-excerpts">
                    <ul class="list-unstyled">
                        <li>Already a member? <a href="">Sign In</a></li>
                        <li><a href="">Recover Password</a></li>
                    </ul>
                    <div class="social-login">
                        <span>Or Signup with</span>
                        <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
