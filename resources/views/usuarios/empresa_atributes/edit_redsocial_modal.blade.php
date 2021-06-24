
<div class="modal fade" id="edit_redsocial_update{{$businesse->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Redes Sociales de tu empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('social.update',$businesse->social->id)}}" id="signup-form" method="post">
                    @csrf
                     @method('put')
                    <input type="hidden" name="business_id" value="{{$businesse->id}}">
                    <div class="form-group">
                        <label for="title" class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="facebook_url"  placeholder="Agregar link de Facebook (opcional)" value="{{$businesse->social->facebook_url}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Youtube</label>
                        <input type="text" class="form-control" name="youtube_url"  placeholder="Agregar link de Youtube (opcional)" value="{{$businesse->social->youtube_url}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="instagram_url"  placeholder="Agregar link de Instagram (opcional)" value="{{$businesse->social->instagram_url}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Pagina Web</label>
                        <input type="text" class="form-control" name="web_url"  placeholder="Agregar link de Página Web (opcional)" value="{{$businesse->social->web_url}}">
                    </div>

                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Guardar Redes Sociales</button>

                </form>



            </div>
        </div>
    </div>
</div>

