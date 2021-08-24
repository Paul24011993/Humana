$('document').ready(function (e) {

	load_select_2("#dni_person", 'Persons/get_person/');

	
	//$('#datatable_addressUpdate').DataTable();

	$("#dni_person").change(function () {
		$("#dni_person option:selected").each(function () {
			per_id = $(this).val();
			//console.log(per_id);
			
			$.post(SERVER_API + "Persons/get_all_person_address/", { per_id: per_id }, function (data) {
				//console.log(data);
				var get_data_to_table = $.parseJSON(data).data;
				$('#datatable_addressUpdate tbody').empty();
					var tbHtml=""
					$.each(get_data_to_table, function (key, registro) {
						
						//console.log(registro);

						$('input[name=full_name]').val(registro.PER_APELLIDO_PATERNO + ' ' + registro.PER_APELLIDO_MATERNO + ' ' + registro.PER_PRIMER_NOMBRE + ' ' + registro.PER_SEGUNDO_NOMBRE);
						$('input[name=email]').val(registro.PER_EMAIL);
						$('select[name=tip_dni]').val(registro.PER_TIPO_DNI);
						$('input[name=dni]').val(registro.PER_DNI);
						$('input[name=fecha_nac]').val(registro.PER_FECHA_NACIMIENTO);
						$('input[name=genero]').val(registro.PER_GENERO);
						
						$('input[name=id_cuen_per]').val(registro.PER_ID);
						$('input[name=ban_id]').val(registro.DIR_ID);
						$('input[name=dir_per_id]').val(registro.PER_ID);

				 		if(registro.DIR_ID != null){
							tbHtml += ` <tr class="get_data_row" style="cursor:pointer;">
							<th >${registro.DIR_TIPO_DIR}<input type="hidden" name="ban_id" value="${registro.DIR_ID}" data-vars='{"id":${registro.DIR_ID}, "DIR_CALLE_1": "${registro.DIR_CALLE_1}", "DIR_CALLE_2": "${registro.DIR_CALLE_2}", "DIR_TIPO_DIR": "${registro.DIR_TIPO_DIR}", "DIR_NUM_CASA": "${registro.DIR_NUM_CASA}", "DIR_REFERENCIA": "${registro.DIR_REFERENCIA}", "DIR_ESTADO": "${registro.DIR_ESTADO}", "DIR_CIUDAD": "${registro.DIR_CIUDAD}", "DIR_PARROQUIA": "${registro.DIR_PARROQUIA}", "DIR_TEL_1": "${registro.DIR_TEL_1}", "DIR_TEL_2": "${registro.DIR_TEL_2}", "DIR_CELULAR": "${registro.DIR_CELULAR}", "DIR_FAX": "${registro.DIR_FAX}"}'></th>							
							<th >${registro.DIR_CALLE_1}</th>
							<th >${registro.DIR_CALLE_2}</th>
							<th >${registro.DIR_NUM_CASA}</th>
							<th >${registro.DIR_REFERENCIA}</th>
							<th >${registro.DIR_ESTADO}</th>
							<th >${registro.DIR_CIUDAD}</th>
							<th >${registro.DIR_PARROQUIA}</th>
							<th >${registro.DIR_TEL_1}</th>
							<th >${registro.DIR_TEL_2}</th>
							<th >${registro.DIR_CELULAR}</th>
							<th >${registro.DIR_FAX}</th>
							
							</tr>`;
						}else{

							$('select[name="tip_cuenta_up"]').val('');
							$('input[name="cue_tar_up"]').val('');
							$('input[name="cod_tar_up"]').val('');
							$('input[name="fec_cad_up"]').val('');

							$('select[name="tip_cuenta_up"]').prop('disabled', true);
							$('input[name="cue_tar_up"]').prop('disabled', true);
							$('input[name="cod_tar_up"]').prop('disabled', true);
							$('input[name="fec_cad_up"]').prop('disabled', true);
						}
					});
					$('#datatable_addressUpdate tbody').prepend(tbHtml);

					
					
					$(".get_data_row").click(function() {
						$('input[name="tip_dir_up"]').prop('disabled', false);
						$('input[name="calle_1_up"]').prop('disabled', false);
						$('input[name="calle_2_up"]').prop('disabled', false);
						$('input[name="num_casa_up"]').prop('disabled', false);
						$('input[name="referencia_up"]').prop('disabled', false);
						$('select[name="estado_up"]').prop('disabled', false);
						$('input[name="ciudad_up"]').prop('disabled', false);
						$('input[name="parroquia_up"]').prop('disabled', false);
						$('input[name="tel_1_up"]').prop('disabled', false);
						$('input[name="tel_2_up"]').prop('disabled', false);
						$('input[name="celular_up"]').prop('disabled', false);
						$('input[name="fax_up"]').prop('disabled', false);
						
						var MyRows = $(this);
						for (var i = 0; i < MyRows.length; i++) {
							var MyIndexValue = $(MyRows[i]).find('th:eq(0)').find('input[name=ban_id]').data('vars');
							//console.log(MyIndexValue);
							
							$('input[name="id_person_up"]').val(MyIndexValue.id);
							$('input[name="tip_dir_up"]').val(MyIndexValue.DIR_TIPO_DIR);
							$('input[name="calle_1_up"]').val(MyIndexValue.DIR_CALLE_1);
							$('input[name="calle_2_up"]').val(MyIndexValue.DIR_CALLE_2);
							$('input[name="num_casa_up"]').val(MyIndexValue.DIR_NUM_CASA);
							$('input[name="referencia_up"]').val(MyIndexValue.DIR_REFERENCIA);
							$('select[name="estado_up"]').val(MyIndexValue.DIR_ESTADO);
							$('input[name="ciudad_up"]').val(MyIndexValue.DIR_CIUDAD);
							$('input[name="parroquia_up"]').val(MyIndexValue.DIR_PARROQUIA);
							$('input[name="tel_1_up"]').val(MyIndexValue.DIR_TEL_1);
							$('input[name="tel_2_up"]').val(MyIndexValue.DIR_TEL_2);
							$('input[name="celular_up"]').val(MyIndexValue.DIR_CELULAR);
							$('input[name="fax_up"]').val(MyIndexValue.DIR_FAX);
						}
 											
					});

				});
 

		});
	});


	        //$('#price, #tax').on('keyup change paste', function() {
	$('.FormularioAjax_update').submit(function(e){
	 
        e.preventDefault();
		
        var form = $(this);
		
        var tipo="update";
        
        var metodo=form.attr('method');
        var respuesta=form.children('.RespuestaAjax');
		
        var formdata = new FormData(this);
		//console.log(form.serialize());
        swal({
            title: "¿Estás seguro?",   
            text: "Los datos seran actualizados en el sistema",   
            type: "question",   
            showCancelButton: true,     
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
			}).then(function () {
            $.ajax({
                type: metodo,
                url: SERVER_API + "Preexistences/update_addres_person/",
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
				success: function (data) {
					//console.log(data);
					var data_server = $.parseJSON(data);

					
					swal(
						"Registro actualizado",
						data_server.data.message,
						data_server.type
					);
					
					//$('.FormularioAjax')[0].reset();
					//$('#datatable_addressUpdate tbody').empty();
						/*	var per_id = $('input[name=id_cuen_per]').val();
								$.post(SERVER_API + "Persons/get_all_person_id/", { per_id: per_id }, function (data) {
							//console.log(data);
							var get_data_to_table = $.parseJSON(data).data;
								var tbHtml=""
								$.each(get_data_to_table, function (key, registro) {
									
									//console.log(registro.PER_GENERO);

									$('input[name=full_name]').val(registro.PER_APELLIDO_PATERNO + ' ' + registro.PER_APELLIDO_MATERNO + ' ' + registro.PER_PRIMER_NOMBRE + ' ' + registro.PER_SEGUNDO_NOMBRE);
									$('input[name=email]').val(registro.PER_EMAIL);
									$('select[name=tip_dni]').val(registro.PER_TIPO_DNI);
									$('input[name=dni]').val(registro.PER_DNI);
									$('input[name=fecha_nac]').val(registro.PER_FECHA_NACIMIENTO);
									$('input[name=genero]').val(registro.PER_GENERO);
									
									$('input[name=id_cuen_per]').val(registro.PER_ID);

							
									tbHtml += ` <tr class="get_data_row" style="cursor:pointer;">
										<th for="id">${registro.BAN_ID}<input type="hidden" name="ban_id" data-vars='{"id":${registro.BAN_ID}, "tipo_cuenta": "${registro.BAN_TIPO_CUENTA}", "cuenta_tar": ${registro.BAN_CUENTA_TARJETA}, "cod_tar": "${registro.BAN_COD_TARJETA}", "fec_cad": "${registro.BAN_FECHA_CADUCIDAD}"}'></th>
										<th >${registro.BAN_NOMBRE_TARJETA}</th>
										<th >${registro.BAN_ESTADO}</th>
										
									</tr>`;
								});
								$('#datatable_addressUpdate tbody').prepend(tbHtml);

								
								
								$(".get_data_row").click(function() {
									var MyRows = $(this);
									for (var i = 0; i < MyRows.length; i++) {
										var MyIndexValue = $(MyRows[i]).find('th:eq(0)').find('input[name=ban_id]').data('vars');
										//console.log(MyIndexValue);
										
										$('select[name="tip_cuenta"]').val(MyIndexValue.tipo_cuenta);
										$('input[name="cue_tar"]').val(MyIndexValue.cuenta_tar);
										$('input[name="cod_tar"]').val(MyIndexValue.cod_tar);
										$('input[name="fec_cad"]').val(MyIndexValue.fec_cad);
									}
									
								});

							});*/

				},
				error: function() {
					$('.RespuestaAjax').html(msjError);
				}
			});
			return false;
		});
	});

	
	        //$('#price, #tax').on('keyup change paste', function() {
	$('.FormularioAjax_create').submit(function(e){
	 
        e.preventDefault();
		
        var form = $(this);
		
        var tipo="update";
        
        var metodo=form.attr('method');
        var respuesta=form.children('.RespuestaAjax');
		
        var formdata = new FormData(this);
		console.log(form.serialize());
        swal({
            title: "¿Estás seguro?",   
            text: "Los datos seran almacenados en el sistema",   
            type: "question",   
            showCancelButton: true,     
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
			}).then(function () {
            $.ajax({
                type: metodo,
                url: SERVER_API + "Preexistences/create_addres_person/",
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
				success: function (data) {
					//console.log(data);
					var data_server = $.parseJSON(data);

					
					swal(
						"Registro actualizado",
						data_server.data.message,
						data_server.type
					);
					
					$('.FormularioAjax_create')[0].reset();
					//$('#datatable_addressUpdate tbody').empty();
						/*	var per_id = $('input[name=id_cuen_per]').val();
								$.post(SERVER_API + "Persons/get_all_person_id/", { per_id: per_id }, function (data) {
							//console.log(data);
							var get_data_to_table = $.parseJSON(data).data;
								var tbHtml=""
								$.each(get_data_to_table, function (key, registro) {
									
									//console.log(registro.PER_GENERO);

									$('input[name=full_name]').val(registro.PER_APELLIDO_PATERNO + ' ' + registro.PER_APELLIDO_MATERNO + ' ' + registro.PER_PRIMER_NOMBRE + ' ' + registro.PER_SEGUNDO_NOMBRE);
									$('input[name=email]').val(registro.PER_EMAIL);
									$('select[name=tip_dni]').val(registro.PER_TIPO_DNI);
									$('input[name=dni]').val(registro.PER_DNI);
									$('input[name=fecha_nac]').val(registro.PER_FECHA_NACIMIENTO);
									$('input[name=genero]').val(registro.PER_GENERO);
									
									$('input[name=id_cuen_per]').val(registro.PER_ID);

							
									tbHtml += ` <tr class="get_data_row" style="cursor:pointer;">
										<th for="id">${registro.BAN_ID}<input type="hidden" name="ban_id" data-vars='{"id":${registro.BAN_ID}, "tipo_cuenta": "${registro.BAN_TIPO_CUENTA}", "cuenta_tar": ${registro.BAN_CUENTA_TARJETA}, "cod_tar": "${registro.BAN_COD_TARJETA}", "fec_cad": "${registro.BAN_FECHA_CADUCIDAD}"}'></th>
										<th >${registro.BAN_NOMBRE_TARJETA}</th>
										<th >${registro.BAN_ESTADO}</th>
										
									</tr>`;
								});
								$('#datatable_addressUpdate tbody').prepend(tbHtml);

								
								
								$(".get_data_row").click(function() {
									var MyRows = $(this);
									for (var i = 0; i < MyRows.length; i++) {
										var MyIndexValue = $(MyRows[i]).find('th:eq(0)').find('input[name=ban_id]').data('vars');
										//console.log(MyIndexValue);
										
										$('select[name="tip_cuenta"]').val(MyIndexValue.tipo_cuenta);
										$('input[name="cue_tar"]').val(MyIndexValue.cuenta_tar);
										$('input[name="cod_tar"]').val(MyIndexValue.cod_tar);
										$('input[name="fec_cad"]').val(MyIndexValue.fec_cad);
									}
									
								});

							});*/

				},
				error: function() {
					$('.RespuestaAjax').html(msjError);
				}
			});
			return false;
		});
	});


});

 