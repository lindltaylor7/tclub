
<div class="modal fade" id="business_addresses_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Agregar direccion de tu empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('address.register')}}" id="signup-form" method="post">
                    @csrf
                     
                         <input type="hidden" name="business_id" value="{{$businesse->id}}">
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de la calle</label>
                        <input type="text" class="form-control" name="street"  placeholder="Nombre de la calle" required>
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Numero de la calle</label>
                        <input type="text" class="form-control" name="number"  placeholder="Numero de la calle" required>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Distrito</label>
                        <input type="text" class="form-control" name="district"  placeholder="Distrito" required>
                    </div>  
                    <div class="form-group">
                        <label for="ad_categroy" class="form-label">Ciudad</label>
                        <div class="select-basic">
                            <select name="city_id" class="form-control ad_search_category" id="ad_categroy">
                                @foreach ($cities as $city)
                                    <option  value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach                                      
                            </select>
                        </div>
                    </div><!-- ends: .form-group -->    
                        
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar Direccion</button>

                </form>
               
            </div>
        </div>
    </div>
</div>

