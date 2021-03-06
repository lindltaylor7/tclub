<div class="modal fade" id="Category_update{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Datos de Categoría</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.update',$categoria->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de Categoría</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="name" placeholder="Nombre" required="" value="{{$categoria->name}}">
                    </div> 
                    <div class="form-group">
                        <label for="title" class="form-label">Icono de Categoría</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="icon" placeholder="Icono" required="" value="{{$categoria->icon}}">
                    </div>                         
                    




                    <div class="form-group">
                        <label for="title" class="form-label">Imagen de Rubro: </label>   
                        <div class="user_pro_img_area" style="padding: 0px;">
                            <div class="col-lg-3 image-info">
                              </div>


                              <div class="custom-file-upload">
                                <input id="fileCategoryUpdate{{$categoria->id}}" type="file"  name="fileCategoryUpdate">
                                <label for="fileCategoryUpdate{{$categoria->id}}" class="btn btn-sm btn-secondary">Cargar Imagen de rubro</label>
                              </div>
                                  
                        </div>
                        <div class="image-wrapper">
                                <img id="pictureCategoryUpdate{{$categoria->id}}" src="{{asset('storage/'.$image->url)}}" alt="">
                        </div> 
                       </div>


                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Actualizar Rubro</button>
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
    document.getElementById("fileCategoryUpdate{{$categoria->id}}").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("pictureCategoryUpdate{{$categoria->id}}").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>
