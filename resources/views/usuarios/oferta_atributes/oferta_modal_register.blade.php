<div class="modal fade" id="addOferta_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Registrar nueva Oferta</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de Oferta</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="name" placeholder="Nombre de oferta" required="">
                    </div> 
                    <div class="form-group">
                        <label for="title" class="form-label">Descripcion de oferta</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="description" placeholder="Icono de oferta" required="">
                    </div>    
                    <div class="form-group">
                        <label for="title" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="price" placeholder="Precio de oferta" required="">
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha de inicio</label>
                        <input type="date" class="form-control" id="atbdp-contact-name" name="start_date" placeholder=" fecha de inicio de oferta" required="">
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Fecha final</label>
                        <input type="date" class="form-control" id="atbdp-contact-name" name="end_date" placeholder="Fecha final de oferta" required="">
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="atbdp-contact-name" name="end_date" placeholder="Fecha final de oferta" required="">
                    </div>                   
                    <div class="form-group">
                        <label for="title" class="form-label">Foto de oferta</label>
                        <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                                 <input id="fileCategory" type="file"  name="fileCategory">
                        </div>
                            <div class="image-wrapper">
                                <img id="pictureCategory" src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp" alt="">
                            </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar Rubro</button>
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
