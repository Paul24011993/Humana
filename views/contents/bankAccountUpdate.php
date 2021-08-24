<div class="">
    <div class="clearfix"></div>
	
	
    <div class="row">
        <div class="col-md-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Actualización de cuentas bancarias</h2>
                    <div class="clearfix"></div>
				</div>
                <div class="x_content mt-4">
					
                    
						
                        <div class="form-group row">
                            <div class="col-12 col-md-12 col-sm-12 ">
                                <label class="control-label col-md-2 col-sm-2 px-0">Identificación</label>
                                <div class="col-md-10 col-sm-10 px-2 ">
                                    <select class="form-control" id="dni_person" >
									</select>
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Nombres Completos</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="full_name">
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">E-Mail</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="email">
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Tipo Identif.</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <select class="form-control" name="tip_dni">
                                        <option value="" selected >SELECCIONE</option>
                                        <option value="2">CÉDULA</option>
									</select>
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Identificación</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="dni">
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">fecha de nacimiento</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="fecha_nac">
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Género</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="genero">
								</div>
							</div>
						</div>
                        <form  method="POST" data-form="update" class="FormularioAjax form-horizontal" autocomplete="off" enctype="multipart/form-data">
						<input type="hidden" class="form-control" placeholder="" name="id_cuen_per" value="">   
                        
                        <div class="x_title mt-5">
                            <h2>Cuentas actuales</h2>
                            <div class="clearfix"></div>
                        </div>
						<div class="form-group row mt-5">
                            <div class="col-md-6 col-sm-6 ">
                                <table id="datatable_banckAccount" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="10%" >ID</th>
                                            <th>Banco</th>
                                            <th width="10%" >Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                 <div class="form-group row">
                                     <div class="col-12 col-md-12 col-sm-12 ">
                                         <label class="control-label col-md-4 col-sm-4 ">Tipo Cuenta</label>
                                         <div class="col-md-8 col-sm-8 ">
                                             <select class="form-control" name="tip_cuenta_up" disabled>
                                                 <option value="" selected >SELECCIONE</option>
                                                 <option value="1">AHORROS</option>
                                                 <option value="2">TARJETA</option>
                                                 <option value="3">CORRIENTE</option>
                                                 <option value="4">VIRTUAL DE PAGO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-12 col-sm-12 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Cuenta/Tarjeta</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="cue_tar_up" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-12 col-sm-12 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Codtarjeta</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="cod_tar_up" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-12 col-sm-12 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Fcvencetar</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="fec_cad_up" disabled>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>

                        
                             
                        <div class="x_title mt-5">
                                <h2>Cuentas nuevas</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group row">
                                        <div class="col-12 col-md-12 col-sm-12 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Tipo Cuenta</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <select class="form-control" name="tip_cuenta" >
                                                    <option value="" selected >SELECCIONE</option>
                                                      <option value="" selected >SELECCIONE</option>
                                                        <option value="1">AHORROS</option>
                                                        <option value="2">TARJETA</option>
                                                        <option value="3">CORRIENTE</option>
                                                        <option value="4">VIRTUAL DE PAGO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <div class="col-12 col-md-12 col-sm-12 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Cuenta/Tarjeta</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" placeholder="" name="cue_tar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group row">
                                        <div class="col-12 col-md-12 col-sm-12 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Tarjeta</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" placeholder="" name="tarjeta">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 col-md-12 col-sm-12 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Fcvencetar</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" placeholder="" name="fec_cad">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="form-group row">
                                        <div class="col-12 col-md-12 col-sm-12 ">
                                            <label class="control-label col-md-2 col-sm-2 ">Banco</label>
                                            <div class="col-md-10 col-sm-10 ">
                                                <input type="text" class="form-control" placeholder="" name="nombre_banco">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        <div class="ln_solid"></div>
                        <div class="clearfix"></div>
						<div class="form-group mt-4">
                            <div class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="btn btn-success">Actualizar cuenta bancaria</button>
                            </div>
                        </div> 
                    </form>
				</div>
			</div>
		</div>
		
	</div>
	
	
</div>
