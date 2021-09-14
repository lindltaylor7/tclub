<div class="modal fade" id="addCategory_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Registrar nueva Categoría</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de Categoría</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="name" placeholder="Nombre" required="">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Icono de Categoría</label>
                        <select name="icon" id="icon" class="form-control">
                            <option value="la la-cutlery">Restaurantes</option>
                            <option value="la la-mortar-board">Educación</option>
                            <option value="la la-hospital-o">Salud</option>
                            <option value="la la-balance-scale">Consultoría</option>
                            <option value="la la-wifi">Telecomunicaciones</option>
                            <option value="la la-laptop">Tecnología</option>
                            <option value="la la-hotel">Hotelería</option>
                            <option value="la la-building">Constructora</option>
                            <option value="la la-lightbulb-o">Artesanía</option>
                            <option value="la la-black-tie">Moda</option>
                            <option value="la la-dollar">Bancos</option>
                            <option value="la la-align-left">Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Imagen Referencial: </label>
                    <div class="user_pro_img_area" style="padding: 0px;">
                        <div class="col-lg-3 image-info">
                        </div>
                        <div class="custom-file-upload">
                        <input id="fileCategory" type="file"  name="fileCategory">
                        <label for="fileCategory" class="btn btn-sm btn-secondary">Imagen Referencial</label>
                        </div>
                    </div>
                    <div class="image-wrapper">
                        <img id="pictureCategory" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                    </div>
                      </div>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar</button>
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
