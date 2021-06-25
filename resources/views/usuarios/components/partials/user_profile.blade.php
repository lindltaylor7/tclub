<div class="tab-pane fade p-bottom-30" id="profile" role="tabpanel" aria-labelledby="profile-tab">


    <div class="container">
        <form action="{{route('user.update',$users->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                    <div class="user_pro_img_area">

                        @if($users->images->isNotEmpty())
                        @foreach($users->images as $img)

                            <img id="pictureUserUpdate" src="{{asset('storage/'.$img->url)}}" alt=""
                                style="width: 150px; height: 150px; object-fit: cover;">

                        @endforeach
                        @else

                            <img id="pictureUserUpdate"
                                src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp"
                                alt="" style="width: 150px; height: 150px; object-fit: cover;">

                        @endif

                        <div class="custom-file-upload">
                            <input type="file" id="fileUserUpdate" name="fileUserUpdate">
                            <label for="fileUserUpdate" class="btn btn-sm btn-secondary mt-3">Subir Imagen</label>
                        </div>

                        {{-- <div class="image-info">
                            <label class="btn btn-sm btn-secondary">Imagen de Usuario</label>
                        </div> --}}
                        {{-- <div class="form-group">
                            <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                                <input type="file" id="fileUserUpdate" name="fileUserUpdate">
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">
                    <div class="atbd_author_module">
                        <div class="atbd_content_module">
                            <div class="atbd_content_module__tittle_area">
                                <div class="atbd_area_title">
                                    <h4><span class="la la-user"></span>Mi Perfil de usuario</h4>
                                </div>
                            </div>
                            <div class="atbdb_content_module_contents">
                                <div class="user_info_wrap">
                                    <!--Full name-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="full_name" class="not_empty">Nombres</label>
                                                <input class="form-control" id="full_name" type="text" name="name"
                                                    placeholder="Nombre" value="{{$users->name}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name" class="not_empty">Correo Electronico
                                                    Email</label>
                                                <input class="form-control" id="first_name" type="text" name="email"
                                                    placeholder="Email" value="{{$users->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name" class="not_empty">Telefono</label>
                                                <input class="form-control" id="last_name" type="text" name="phone"
                                                    placeholder="Telefono" value="{{$users->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_name" class="not_empty">Tipo de Usuario</label>
                                                <input class="form-control" id="user_name" type="text" name="type"
                                                    disabled="disabled" value="{{$users->type}}">
                                                <p>(El tipo no puede ser cambiado)</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="update_user_profile">Guardar
                                            Cambios</button>
                                    </div>
                                    <!--ends social info .row-->

                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .atbd_author_module -->
                </div>
            </div>

        </Form>
    </div>
</div><!-- ends: .tab-pane -->


<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
<script>
    //CAMBIAR IMAGEN CUADNO SE SELECCIONE UNA FOTO
document.getElementById("fileUserUpdate").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureUserUpdate").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
