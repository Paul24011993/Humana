<?php
	
	global $viewsControllers;
	global $mainModel;
	
	get_header(); 
	
	//Guardar en una variable la instancia de la clase viewsControllers.
	$viewsLoad = $viewsControllers->get_views_controllers();
?>
<body <?php body_class($viewsLoad); ?>>
	<div class="container body">
		<div class="main_container">
			<?php
				$page_template = $mainModel->get_page_template($viewsLoad);
				
				if(!$page_template):
				validate_login_user();
				include 'views/modules/side_bar_menu.php';
				include 'views/modules/top_bar.php';
			?>
			<!-- page content -->
			<div class="right_col" role="main">
				<?php require_once $viewsLoad; ?>
				
			</div>
			<!-- /page content -->
			<!-- footer content -->
			<?php include 'views/modules/bottom_bar.php'; ?>
			<!-- /footer content -->
			<?php endif; ?>
		</div>
	</div>
	<?php get_footer(); ?>
	
	
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
						<div class="form-group row">
							<div class="col-12 col-md-4 col-sm-4 px-0">
								<label class="control-label col-md-7 col-sm-7 ">Por contrato</label>
								<div class="col-md-5 col-sm-5 ">
									<input type="radio" class="flat role_user" name="gender" id="role_user" value="1" checked="" required />
								</div>
							</div>
							<div class="col-12 col-md-4 col-sm-4 px-0">
								<label class="control-label col-md-7 col-sm-7 ">Por tercero</label>
								<div class="col-md-5 col-sm-5 ">
									<input type="radio" class="flat role_user" name="gender" id="role_user" value="1" required />
								</div>
							</div>
							<div class="col-12 col-md-4 col-sm-4 px-0">
								<label class="control-label col-md-7 col-sm-7 ">Por contrato y tercero</label>
								<div class="col-md-5 col-sm-5 ">
									<input type="radio" class="flat role_user" name="gender" id="role_user" value="1" required />
								</div>
							</div>
						</div>
 						<div class="form-group row">
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Proceso</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">ASEGURAMIENTOS</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Instancia</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">NOTIFICACIONES RENOVACIONES AUTOMATICAS</option>
									</select>
								</div>
							</div>
						</div>
 						<div class="form-group row">
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Compañía</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">ASEGURAMIENTOS</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Cédula</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">NOTIFICACIONES RENOVACIONES AUTOMATICAS</option>
									</select>
								</div>
							</div>
						</div>
 						<div class="form-group row">
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Sucursal</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">ASEGURAMIENTOS</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Nombres</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">NOTIFICACIONES RENOVACIONES AUTOMATICAS</option>
									</select>
								</div>
							</div>
						</div>
 						<div class="form-group row">
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Contrato</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">ASEGURAMIENTOS</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Tipo</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">NOTIFICACIONES RENOVACIONES AUTOMATICAS</option>
									</select>
								</div>
							</div>
						</div>
 						<div class="form-group row">
							<div class="col-12 col-md-12 col-sm-12 px-0">
								<label class="control-label col-md-2 col-sm-2 ">Tipo Not.</label>
								<div class="col-md-10 col-sm-10 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">ASEGURAMIENTOS</option>
									</select>
								</div>
							</div>
						</div>
 						<div class="form-group row">
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Celular</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">ASEGURAMIENTOS</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-sm-6 px-0">
								<label class="control-label col-md-4 col-sm-4 ">Mail</label>
								<div class="col-md-8 col-sm-8 ">
									<select class="form-control" >
										<option value="" selected >SELECCIONE</option>
										<option value="2">NOTIFICACIONES RENOVACIONES AUTOMATICAS</option>
									</select>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>