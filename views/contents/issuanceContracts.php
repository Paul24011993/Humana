<div class="">
    <div class="clearfix"></div>
	
	
    <div class="row">
        <div class="col-md-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Consulta de contratos</h2>
                    <div class="clearfix"></div>
				</div>
                <div class="x_content mt-4">
					
                    <form class="form-horizontal form-label-left">
						
                        <div class="form-group row">
                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                <label class="control-label col-md-2 col-sm-2 ">Ciud / Venta</label>
                                <div class="col-md-10 col-sm-10 px-2 ">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ciudad" placeholder="" style="width:10%;">
                                            <span class="input-group-btn" style="width:87%; margin-left:3%;">
                                                <input type="text" class="form-control" name="ciudad_name" placeholder="">
                                            </span>
                                        </div>
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                <label class="control-label col-md-4 col-sm-4 ">Contrato</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="contrato">
								</div>
							</div>
                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                <label class="control-label col-md-4 col-sm-4 ">Version</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" placeholder="" name="version">
								</div>
							</div>
						</div>
                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                <label class="control-label col-md-4 col-sm-4 ">Negocio</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <select class="form-control" name="negocio" >
                                        <option value="" selected >SELECCIONE</option>
                                        <option value="2">NEGOCIO INDIVIDUAL - COD: 571</option>
									</select>
								</div>
							</div>
						</div>
						
						
						<div class="form-group row mt-5">
                            <div class="col-10">
                                <div class="x_panel">
                                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="prameters-tab" data-toggle="tab" href="#prameters" role="tab" aria-controls="prameters" aria-selected="true">
                                                Parámetros del negocio
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="cursor: no-drop;" id="direcciones-tab" data-toggle="tab" href="#direcciones" role="tab" aria-controls="direcciones" aria-selected="false">
                                                Rubros
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                                Broker
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="notificaciones-tab" data-toggle="tab" href="#notificaciones" role="tab" aria-controls="notificaciones" aria-selected="false">
                                                Notificación
											</a>
										</li>
									</ul>
                                    <div class="tab-content col-12 px-0" id="myTabContent">
                                        <div class="tab-pane fade show pt-3 active" id="prameters" role="tabpanel" aria-labelledby="prameters-tab">
                                            
                                            <div class="form-group row">
                                                <div class="col-md-5 col-sm-12 px-0">
                                                    <div class="x_panel">
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-5 col-sm-5 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">No. Min Tit</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="min_tit">
																</div>
															</div>
                                                            <div class="col-12 col-md-7 col-sm-7 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Límite edad ingreso</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="edad_ingreso">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-5 col-sm-5 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">No. Max Tit</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="max_tit">
																</div>
															</div>
                                                            <div class="col-12 col-md-7 col-sm-7 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Límite edad renov.</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="limit_edad_renov">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-5 col-sm-5 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">No. Min dep.</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="min_dep" >
																</div>
															</div>
                                                            <div class="col-12 col-md-7 col-sm-7 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Edad min titular</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="edad_min_titular">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-5 col-sm-5 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">No. Max dep.</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="max_dep">
																</div>
															</div>
                                                            <div class="col-12 col-md-7 col-sm-7 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">No. días realizar reemb.</label>
                                                                <div class="col-md-5 col-sm-5">
                                                                    <input type="text" class="form-control" placeholder="" name="realiz_reembolso">
																</div>
															</div>
														</div>
													</div>
                                                    <div class="x_panel">
                                                        <div class="x_title">
                                                            <h6>Tercera edad</h6>
                                                            <div class="clearfix"></div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-5 col-sm-5 px-0">
                                                                <label class="control-label col-md-5 col-sm-5 ">Tipo</label>
                                                                <div class="col-md-7 col-sm-7 ">
																	<select class="form-control" name="tipo_titular">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="2">NEGOCIO INDIVIDUAL - COD: 571</option>
																	</select>
																</div>
															</div>
                                                            <div class="col-12 col-md-7 col-sm-7 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">No. Personas</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="text" class="form-control" placeholder="" name="no_personas">
																</div>
															</div>
														</div>
														
													</div>
												</div>
                                                
                                                <div class="col-md-5 col-sm-12 px-0">
                                                    <div class="x_panel">
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-8 col-sm-8 px-0">
                                                                <label class="control-label col-md-4 col-sm-4 mr-2">Forma facturación</label>
                                                                <div class="col-md-7 col-sm-7 ">
                                                                    <select class="form-control" name="forma_fact">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="2">FECHA ESPECIFICADA</option>
																	</select>
																</div>
															</div>
                                                            <div class="col-12 col-md-4 col-sm-4 px-0">
                                                                <label class="control-label col-md-5 col-sm-5 ">Dia F</label>
                                                                <div class="col-md-7 col-sm-7 ">
                                                                    <input type="text" class="form-control" placeholder="">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Cobertura muerte</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="cobert_muerte">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="2">TERMINO DE CONTRATO</option>
																	</select>
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Presen reclamo</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="presen_reclamo">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="2">ULTIMO GASTO</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="x_panel">
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Devolución desafiliación</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="checkbox" class="flat" name="dev_desafiliacion">
																</div>
															</div>
                                                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Prorrateo movimientos</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="checkbox" class="flat" name="prorrateo" value="1" />
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Emisión N/C y N/D</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="checkbox" class="flat" name="emision_nc_nd" value="1" />
																</div>
															</div>
                                                            <div class="col-12 col-md-6 col-sm-6 px-0">
                                                                <label class="control-label col-md-7 col-sm-7 ">Renovación automática</label>
                                                                <div class="col-md-5 col-sm-5 ">
                                                                    <input type="checkbox" class="flat" name="renovacion_auto" value="1" />
																</div>
															</div>
														</div>
													</div>
												</div>
												
                                                <div class="col-md-2 col-sm-12 text-center"> 
                                                    <p class="text-muted font-13 m-b-30">
                                                        Facturación electrónica
													</p>
                                                    <p class="text-center">
                                                        <label>Si :</label>
                                                        <input type="radio" class="flat role_user" name="fact_si" value="1" checked="" required />
                                                        <label class="ml-3">No :</label>
                                                        <input type="radio" class="flat role_user" name="fact_no" value="2" />
													</p>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-md-12 col-sm-12 px-0">
                                                            <label class="control-label col-md-12 col-sm-12 ">Forma débitos</label>
                                                            <div class="col-md-12 col-sm-12 ">
                                                                <select class="form-control" >
                                                                    <option value="" selected >SELECCIONE</option>
                                                                    <option value="2">NEGOCIO INDIVIDUAL - COD: 571</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>



                                        <div class="tab-pane fade pt-3 " id="notificaciones" role="tabpanel" aria-labelledby="notificaciones-tab">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Proceso</th>
                                                        <th>Mail</th>
                                                        <th>Copia</th>
                                                        <th>Celular</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">NOTIFICACIONES RENOVACIONES AUTOMATICAS</th>
                                                        <td>stevn_armijossa@hotmail.com</td>
                                                        <td></td>
                                                        <td>0992748585</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"> </th>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"> </th>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
										</div>
										
									</div>
								</div>
							</div>
                            <div class="col-2">
                                <div class="x_panel">
                                    <div class="text-center">
                                        <div class="btn-group-vertical">
											<button class="btn btn-default" type="button">Nuevos</button>
											<button class="btn btn-default my-1" data-toggle="modal" data-target="#exampleModal" type="button">Planes</button>
											<button class="btn btn-default" data-toggle="modal" data-target="#modalAfiliados" type="button" type="button">Afiliados</button>
											<button class="btn btn-default my-1" type="button">Cuotas</button>
											<button class="btn btn-default" type="button">Aprobación</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="form-group row mt-5">
                        <div class="col-md-12 col-sm-12 text-center"> 
							<div class="x_panel">
								<div class="x_title">
									<h6>Datos del contrato</h6>
									<div class="clearfix"></div>
								</div>
                                
								<div class="form-group row">
                                    <div class="col-12 col-md-4 col-sm-4 px-0">
                                        <div class="x_panel">
                                        
                                            <div class="form-group row">
                                                <div class="col-12 col-md-12 col-sm-12 px-0">
                                                    <label class="control-label col-md-3 col-sm-3 ">Sucursal</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <select class="form-control" name="sucursal">
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="1">MEDIECUADOR HUMANA SALUD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Reg Débitos</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" class="form-control" placeholder="" name="reg_debito">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Registro</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <input type="text" class="form-control" placeholder="" name="registro">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Anualidad</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <select class="form-control" name="anualidad" >
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="1">360 Dias</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Día gracia</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <input type="text" class="form-control" placeholder="" name="dia_gracia">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-12 col-sm-12 px-0">
                                                    <label class="control-label col-md-3 col-sm-3 ">Pool</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <select class="form-control" name="pool" >
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="1">SIN POOL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
									</div>
									<div class="col-12 col-md-4 col-sm-4 px-0">
                                        <div class="x_panel">
                                        
                                            <div class="form-group row">
                                                <div class="col-12 col-md-8 col-sm-8 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Periodo Fact.</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <select class="form-control" name="periodo_fact">
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="1">MENSUAL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 col-sm-4 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Desc %</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-12 col-sm-12 px-0">
                                                    <label class="control-label col-md-3 col-sm-3 ">Plan Pago</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <select class="form-control" name="plan_pago">
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="1">DEFAULT (1 PAG X FAC)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="x_panel">
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Fecha de emisión</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" class="form-control" placeholder="" name="fech_emi">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Tiempo mes</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <input type="text" class="form-control" placeholder="" name="tiempo_mes">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Desde</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" class="form-control" placeholder="" name="desde">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Hasta</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <input type="text" class="form-control" placeholder="" name="hasta">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>


                                    <div class="col-12 col-md-4 col-sm-4 px-0">
                                        <div class="x_panel">
                                        
                                            <div class="form-group row">
                                                <div class="col-12 col-md-12 col-sm-12 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Tipo contrato</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <select class="form-control" name="tiempo_contrato" >
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="1">INDIVIDUAL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Cont.</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-6 col-sm-6 ">Vers</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="x_panel">
                                            <div class="form-group row">
                                                <div class="col-12 col-md-12 col-sm-12 px-0">
                                                    <label class="control-label col-md-3 col-sm-3 ">User crea</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="text" class="form-control" placeholder="" name="user_crea">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-12 col-sm-12 px-0">
                                                    <label class="control-label col-md-3 col-sm-3 ">Fecha crea</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="text" class="form-control" placeholder="" name="fecha_crea">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>

                                    <div class="col-12 col-md-12 col-sm-12 px-0">
                                        <div class="x_panel">
                                        
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 px-0">
                                                    <label class="control-label col-md-3 col-sm-3 ">Observaciones</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 col-sm-3 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Cuota Gratis</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <select class="form-control" >
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="2">NEGOCIO INDIVIDUAL - COD: 571</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 col-sm-3 px-0">
                                                    <label class="control-label col-md-5 col-sm-5 ">Promociones</label>
                                                    <div class="col-md-7 col-sm-7 ">
                                                        <select class="form-control" >
                                                            <option value="" selected >SELECCIONE</option>
                                                            <option value="2">NEGOCIO INDIVIDUAL - COD: 571</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>

                                    
								</div>
							</div>
						</div>
						</div>
						

                        <div class="form-group row mt-5">
                            <div class="col-12">
                                <div class="x_panel">
                                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="data_general-tab" data-toggle="tab" href="#data_general" role="tab" aria-controls="data_general" aria-selected="true">
                                                Datos generales
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vendors-tab" data-toggle="tab" href="#vendors" role="tab" aria-controls="vendors" aria-selected="false">
                                                Vendedor
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="canal-tab" data-toggle="tab" href="#canal" role="tab" aria-controls="canal" aria-selected="false">
                                                Canal
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="parametros-tab" data-toggle="tab" href="#parametros" role="tab" aria-controls="parametros" aria-selected="false">
                                                Parámetros Créditos
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                                Parámetros Créditos x prestador
											</a>
										</li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="cursor: no-drop;" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">
                                                Ejecutivo
											</a>
										</li>
									</ul>
                                    <div class="tab-content col-12 px-0" id="myTabContent">
                                        <div class="tab-pane fade show pt-3 active" id="data_general" role="tabpanel" aria-labelledby="data_general-tab">
                                            
                                            <div class="form-group row">
                                                <div class="col-md-7 col-sm-7 px-0">
                                                    <div class="x_panel">
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-2 col-sm-2 ">Contratante</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="contratante" id="select_contratante">
                                                                    </select>
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-2 col-sm-2 ">Pagador</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="pagador">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="1">VERA CAMACHO WILSON JAVIER</option>
                                                                    </select>
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-2 col-sm-2 ">Datos Fact.</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="datos_fact">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="1">VERA CAMACHO WILSON JAVIER</option>
                                                                    </select>
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-2 col-sm-2 ">Direc Cobro</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="direct_cobro">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="1">VELISA MARIÑO #S/N TRANSVERSAL: ANGEL ROJAS</option>
                                                                    </select>
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-2 col-sm-2 ">Ciud cobro</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" placeholder="" name="ciud_cobre">
																</div>
															</div>
														</div>
													</div>
												</div>
                                                
                                                <div class="col-md-5 col-sm-5 px-0">
                                                    <div class="x_panel">
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Forma pago</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="direct_cobro" id="direct_cobro">
                                                                        <option value="" selected >SELECCIONE</option>
                                                                        <option value="1">TARJETA DE CREDITO</option>
                                                                    </select>
																</div>
															</div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Nom tarjeta</label>
                                                                <div class="col-md-9 col-sm-9 " >
                                                                    <input type="text" class="form-control" placeholder="" name="nom_tarjeta">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Nom banco</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" placeholder="" name="nom_banco">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Tip cuenta</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" placeholder="" name="tip_cuenta">
																</div>
															</div>
														</div>
                                                        <div class="form-group row">
                                                            <div class="col-12 col-md-12 col-sm-12 px-0">
                                                                <label class="control-label col-md-3 col-sm-3 ">Cta /N° Tarj.</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" placeholder="" name="cta_tarjeta">
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div> 

                                        <div class="tab-pane fade pt-3" id="vendors" role="tabpanel" aria-labelledby="vendors-tab">
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 ">
                                                    <label class="control-label col-md-4 col-sm-4 ">Vendedor</label>
                                                    <div class="col-md-8 col-sm-8 ">
                                                        <select class="form-control" name="">
                                                            <option value="" selected>SELECCIONE</option>
                                                            <option value="1">1721822128 - SEÑALIN ARMIJOS ANDREA KAROLINA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 ">
                                                    <div class="col-md-8 col-sm-8 ">
                                                        <button class="btn btn-primary">
                                                        <i class="fa fa-plus"></i> Agregar
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="px-3 table">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Identificación</th>
                                                                <th>nombre</th>
                                                                <th>Código</th>
                                                                <th>Par(100%)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1717998700</td>
                                                                <td>NOMBRES COMPLETOS</td>
                                                                <td>0578</td>
                                                                <td>100</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.col -->
                                            </div>                                            
                                        </div>
										
                                        <div class="tab-pane fade pt-3" id="canal" role="tabpanel" aria-labelledby="canal-tab">
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 col-sm-6 ">
                                                    <label class="control-label col-md-4 col-sm-4 ">Persona</label>
                                                    <div class="col-md-8 col-sm-8 ">
                                                        <select class="form-control">
                                                            <option value="" selected>SELECCIONE</option>
                                                            <option value="1">NATURAL</option>
                                                            <option value="2">JURÍDICO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-sm-6 ">
                                                    <div class="col-md-8 col-sm-8 ">
                                                        <button class="btn btn-primary">
                                                        <i class="fa fa-plus"></i> Agregar
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="px-3 table">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Identificación</th>
                                                                <th>Nombre</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1717998700</td>
                                                                <td>NOMBRES COMPLETOS</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.col -->
                                            </div>                                            
                                        </div>

                                        <div class="tab-pane fade pt-3" id="parametros" role="tabpanel" aria-labelledby="parametros-tab">
                                            <div class="form-group row">
                                                
                                                <div class="col-12 col-md-12 col-sm-12 text-center">
                                                    <div class="col-md-12 col-sm-12 ">
                                                        <button type="button" class="btn btn-primary" id="load_parameters">
                                                        <i class="fa fa-plus"></i> Cargar parámetros
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

									</div>
								</div>
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
