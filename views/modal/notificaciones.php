<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Registro mails notificaciones</h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="x_panel">
						<div class="form-group row mb-3">
							<div class="col-12 col-md-4 col-sm-4 px-0">
								<label class="control-label col-md-7 col-sm-7 ">Por contrato</label>
								<div class="col-md-5 col-sm-5 ">
									<input type="radio" class=" role_user" name="intervaltype" id="role_user" value="1" checked data-target="#por_contrato"/>
								
								</div>
							</div>
							<div class="col-12 col-md-4 col-sm-4 px-0">
								<label class="control-label col-md-7 col-sm-7 ">Por tercero</label>
								<div class="col-md-5 col-sm-5 ">
									<input type="radio" class=" role_user" name="intervaltype" id="role_user" value="1" data-target="#por_tercero" />
								</div>
							</div>
							<div class="col-12 col-md-4 col-sm-4 px-0">
								<label class="control-label col-md-7 col-sm-7 ">Por contrato y tercero</label>
								<div class="col-md-5 col-sm-5 ">
									<input type="radio" class=" role_user" name="intervaltype" id="role_user" value="1" data-target="#por_contrato_tercero"/>
								</div>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="por_contrato" role="tabpanel" aria-labelledby="por_contrato-tab">
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Proceso</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value="" >SELECCIONE</option>
												<option value="2" selected>ASEGURAMIENTOS</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Instancia</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value="">SELECCIONE</option>
												<option value="2" selected>NOTIFICACIONES RENOVACIONES AUTOMATICAS</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Compañía</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value="" >SELECCIONE</option>
												<option value="2" selected>HUMANA S.A.</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Cédula</label>
										<div class="col-md-8 col-sm-8 ">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="" readonly>
												<span class="input-group-btn">
													<button type="button" class="btn btn-default" disabled><i class="fa fa-search"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Sucursal</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value=""  >SELECCIONE</option>
												<option value="2" selected> MEDIECUADOR HUMANA S.A. MATRIZ</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Nombres</label>
										<div class="col-md-8 col-sm-8 ">
											<input type="text" class="form-control" placeholder="" readonly>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<div class="col-12 col-md-8 col-sm-8 px-0">
											<label class="control-label col-md-6 col-sm-6 ">Contrato</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-12 col-md-4 col-sm-4 px-0">
											<label class="control-label col-md-5 col-sm-5 ">Renov.</label>
											<div class="col-md-7 col-sm-7 ">
												<select class="form-control" name="periodo_fact">
												<option value=""  >SELECCIONE</option>
													<option value="1" selected>1</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Tipo</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value=""  >SELECCIONE</option>
												<option value="2" selected>CONTRATANTE</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-12 col-sm-12 px-0">
										<label class="control-label col-md-2 col-sm-2 ">Tipo Not.</label>
										<div class="col-md-10 col-sm-10 ">
											<select class="form-control" >
												<option value=""  >SELECCIONE</option>
												<option value="2" selected>NOTIFICACION DE MOVIMIENTOS</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Celular</label>
										<div class="col-md-8 col-sm-8 ">
										<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Mail</label>
										<div class="col-md-8 col-sm-8 ">
										<input type="text" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								
							</div>
							<div class="tab-pane fade" id="por_tercero" role="tabpanel" aria-labelledby="por_tercero-tab">
							<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Proceso</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value="" >SELECCIONE</option>
												<option value="2" selected>ASEGURAMIENTOS</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Instancia</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value="">SELECCIONE</option>
												<option value="2" selected>NOTIFICACIONES FACTURACION ELECTRONICA</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Compañía</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" disabled>
												<option value="" selected ></option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Cédula</label>
										<div class="col-md-8 col-sm-8 ">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="" name="dni_por_tercero" >
												<span class="input-group-btn">
													<button type="button" class="btn btn-default" id="serch_data_por_tercero"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Sucursal</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" disabled>
												<option value="" ></option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Nombres</label>
										<div class="col-md-8 col-sm-8 ">
											<input type="text" class="form-control" placeholder="" readonly name="name_user_data">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<div class="col-12 col-md-8 col-sm-8 px-0">
											<label class="control-label col-md-6 col-sm-6 ">Contrato</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" class="form-control" placeholder="" disabled>
											</div>
										</div>
										<div class="col-12 col-md-4 col-sm-4 px-0">
											<label class="control-label col-md-5 col-sm-5 ">Renov.</label>
											<div class="col-md-7 col-sm-7 ">
												<select class="form-control" name="periodo_fact" disabled>
												<option value=""></option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Tipo</label>
										<div class="col-md-8 col-sm-8 ">
											<select class="form-control" >
												<option value=""  >SELECCIONE</option>
												<option value="2" selected>CONTRATANTE</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-12 col-sm-12 px-0">
										<label class="control-label col-md-2 col-sm-2 ">Tipo Not.</label>
										<div class="col-md-10 col-sm-10 ">
											<select class="form-control" disabled>
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Celular</label>
										<div class="col-md-8 col-sm-8 ">
										<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<div class="col-12 col-md-6 col-sm-6 px-0">
										<label class="control-label col-md-4 col-sm-4 ">Mail</label>
										<div class="col-md-8 col-sm-8 ">
										<input type="text" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								
							</div>
							<div class="tab-pane fade" id="por_contrato_tercero" role="tabpanel" aria-labelledby="por_contrato_tercero-tab">
					
							</div>

						</div>

					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" >Nuevo</button>
					<button type="button" class="btn btn-secondary" >Guardar</button>
					<button type="button" class="btn btn-primary"  data-dismiss="modal">Salir</button>
				</div>
				
			</div>
		</div>
	</div>
	<script>

$('#serch_data_por_tercero').on('click', function (event) {
	var input_dni = $(this).parent().siblings('input[name="dni_por_tercero"]').val();

	
	$.post(SERVER_API + "Persons/get_all_persons_dni/", { input_dni: input_dni }, function (data) {
		var get_data_person_dni = $.parseJSON(data).data;
		if(get_data_person_dni.length){
			
			$.each(get_data_person_dni, function (key, registro) {
				
				$('input[name="name_user_data"]').val(registro.PER_PRIMER_NOMBRE + ' ' + registro.PER_SEGUNDO_NOMBRE + ' ' + registro.PER_APELLIDO_PATERNO + ' ' + registro.PER_APELLIDO_MATERNO);			
			});
		}else{
			swal('','No existe personas que cumplan con los filtros de busqueda ingresados, revise.','warning');
		}


	});
});
	</script>