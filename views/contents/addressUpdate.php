<div class="">
    <div class="clearfix"></div>
	
	
    <div class="row">
        <div class="col-md-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Actualización de direcciones</h2>
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
					<form  method="POST" data-form="update" class="FormularioAjax_update form-horizontal" autocomplete="off" enctype="multipart/form-data">

                        
                        <div class="x_title mt-5">
                            <h2>Dirección actual</h2>
                            <div class="clearfix"></div>
						</div>
						<div class="form-group row mt-5">
                            <div class="col-md-12 col-sm-12 ">
                                <table id="datatable_addressUpdate" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tipo dirección</th>
                                            <th>Calle principal</th>
                                            <th># casa</th>
                                            <th>Secundaria</th>
                                            <th>Dirección referencial</th>
                                            <th width="10%" >Estado</th>
                                            <th>Ciudad</th>
                                            <th>Parroquia</th>
                                            <th>Telf 1</th>
                                            <th>Telf 2</th>
                                            <th>Celular</th>
                                            <th>Fax</th>
										</tr>
									</thead>
                                    <tbody>
									</tbody>
								</table>
							</div>
                            <div class="col-md-12 col-sm-12 ">
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 ">
										<label class="control-label col-md-4 col-sm-4 ">Tipo dirección</label>
										<div class="col-md-8 col-sm-8 ">
                                            <input type="hidden" class="form-control" placeholder="" name="id_person_up" disabled>
                                            <input type="text" class="form-control" placeholder="" name="tip_dir_up" disabled>
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Calle principal</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="calle_1_up" disabled>
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Calle secundaria</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="calle_2_up" disabled>
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Numeración</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="num_casa_up" disabled>
                                            
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Referencia</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="referencia_up" disabled>
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Estado</label>
                                        <div class="col-md-8 col-sm-8 "> 
                                            <select class="form-control" name="estado_up" disabled>
												<option value="" selected >SELECCIONE</option>
												<option value="1">ACTIVO</option>
												<option value="2">INACTIVO</option>
											</select>
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Ciudad</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="ciudad_up" disabled>
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Parroquia</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="parroquia_up" disabled>
                                            
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Teléfono 1</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="tel_1_up" disabled>
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Teléfono 2</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="tel_2_up" disabled>
                                            
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Celular</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="celular_up" disabled>
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Fax</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="fax_up" disabled>
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="form-group mt-4">
                            <div class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="btn btn-success">Actualizar cuenta bancaria</button>
							</div>
						</div> 
                    </form>
                    
                    <form  method="POST" data-form="update" class="FormularioAjax_create form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" placeholder="" name="dir_per_id" >
                        <div class="x_title mt-5">
							<h2>Dirección nueva</h2>
							<div class="clearfix"></div>
						</div>
						<div class="form-group row">
							 <div class="col-md-12 col-sm-12 ">
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 ">
										<label class="control-label col-md-4 col-sm-4 ">Tipo dirección</label>
										<div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="tip_dir" >
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Calle principal</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="calle_1" >
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Calle secundaria</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="calle_2" >
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Numeración</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="num_casa" >
                                            
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Referencia</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="referencia" >
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Estado</label>
                                        <div class="col-md-8 col-sm-8 "> 
                                            <select class="form-control" name="estado" >
												<option value="" selected >SELECCIONE</option>
												<option value="1">ACTIVO</option>
												<option value="2">INACTIVO</option>
											</select>
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Ciudad</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="ciudad" >
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Parroquia</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="parroquia" >
                                            
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Teléfono 1</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="tel_1" >
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Teléfono 2</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="tel_2" >
                                            
										</div>
									</div>
								</div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Celular</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="celular" >
										</div>
									</div>
                                    <div class="col-12 col-md-6 col-sm-6 ">
                                        <label class="control-label col-md-4 col-sm-4 ">Fax</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" class="form-control" placeholder="" name="fax" >
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
                        <div class="ln_solid"></div>
                        <div class="clearfix"></div>
						<div class="form-group mt-4">
                            <div class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="btn btn-success">Registrar direccion</button>
							</div>
						</div> 
					</form>
				</div>
			</div>
		</div>
		
	</div>
	
	
</div>
