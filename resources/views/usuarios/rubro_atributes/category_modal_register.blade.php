<div class="modal fade" id="addCategory_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Registrar nuevo Rubro</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de Rubro</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="name" placeholder="Nombre de rubro" required="">
                    </div> 
                    <div class="form-group">
                        <label for="title" class="form-label">Icono de Rubro</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="icon" placeholder="Icono de rubro" required="">
                    </div>                         
                    <div class="form-group">
                        <label for="title" class="form-label">Imagen de Rubro: </label>      
                    <div class="user_pro_img_area" style="padding: 0px;">
                        <div class="col-lg-3 image-info">
                        </div>
                        <label class="btn btn-sm btn-secondary">Imagen de Rubro</label>
                        <input id="fileCategory" type="file"  name="fileCategory">
                    </div>
                    <div class="image-wrapper">
                        <img id="pictureCategory" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                    </div>
                      </div>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar Rubro</button>
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
    document.getElementById("fileCategory").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("pictureCategory").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>
