<section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Datos Generales</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form action="{{route('user.store')}}">
                                @csrf
                                <input type="hidden" name="business_id" value={{$id}}>
                                <div class="form-group">
                                    <label for="address" class="form-label">Apellido y Nombres</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Ingrese sus apellidos y mobres" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="form-label">Teléfono o celular</label>
                                    <input type="text" class="form-control" name="phone" placeholder="telefono de tu empresa" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese su Correo" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña facil de recordar">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Seleccione su rol</label>
                                    <div id="social_info_sortable_container">
                                        <div class="directorist atbdp_social_field_wrapper">
                                            <div class="row m-bottom-20" id="social-form-fields">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="select-basic">
                                                            <select class="form-control">
                                                                <option value="twitter"> Cliente</option>
                                                                <option value="youtube"> Administrador</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Seleccione su empresa</label>
                                    <div id="social_info_sortable_container">
                                        <div class="directorist atbdp_social_field_wrapper">
                                            <div class="row m-bottom-20" id="social-form-fields">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="select-basic">
                                                            <select class="form-control">
                                                                <option value="twitter"> Claro</option>
                                                                <option value="youtube"> Pollerias el gordo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="btn_wrap list_submit m-top-25 text-center">
                                    <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Registrar Usuario</button>
                                </div>

                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->

            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->