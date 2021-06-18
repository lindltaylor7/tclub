<div class="modal fade" id="RegisterCity_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nueva Ciudad</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('ciudad.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre: (*)</label>
                        <input type="text" class="form-control" name="name"  placeholder="Ingrese ciudad" required>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Agregue Imagen</label>
                        <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                                 <input id="fileCity" type="file"  name="fileCity">
                        </div>

                            <div class="image-wrapper">
                                <img id="pictureCity" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                            </div>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Guardar</button>

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
document.getElementById("fileCity").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureCity").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
