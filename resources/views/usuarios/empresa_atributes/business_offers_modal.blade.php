
<div class="modal fade" id="business_offers_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Agregar ofertas de la empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="signup-form" method="">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de oferta</label>
                        <input type="text" class="form-control" name="name"  placeholder="Nombre de oferta" required>
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Descripcion de oferta </label>
                        <input type="text" class="form-control" name="description"  placeholder="Descripcion" required>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price"  placeholder="Precio" required>
                    </div>   
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de inicio</label>
                        <input type="text" class="form-control" name="start_date"  placeholder="Fecha de inio de oferta" required>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de expiro</label>
                        <input type="text" class="form-control" name="end_date"  placeholder="Fecha de expiro de oferta" required>
                    </div>  
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar ofertas</button>
                </form>
            </div>
        </div>
    </div>
</div>

