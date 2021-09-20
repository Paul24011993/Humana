<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Seleccione el tipo de usuario</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="row">
					<div class="col-sm-12">
						<p class="text-muted font-13 m-b-30"> Los datos se cargarán en base al tipo de usuario que elijamos a continuación:	</p>
						<p class="text-center">
							<label>Afiliado :</label>
							<input type="radio" class="flat role_user" name="gender" id="role_user" value="1" checked="" required />
							<label class="ml-5">Contratante :</label>
							<input type="radio" class="flat role_user" name="gender" id="role_user" value="2" />
						</p>
					</div>
					<div class="col-sm-6">
						<div class="btn-group mb-3">
							<button type="button" class="btn btn-default btn-sm action_add_person">
								Crear persona
							</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="btn-group mb-3 float-right">
							<div class="input-group">
								<input type="text" class="form-control" name="dni" placeholder="">
								<span class="input-group-btn">
									<button type="button" class="btn btn-primary" id="button_serach_person_table"><i class="fa fa-search"></i> Buscar</button>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-12">	
						<div class="card-box table-responsive">
							<table id="datatable_inquiries" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Código</th>
										<th>Tipo</th>
										<th>Identificación</th>
										<th>Nombres</th>
										<th>Fecha Nac.</th>
										<th>Sexo</th>
										<th>Edad</th>
										<th>Estado</th>
									</tr>
								</thead>
								
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
