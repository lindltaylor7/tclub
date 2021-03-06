<div class="modal fade" id="business_offers_modal{{$businesse->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Agregar Promoción en: "{{$businesse->name}}"</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
             
            </div>
            <div class="modal-body">
                <form action="{{route('offer.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre Campaña(*):</label>
                        <input type="hidden" name="business_id" value="{{$businesse->id}}">
                        <input type="text" class="form-control" name="name"  placeholder="Nombre de la campaña ofertada" required>
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Descripcion:</label>
                        <textarea id="desc" rows="7" class="form-control" name="description" placeholder="Descripción de su campaña"></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Precio del Producto:</label>
                        <input type="text" class="form-control" name="price"  placeholder="Precio">
                    </div>   
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de inicio:</label>
                        <input type="date" class="form-control" name="start_date"  placeholder="Inicio de Oferta" required>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de expiro:</label>
                        <input type="date" class="form-control" name="end_date"  placeholder="Fin de Oferta" required>
                    </div>  

                    





                    <div class="form-group">
                        <label for="title" class="form-label">Imagen de Oferta: </label>   
                        <div class="user_pro_img_area" style="padding: 0px;">
                            <div class="col-lg-3 image-info">
                              </div>
                              <div class="custom-file-upload">
                                <input id="fileOffer{{$businesse->id}}" type="file"  name="fileOffer">
                                <label for="fileOffer{{$businesse->id}}" class="btn btn-sm btn-secondary">Cargar Imagen de Oferta</label>
                              </div>       
                        </div>
                        <div class="image-wrapper">
                            <img id="pictureOffer{{$businesse->id}}" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                        </div> 
                       </div>


                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Agregar Oferta</button>
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
document.getElementById("fileOffer{{$businesse->id}}").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureOffer{{$businesse->id}}").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
