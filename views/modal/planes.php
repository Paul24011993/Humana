
<div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Definición de planes</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="x_panel">
					
					<div class="form-group row">
						<div class="col-12 col-md-12 col-sm-12 ">
							<label class="control-label col-md-2 col-sm-2 px-0">Identificación</label>
							<div class="col-md-10 col-sm-10 px-2 ">
								<select class="form-control" id="nombre_plan" >
								</select>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-12 col-md-12 col-sm-12 ">
							<table class="table table-striped" id="table_detail_plan">
								<thead>
									<tr>
										<th>Cod Plan</th>
										<th>Plan Corto</th>
										<th>Nombre del plan</th>
										<th>Cod Pro</th>
										<th>Producto</th>
										<th>Cod Grupo</th>
										<th>Nom Grupo</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"></th>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-12 col-md-6 col-sm-6 ">
							<label class="control-label col-md-3 col-sm-3 ">Negocio</label>
							<div class="col-md-9 col-sm-9 ">
								<div class="input-group">
									<select class="form-control" name="negocio_select" style="width:83%; margin-right:2%;">
										<option value="" selected >SELECCIONE</option>
										<option value="2">NEGOCIO INDIVIDUAL</option>
									</select>
									<span class="input-group-btn" style="width:15%;">
										<input type="text" class="form-control" placeholder="" name="negocio_select_e" >
									</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2 col-sm-2 text-center">
							<button type="button" class="btn btn-secondary" >Tarifas</button>
						</div>
						<div class="col-12 col-md-4 col-sm-4 ">
							<label class="control-label col-md-6 col-sm-6 ">Edad Min titular</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" class="form-control" placeholder="" name="edad_min_titular">
							</div>
						</div>
					</div>
					
					
					<div class="form-group row">
						<div class="col-12 col-md-6 col-sm-6 ">
							<label class="control-label col-md-3 col-sm-3 ">Manual Tarifario</label>
							<div class="col-md-9 col-sm-9 ">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="" name="manual_tar_1" style="width:30%; margin-right:2%;">
									<span class="input-group-btn" style="width:68%;">
										<input type="text" class="form-control" placeholder="" name="manual_tar_2">
									</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2 col-sm-2 text-center">
							Valor base
						</div>
						<div class="col-12 col-md-4 col-sm-4 ">
							<label class="control-label col-md-6 col-sm-6 ">Edad Max titular</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" class="form-control" placeholder="" name="genero" name="edad_maximo_titular">
							</div>
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-12 col-md-6 col-sm-6 ">
							<label class="control-label col-md-3 col-sm-3 ">Tipo aplicacion</label>
							<div class="col-md-9 col-sm-9 ">
								<div class="input-group">
									<select class="form-control" name="tipo_apilcacion" style="width:48%; margin-right:2%;">
										<option value="" selected >SELECCIONE</option>
										<option value="2">PLENA</option>
									</select>
									<span class="input-group-btn" style="width:50%;">
										<label class="control-label col-md-8 col-sm-8 ">% Aplicacion</label>
										<div class="col-md-4 col-sm-4 ">
											<input type="text" class="form-control" placeholder="" name="porcentaje_aplicacion">
										</div>
									</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2 col-sm-2 text-center">
							<input type="text" class="form-control" placeholder="" name="genero" name="valor_base">
						</div>
						<div class="col-12 col-md-4 col-sm-4 ">
							<label class="control-label col-md-6 col-sm-6 ">Periodo presente reclamo</label>
							<div class="col-md-6 col-sm-6 ">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="" name="periodo_presente_recalmo" style="width:50%;"> 
									<span class="input-group-btn" style="width: 25%;margin-top: 5%;margin-left: 4%;">
										dias
									</span>
								</div>
							</div>
						</div>
					</div>
					
					<ul class="nav nav-tabs bar_tabs mt-3" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="tope_coberturas-tab" data-toggle="tab" href="#tope_coberturas" role="tab" aria-controls="tope_coberturas" aria-selected="true">Tope Coberturas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Coberturas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Deducibles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Prod. Adicionales</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Factor Corr. Geog</a>
						</li>
					</ul>
                    <div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tope_coberturas" role="tabpanel" aria-labelledby="tope_coberturas-tab">
							
								<div class="col-md-7 col-sm-7 ">
									<div class="x_panel">
										<div class="">
											<h2><small>Tope de coberturas</small></h2>
										</div>
										<div class="x_content">
											<div class="form-group row">
												<div class="col-12 col-md-12 col-sm-12 ">
													<label class="control-label col-md-4 col-sm-4 ">Tipo Cobertura</label>
													<div class="col-md-8 col-sm-8 ">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="" name="tipo_cobertura_1" style="width:30%; margin-right:2%;">
															<span class="input-group-btn" style="width:68%;">
																<input type="text" class="form-control" placeholder="" name="tipo_cobertura_1">
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-12 col-md-12 col-sm-12 ">
													<label class="control-label col-md-4 col-sm-4 ">Periodo Cobertura</label>
													<div class="col-md-8 col-sm-8 ">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="" name="periodo_cobertura_1" style="width:30%; margin-right:2%;">
															<span class="input-group-btn" style="width:68%;">
																<input type="text" class="form-control" placeholder="" name="periodo_cobertura_2">
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-12 col-md-12 col-sm-12 ">
													<label class="control-label col-md-4 col-sm-4 ">Valor Tope Cobertura</label>
													<div class="col-md-8 col-sm-8 ">
														<input type="text" class="form-control" placeholder="" name="valor_cobertura">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-12 col-md-12 col-sm-12 ">
													<label class="control-label col-md-4 col-sm-4 "> Tope Cobertura</label>
													<div class="col-md-8 col-sm-8 ">
														<select class="form-control" name="tope_cobertura" style="width:48%; margin-right:2%;">
															<option value="" selected>SELECCIONE</option>
															<option value="2" >PERSONA</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group row mt-5">
												<div class="col-md-5 col-sm-5 ">
													<div class="x_content">
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Tope</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="checkbox" class="form-control" placeholder="" name="tope">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Valor</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="valor">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Porcentaje</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="porcentaje ">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-7 col-sm-7 ">
													<div class="x_content">
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Codsecuases</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="Codsecuases">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">NombreAcess</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="NombreAcess">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Codscvs</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="Codscvs">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">CodAcess</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="CodAcess">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Benefscvs</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="Benefscvs">
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-12 col-md-12 col-sm-12 ">
																<label class="control-label col-md-4 col-sm-4 ">Benefacess</label>
																<div class="col-md-8 col-sm-8 ">
																	<input type="text" class="form-control" placeholder="" name="Benefacess">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 ">
									<div class="x_panel">
										<div class="">
											<h2> <small>Edad Cobertura</small></h2>
										</div>
										<div class="x_content">
											<div class="form-group row">
												<div class="col-12 col-md-12 col-sm-12 ">
													<table class="table table-striped" id="table_edad_cobertura">
														<thead>
															<tr>
																<th>Inicial</th>
																<th>Final</th>
																<th>Porcentaje</th>
																<th>Tope</th>
															</tr>
														</thead>
														<tbody>
															 
														</tbody>
													</table>
												</div>
											</div>
											<button type="button" class="btn btn-secondary" >Cargar Edad</button>
										</div>
									</div>
								</div>
							
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk 
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