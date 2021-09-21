<div class="">
    <div class="clearfix"></div>
	
	
    <div class="row">
        <div class="col-md-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Datos generales de la persona</h2>
                    <div class="clearfix"></div>
				</div>
                <div class="x_content mt-2">
					<form  method="POST" data-form="save" class="FormularioAjax form-horizontal" autocomplete="off" enctype="multipart/form-data">
						
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Tipo Identif.</label>
                                <div class="col-md-8 col-sm-8 ">
									<div class="input-group">
										<input type="text" class="form-control" name="tip_dni" placeholder="" style="width:10%;">
										<span class="input-group-btn" style="width:87%; margin-left:3%;">
											<input type="text" class="form-control" name="tip_dni_name" placeholder="">
										</span>
									</div>
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Identificación</label>
                                <div class="col-md-8 col-sm-8 ">
								<div class="input-group">
									<input type="text" class="form-control" name="dni" placeholder="">
									<span class="input-group-btn">
										<button type="button" class="btn btn-primary" id="button_serach_person"><i class="fa fa-search"></i> Buscar</button>
									</span>
								</div>
                                    
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Tipo persona</label>
                                <div class="col-md-8 col-sm-8 ">
									<div class="input-group">
										<input type="text" class="form-control" name="tip_per" placeholder="" style="width:10%;">
										<span class="input-group-btn" style="width:87%; margin-left:3%;">
											<input type="text" class="form-control" name="tip_per_name" placeholder="">
										</span>
									</div>
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">E-Mail (anterior)</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" name="email" placeholder="">
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Estado</label>
                                <div class="col-md-8 col-sm-8 ">
									<div class="input-group">
										<input type="text" class="form-control" name="status" placeholder="" style="width:10%;">
										<span class="input-group-btn" style="width:87%; margin-left:3%;">
											<input type="text" class="form-control" name="status_name" placeholder="">
										</span>
									</div>
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 ">
                                <label class="control-label col-md-4 col-sm-4 ">Código ref.</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" name="cod_ref" placeholder="" readonly value="<?php echo substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5)?>" >
								</div>
							</div>
						</div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12 col-sm-12">
                                <label class="control-label col-md-2 col-sm-2 ">Facturación Electrónica</label>
                                <div class="col-md-10 col-sm-10 ">
									<div class="checkbox">
										<label class="pt-2">
											<input type="checkbox" value="" name="fact_electr" class="mr-1"> <strong>Nota:</strong> Aplica a probeedores, broker, prestadores, canales.
										</label>
									</div>
									
								</div>
							</div>
						</div>
						
						<div class="form-group row mt-5">
							<ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="natural-tab" data-toggle="tab" href="#natural" role="tab" aria-controls="natural" aria-selected="true">
                                        Natural
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" style="cursor: no-drop;" id="direcciones-tab" data-toggle="tab" href="#direcciones" role="tab" aria-controls="direcciones" aria-selected="false">
                                        Direcciones
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                        Contactos
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                        Cuenta Bancaria
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="preexistencias-tab" data-toggle="tab" href="#preexistencias" role="tab" aria-controls="preexistencias" aria-selected="false">
                                        Preexistencias
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                        Impuestos
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                        Auto SRI
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                        Notificación
									</a>
								</li>
							</ul>
							<div class="tab-content col-12" id="myTabContent">
								<div class="tab-pane fade show pt-3 active" id="natural" role="tabpanel" aria-labelledby="natural-tab">
									
                                    <div class="form-group row">
                                        <div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Apellido Paterno</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" name="ape_pat" placeholder="">
											</div>
										</div>
                                        <div class="col-12 col-md-6 col-sm-6 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Apellido Materno</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" name="ape_mat" placeholder="">
											</div>
										</div>
									</div>
									
                                    <div class="form-group row">
                                        <div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Primer Nombre</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" name="prim_nom" placeholder="">
											</div>
										</div>
                                        <div class="col-12 col-md-6 col-sm-6 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Segundo Nombre</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" name="seg_nom" placeholder="">
											</div>
										</div>
									</div>
									
									<div class="form-group row">
                                        <div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Fecha Nacimiento</label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" class="form-control" name="fech_nac" placeholder="">
											</div>
										</div>
                                        <div class="col-12 col-md-6 col-sm-6 ">
                                            <label class="control-label col-md-4 col-sm-4 ">Género</label>
                                            <div class="col-md-8 col-sm-8 ">
												<div class="input-group">
													<input type="text" class="form-control" name="genero" placeholder="" style="width:10%;">
													<span class="input-group-btn" style="width:87%; margin-left:3%;">
														<input type="text" class="form-control" name="genero_name" placeholder="">
													</span>
												</div>
											</div>
										</div>
									</div>
									
									
                                    
                                    <div class="x_title">
                                        <h2>Otros datos</h2>
                                        <div class="clearfix"></div>
									</div>
									
									<div class="form-group row">
										<div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Tipo vivienda</label>
											<div class="col-md-8 col-sm-8 ">
												<div class="input-group">
													<input type="text" class="form-control" name="tip_viv" placeholder="" style="width:10%;">
													<span class="input-group-btn" style="width:87%; margin-left:3%;">
														<input type="text" class="form-control" name="tip_viv_name" placeholder="">
													</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Estudios</label>
											<div class="col-md-8 col-sm-8 ">
												<div class="input-group">
													<input type="text" class="form-control" name="estudios" placeholder="" style="width:10%;">
													<span class="input-group-btn" style="width:87%; margin-left:3%;">
														<input type="text" class="form-control" name="estudios_name" placeholder="">
													</span>
												</div>
											</div>
										</div>
									</div>
									
									<div class="form-group row">
										<div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Estado civil</label>
											<div class="col-md-8 col-sm-8 ">
												<div class="input-group">
													<input type="text" class="form-control" name="estado_civil" placeholder="" style="width:10%;">
													<span class="input-group-btn" style="width:87%; margin-left:3%;">
														<input type="text" class="form-control" name="estado_civil_name" placeholder="">
													</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Cargo</label>
											<div class="col-md-8 col-sm-8 ">
												<div class="input-group">
													<input type="text" class="form-control" name="cargo" placeholder="" style="width:10%;">
													<span class="input-group-btn" style="width:87%; margin-left:3%;">
														<input type="text" class="form-control" name="cargo_name" placeholder="">
													</span>
												</div>
											</div>
										</div>
									</div>
									
									<div class="form-group row">
										<div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-4 col-sm-4 ">Profesión</label>
											<div class="col-md-8 col-sm-8 ">
												<div class="input-group">
													<input type="text" class="form-control" name="profesion" placeholder="" style="width:10%;">
													<span class="input-group-btn" style="width:87%; margin-left:3%;">
														<input type="text" class="form-control" name="profesion_name" placeholder="">
													</span>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="tab-pane fade pt-3" id="preexistencias" role="tabpanel" aria-labelledby="preexistencias-tab">
									<div class="form-group row">
										<div class="col-12 col-md-6 col-sm-6 ">
											<label class="control-label col-md-3 col-sm-3 ">Preexistencia</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select class="form-control w-100" name="preexistencias" id="preexistencias_select">
												</select>
											</div>
										</div>
                                        <div class="col-12 col-md-6 col-sm-6 ">
                                            <label class="control-label col-md-3 col-sm-3 ">Auditor</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select class="form-control" name="auditor" id="auditor">
												</select>
											</div>
										</div>
									</div>
                                    <div class="form-group row">
                                        <div class="col-12 text-center">
                                            <button type="button" class="btn btn-primary add-row">
                                                <i class="fa fa-plus"></i> Agregar
											</button>
										</div>
									</div>
									
									
                                    <div class="row">
										<div class="  table">
											<table class="table table-striped" id="table_preexistences">
												<thead>
													<tr>
														<th>Secuencia</th>
														<th>Código</th>
														<th>Tipo</th>
														<th style="width: 59%">Description</th>
														<th>Auditor</th>
													</tr>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									
									<div class="row">
										<!-- accepted payments column -->
										<div class="col-md-6">
                                            <p class="lead">Observación</p>
                                            <textarea class="resizable_textarea form-control" rows="7" placeholder=""></textarea>
											
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<p class="lead">Discapacidad</p>
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>
																<label class="control-label">Tipo Disca.</label>
															</th>
															<td>
																<div class="col-md-12 col-sm-12 ">
																	<select class="form-control">
                                                                        <option value="" selected>SELECCIONE</option>
                                                                        <option value="1">NATURAL</option>
                                                                        <option value="2">JURÍDICO</option>
                                                                    </select>
																</div>
															</td>
														</tr>
														<tr>
															<th>
																<label class="control-label">% Disca.</label>
															</th>
															<td>
																<div class="col-md-12 col-sm-12 ">
																	<input type="text" class="form-control" placeholder="">
																</div>
															</td>
														</tr>
														<tr>
															<th>
																<label class="control-label">N° Carnét</label>
															</th>
															<td>
																<div class="col-md-12 col-sm-12 ">
																	<input type="text" class="form-control" placeholder="">
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									
									
								</div>
							</div>
						</div>
						
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="submit" class="btn btn-primary">Vendedor</button>
                                <button type="submit" class="btn btn-primary">Broker</button>
                                <button type="submit" class="btn btn-primary">Prestador</button>
                                <button type="submit" class="btn btn-primary">Proveedores</button>
                                <button type="submit" class="btn btn-primary" disabled>Ejecutivo</button>
							</div>
                        </div>
                        <div class="clearfix"></div>
						<div class="form-group mt-4">
                            <div class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="btn btn-success">Ingresar Persona</button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	
	
</div>
