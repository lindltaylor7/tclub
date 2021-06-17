
<div class="modal fade" id="business_socials_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Agregar redes sociales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="signup-form" method="">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title" class="form-label">Youtube</label>
                        <input type="text" class="form-control" name="youtubeurl"  placeholder="Url de youtube" required>
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="facebookurl"  placeholder="Url de facebook" required>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="instagramurl"  placeholder="Url de instagram" required>
                    </div>     
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar Redes Sociales</button>

                </form>
               
            </div>
        </div>
    </div>
</div>

