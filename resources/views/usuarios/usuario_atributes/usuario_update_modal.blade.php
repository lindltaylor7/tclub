<div class="modal fade" id="User_update{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuario.update',$usuario->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre: (*)</label>
                        <input type="text" class="form-control" name="name" value="{{$usuario->name}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Correo:</label>
                        <input type="email" class="form-control" name="email" value="{{$usuario->email}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="password" value="{{$usuario->password}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="phone" value="{{$usuario->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Tipo de Usuario:</label>
                        <div class="select-basic">
                            <select name="type" class="form-control ad_search_category" id="type">
                                <option value="Free">Free</option>
                                <option value="Premium">Premium</option>
                            </select>
                        </div>
                    </div><!-- ends: .form-group -->

                    <div class="form-group">
                        <label for="title" class="form-label">Imagen de Perfil: </label>
                        <div class="user_pro_img_area" style="padding: 0px;">
                            <div class="col-lg-3 image-info">
                              </div>

                              <div class="custom-file-upload">
                                <input id="fileUserUpdate{{$usuario->id}}" type="file"  name="fileUserUpdate">
                                <label for="fileUserUpdate{{$usuario->id}}" class="btn btn-sm btn-secondary">Cargar Imagen de Usuario</label>
                              </div>
                        </div>

                        @if($usuario->images->isNotEmpty())
                            @foreach($usuario->images as $img)
                            <div class="image-wrapper">
                                <img id="pictureUserUpdate{{$usuario->id}}" src="{{asset('storage/'.$image->url)}}" alt="">
                            </div>
                            @endforeach
                        @else
                        <div class="image-wrapper">
                            <img id="pictureUserUpdate{{$usuario->id}}" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                        </div>
                        @endif
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
document.getElementById("fileUserUpdate{{$usuario->id}}").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureUserUpdate{{$usuario->id}}").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
