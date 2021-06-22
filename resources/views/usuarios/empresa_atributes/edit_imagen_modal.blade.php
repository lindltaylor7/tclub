<div class="modal fade" id="Update_imagen{{$businesse->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Cambiar Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('bussines.update',$businesse->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="form-group">
                        <label for="title" class="form-label">Agregue Imagen</label>
                        <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                            <input id="fileBusinessUpdate" type="file"  name="fileBusinessUpdate">
                        </div>
                        <div class="image-wrapper">
                            <img id="pictureBusinessUpdate" src="{{asset('storage/'.$image->url)}}" alt="">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    .image-wrapper{
        position:  relative;
        padding-bottom: 56.25%;
    }
    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>

<script>
//CAMBIAR IMAGEN CUADNO SE SELECCIONE UNA FOTO
document.getElementById("fileBusinessUpdate").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureBusinessUpdate").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>