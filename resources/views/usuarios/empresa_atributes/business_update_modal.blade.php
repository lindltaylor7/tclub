<div class="modal fade" id="Business_update{{$negocio->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('empresa.update',$negocio->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre: (*)</label>
                        <input type="text" class="form-control" name="name" value="{{$negocio->name}}">
                    </div>
                    <div class="form-group">
                        <label for="ad_categroy" class="form-label">Rubro</label>
                        <div class="select-basic">
                            <select name="category_id" class="form-control ad_search_category" id="ad_category">
                                @foreach ($categorias as $categoria)
                                @if($categoria->status == 1)
                                    <option  value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div><!-- ends: .form-group -->
                    <div class="form-group">
                        <label for="title" class="form-label">Slogan:</label>
                        <input type="text" class="form-control" name="slogan" value="{{$negocio->slogan}}">
                    </div>
                    <div class="form-group">
                        <label for="desc" class="form-label">Descripción:</label>
                        <textarea id="desc" rows="7" class="form-control" name="description">{{$negocio->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">RUC:</label>
                        <input type="text" class="form-control" name="ruc" value="{{$negocio->ruc}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="phone" value="{{$negocio->phone}}">
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Imagen de Usuario: </label>   
                        <div class="user_pro_img_area" style="padding: 0px;">
                            <div class="col-lg-3 image-info">
                              </div>
                            <div class="custom-file-upload">
                                <input id="fileBusinessUpdateAdmin{{$negocio->id}}" type="file"  name="fileBusinessUpdate">
                                <label for="fileBusinessUpdateAdmin{{$negocio->id}}" class="btn btn-sm btn-secondary">Cargar Imagen de Empresa</label>
                            </div>           
                        </div>
                        <div class="image-wrapper">
                            <img id="pictureBusinessUpdateAdmin{{$negocio->id}}" src="{{asset('storage/'.$image->url)}}" alt="">
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
document.getElementById("fileBusinessUpdateAdmin{{$negocio->id}}").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureBusinessUpdateAdmin{{$negocio->id}}").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>