<div class="modal fade" id="Update_modal{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Oferta</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('offer.update',$offer->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre Campaña(*):</label>
                        <input type="text" class="form-control" name="name" value="{{$offer->name}}">
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Descripción:</label>
                        <textarea id="desc" rows="7" class="form-control" name="description" value="{{$offer->description}}">{{$offer->description}}</textarea>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Precio del Producto: </label>
                        <input type="text" class="form-control" name="price" value="{{$offer->price}}">
                    </div>   
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de inicio:</label>
                        <input type="date" class="form-control" name="start_date" value="{{$offer->start_date}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de expiro:</label>
                        <input type="date" class="form-control" name="end_date" value="{{$offer->end_date}}">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Imagen de Campaña: </label>
                        <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                                 <input id="fileOfferUpdate" type="file"  name="fileOfferUpdate">
                        </div>
                        @foreach($offer->images as $img)
                            <div class="image-wrapper">
                                <img id="pictureOfferUpdate" src="{{asset('storage/'.$img->url)}}" alt="">
                            </div>
                        @endforeach
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
document.getElementById("fileOfferUpdate").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureOfferUpdate").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
