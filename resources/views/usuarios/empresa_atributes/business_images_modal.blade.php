
<div class="modal fade" id="business_images_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Agregar imagenes de tu empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="signup-form" method="">
                    @csrf    
                    <div class="form-group">
                        <label for="title" class="form-label">Imagen1</label>
                        <input type="text" class="form-control" name="imagen1"  placeholder="Url de imagen" required>
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Imagen id</label>
                        <input type="text" class="form-control" name="imageable_id"  placeholder="Id business" required>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Imagen type</label>
                        <input type="text" class="form-control" name="imageable_type"  placeholder="Tipo de ID" required>
                    </div>     
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar imagenes</button>

                </form>
            </div>
        </div>
    </div>
</div>

