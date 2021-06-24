<div class="modal fade" id="Update_city{{$city->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Ciudad</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('ciudad.update',$city->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre: (*)</label>
                        <input type="text" class="form-control" name="name" value="{{$city->name}}">
                    </div>

                    

                    <div class="form-group">

                        <label for="title" class="form-label">Imagen de Ciudad: </label>   
                        <div class="user_pro_img_area" style="padding: 0px;">
                            <div class="col-lg-3 image-info">
                              </div>

                                <label class="btn btn-sm btn-secondary">Cargar Imagen de Ciudad</label>
                                <input id="fileCityUpdate{{$city->id}}" type="file"  name="fileCityUpdate">
                                  
                        </div>
                        <div class="image-wrapper">
                            <img id="pictureCityUpdate{{$city->id}}" src="{{asset('storage/'.$image->url)}}" alt="">
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
document.getElementById("fileCityUpdate{{$city->id}}").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureCityUpdate{{$city->id}}").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
