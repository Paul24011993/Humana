<div class="modal fade bs-example-modal-lg" id="modalAfiliados" tabindex="-1" role="dialog" aria-labelledby="modalAfiliados" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Datos del afiliado</h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body">
					<div class="tab-content">

						<div class="col-md-5 col-sm-5 ">
							<div class="form-group row">
								
								<label class="control-label col-md-3 col-sm-3 px-0">Identificación</label>
								<div class="col-md-9 col-sm-9 px-2 ">
									<select class="form-control" id="select_identificacion" >
									</select>
								</div>
							</div>
							<div class="">
								<h2><small>Datos del titular</small></h2>
							
								<div class="x_content">
									
									<div class="form-group row">
										<div class="col-12 col-md-12 col-sm-12 ">
											<table class="table table-striped" id="table_identificacion">
												<thead>
													<tr>
														<th>Cedula</th>
														<th>Nombres</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th></th>
														<td></td>
													</tr>
													<tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
										<button type="button" class="btn btn-secondary" >Nuevo</button>
										<button type="button" class="btn btn-secondary" disabled >Pre-existencias</button>
										<button type="button" class="btn btn-secondary" >Movimientos</button>
									</div>

								</div>
							</div>
							<div class="">
								<h2><small>Datos del dependiente</small></h2>
							 
								<div class="x_content">
									
									<div class="form-group row">
										<div class="col-12 col-md-12 col-sm-12 ">
											<table class="table table-striped" id="table_detail_plan">
												<thead>
													<tr>
														<th>Cedula</th>
														<th>Nombres</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th></th>
														<td></td>
													</tr>
													<tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr><tr>
														<th></th>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
										<button type="button" class="btn btn-secondary" >Nuevo</button>
										<button type="button" class="btn btn-secondary" disabled>Pre-existencias</button>
										<button type="button" class="btn btn-secondary" >Movimientos</button>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-7 col-sm-7 ">
							<div class="x_panel">
								<div class="x_content">
								
									<ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="valor_titular-tab" data-toggle="tab" href="#valor_titular" role="tab" aria-controls="valor_titular" aria-selected="true">
												Valor del titular													
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="datos_generales-tab" data-toggle="tab" href="#datos_generales" role="tab" aria-controls="datos_generales" aria-selected="false">
												Datos Generales
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="valor_total-tab" data-toggle="tab" href="#valor_total" role="tab" aria-controls="valor_total" aria-selected="false">
												Valor total	
											</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="valor_titular" role="tabpanel" aria-labelledby="valor_titular-tab">
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Plan</label>
												<div class="col-md-9 col-sm-9 ">
													<select class="form-control" name="select_plan">
														<option value="" >Seleccione</option>
														<option value="">MH - 50.000 - COD. 53068-GRUPO-1</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Cta. Resti.</label>
												<div class="col-md-9 col-sm-9" style="display:flex;">	
													<input type="text" class="form-control" placeholder="" name="edad_min_titular" style="width:25%;">
													<input type="text" class="form-control" placeholder="" name="edad_min_titular" style="width:75%;">
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Tarifa</label>
												<div class="col-md-9 col-sm-9" style="display:flex;">	
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<input type="text" class="form-control col-md-3" placeholder="" name="input_tarifa" >
													<label class="control-label col-md-3 col-sm-3 " >Estado</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="input_estado">
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Aplica Carencia</label>
												<div class="col-md-9 col-sm-9" style="display:flex;">	
													<input type="checkbox" cheked class="form-control col-md-1" placeholder="" name="edad_min_titular" >
													<input type="text" class="form-control col-md-11" placeholder="" name="aplica_carencia" >
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Fec. Nac.</label>
												<div class="col-md-9 col-sm-9" style="display:flex;">	
													<input type="text" class="form-control col-md-4" placeholder="" name="fech_nacimiento" >
													<label class="control-label col-md-3 col-sm-3 " >Edad Ing.</label>
													<input type="checkbox" class="form-control col-md-1" placeholder="" name="edad_ingreso" >
													<label class="control-label col-md-3 col-sm-3 " >Cobro Deducible</label>
													<input type="checkbox" cheked class="form-control col-md-1" placeholder="" name="edad_min_titular">
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Sexo</label>
												<div class="col-md-9 col-sm-9" style="display:flex;">	
													<input type="text" class="form-control col-md-4" placeholder="" name="input_sexo" >
													<label class="control-label col-md-3 col-sm-3 " >Titular sin beneficio</label>
													<input type="checkbox" class="form-control col-md-1" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-12 col-sm-12 "><strong>Prima Moneda Local</strong></label>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Prima Neta</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="prima_neta" >
													<label class="control-label col-md-3 col-sm-3 " >Otro Desc.(-)</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Prod Adic.</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-3 col-sm-3 " >Otro recar.(-)</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Rubros.</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Impuestos</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-3 col-sm-3 " >Totales</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Descuento</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>

										</div>
										<div class="tab-pane fade" id="datos_generales" role="tabpanel" aria-labelledby="datos_generales-tab">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
												booth letterpress, commodo enim craft beer mlkshk aliquip
										</div>
										<div class="tab-pane fade" id="valor_total" role="tabpanel" aria-labelledby="valor_total-tab">
											xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
												booth letterpress, commodo enim craft beer mlkshk 
										</div>
									</div>


									<ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="valor_titular_dependiente-tab" data-toggle="tab" href="#valor_titular_dependiente" role="tab" aria-controls="valor_titular_dependiente" aria-selected="true">
												Valor del dependiente													
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="datos_generales_ependiente-tab" data-toggle="tab" href="#datos_generales_ependiente" role="tab" aria-controls="datos_generales_ependiente" aria-selected="false">
												Datos Generales
											</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="valor_titular_dependiente" role="tabpanel" aria-labelledby="valor_titular_dependiente-tab">
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Parentesco</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-3 col-sm-3 " >Estado</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Aplica carencia</label>
													<input type="checkbox" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Fecha Naci.</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-2 col-sm-2 ">Fecha Ing.</label>
													<input type="checkbox" class="form-control col-md-1" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-2 col-sm-2 ">Cobro Deducible.</label>
													<input type="checkbox" class="form-control col-md-1" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Sexo</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-12 col-sm-12 "><strong>Prima Moneda Local</strong></label>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Prima Neta</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-3 col-sm-3 " >Otro Desc.(-)</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Prod Adic.</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-3 col-sm-3 " >Otro recar.(-)</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Rubros.</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Impuestos</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
													<label class="control-label col-md-3 col-sm-3 " >Totales</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-12 col-sm-12" style="display:flex;">	
													<label class="control-label col-md-3 col-sm-3 ">Descuento</label>
													<input type="text" class="form-control col-md-3" placeholder="" name="edad_min_titular" >
												</div>
											</div>

										</div>
										<div class="tab-pane fade" id="datos_generales_ependiente" role="tabpanel" aria-labelledby="datos_generales_ependiente-tab">
											xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
												booth letterpress, commodo enim craft beer mlkshk 
										</div>
									</div>
								</div>
							
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