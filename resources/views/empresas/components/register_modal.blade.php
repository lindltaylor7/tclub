<div class="modal fade" id="Registerb_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Registro de Oferta</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('bussines.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="title" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="name"  placeholder="Nombre de tu empresa" required>
                    </div>
                    <div class="form-group">
                        <label for="ad_categroy" class="form-label">Categoría</label>
                        <div class="select-basic">
                            <select name="category_id" class="form-control ad_search_category" id="ad_categroy">
                                @foreach ($categorias as $categoria)
                                @if($categoria->status == 1)
                                    <option  value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div><!-- ends: .form-group -->

                    <div class="form-group">
                        <input type="input" class="form-control" name="slogan"  value="Slogan de tu empresa*" required>
                        <label for="desc" class="form-label">Descripción</label>
                        <input type="input" class="form-control" name="ruc" value="12345124512" required>
                        <textarea id="desc" rows="7" class="form-control" name="description" placeholder="Descripción de la Oferta*"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="phone" placeholder="Precios en soles" maxlength="11" required>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Imagen Referencial: </label>   
                        <div class="user_pro_img_area" style="padding: 0px;">
                            <div class="col-lg-3 image-info">
                              </div>
                              <div class="custom-file-upload">
                                <input id="fileBusiness" type="file"  name="fileBusiness">
                               <label for="fileBusiness" class="btn btn-sm btn-secondary">Cargar Imagen</label>
                             </div>                               
                                    
                        </div>
                        <div class="image-wrapper">
                            <img id="pictureBusiness" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                        </div> 
                       </div>


                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar Oferta</button>

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
document.getElementById("fileBusiness").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureBusiness").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
