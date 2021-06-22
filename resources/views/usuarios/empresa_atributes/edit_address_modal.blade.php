
<div class="modal fade" id="edit_address_modal{{$businesse->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Editar direccion de tu empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('address.update',$direccion->id)}}" id="signup-form" method="post">
                    @csrf
                     @method('put')
                    <input type="hidden" name="business_id" value="{{$businesse->id}}">
                    <div class="form-group">
                        <label for="title" class="form-label">Nombre de la calle</label>
                        <input type="text" class="form-control" name="street"  placeholder="Nombre de la calle" value="{{$direccion->street}}"required>
                    </div>     
                    <div class="form-group">
                        <label for="title" class="form-label">Numero de la calle</label>
                        <input type="text" class="form-control" name="number"  placeholder="Numero de la calle" value="{{$direccion->number}}" required>
                    </div>  
                    <div class="form-group">
                        <label for="title" class="form-label">Distrito</label>
                        <input type="text" class="form-control" name="district"  placeholder="Distrito" value="{{$direccion->district}}" required>
                    </div>  
                    <div class="form-group">
                        <label for="ad_categroy" class="form-label">Ciudad</label>
                        <div class="select-basic">
                            <select name="city_id" class="form-control ad_search_category" id="ad_categroy">
                                    @foreach ($cities as $city)
                                    <option  value="{{$city->id}}" @if ($city->id == $direccion->city_id)
                                    selected
                                    @endif>{{$city->name}}</option>
                                    @endforeach                                      
                            </select>
                        </div>
                    </div><!-- ends: .form-group -->    
                        
                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Actualziar Direccion</button>

                </form>
               
            </div>
        </div>
    </div>
</div>

