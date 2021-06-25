<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Registrar Usuario</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form action="{{route('user.register')}}" id="signup-form" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="title" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="name" placeholder="Nombre" required="">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="phone" placeholder="Teléfono o Celular" maxlength="11">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="atbdp-contact-email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Password</label>
                        <input type="password" class="form-control" id="atbdp-contact-email" name="password" placeholder="Contraseña" required="">
                    </div>

                    <div class="form-group">
                    <label for="title" class="form-label">Imagen de Usuario: </label>   
                    <div class="user_pro_img_area" style="padding: 0px;">
                        <div class="col-lg-3 image-info">
                          </div>
                        <div class="custom-file-upload">
                            <input type="file" id="file" name="file">
                            <label for="file" class="btn btn-sm btn-secondary">Cargar Imagen de Usuario</label>
                        </div>           
                    </div>
                    <div class="image-wrapper">
                        <img id="picture" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                    </div> 
                   </div>

                    <br>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrarse</button>

                </form>
                <div class="form-excerpts">
                    <ul class="list-unstyled">
                        <li>¿Ya eres miembro? <a href="" data-toggle="modal" data-target="#login_modal">Login</a></li>
                        <li><a href="">Recuperar contraseña</a></li>
                    </ul>
                </div>
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
    document.getElementById("file").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>