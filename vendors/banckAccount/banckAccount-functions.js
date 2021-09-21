$('document').ready(function (e) {

	load_select_2("#dni_person", 'Persons/get_person/');

	$("#dni_person").change(function () {
		$("#dni_person option:selected").each(function () {
			per_id = $(this).val();
			//console.log(per_id);
			
			$.post(SERVER_API + "Persons/get_all_person_id/", { per_id: per_id }, function (data) {
				//console.log(data);
				var get_data_to_table = $.parseJSON(data).data;
				$('#datatable_addressUpdate tbody').empty();
					var tbHtml=""
					$.each(get_data_to_table, function (key, registro) {
						
						console.log(registro);

						$('input[name=full_name]').val(registro.PER_APELLIDO_PATERNO + ' ' + registro.PER_APELLIDO_MATERNO + ' ' + registro.PER_PRIMER_NOMBRE + ' ' + registro.PER_SEGUNDO_NOMBRE);
						$('input[name=email]').val(registro.PER_EMAIL);
						//$('input[name=tip_dni]').val(registro.PER_TIPO_DNI);

						$("input[name=tip_dni]").val(registro.PER_TIPO_DNI)
						if($("input[name=tip_dni]").val() == 1){
							$("input[name=tip_dni_name]").val('CEDULA')
						}else if($("input[name=tip_dni]").val() == 2){
							$("input[name=tip_dni_name]").val('PASAPORTE')
						}

						$('input[name=dni]').val(registro.PER_DNI);
						$('input[name=fecha_nac]').val(registro.PER_FECHA_NACIMIENTO);
						$('input[name=genero]').val(registro.PER_GENERO);
						
						$('input[name=id_cuen_per]').val(registro.PER_ID);
						$('input[name=ban_id]').val(registro.BAN_ID);

				 		if(registro.BAN_ID != null){
					 
							tbHtml += ` <tr class="get_data_row" style="cursor:pointer;">
							<th for="id">${registro.BAN_ID}<input type="hidden" name="ban_id" value="${registro.BAN_ID}" data-vars='{"id":${registro.BAN_ID}, "tipo_cuenta": "${registro.BAN_TIPO_CUENTA}", "cuenta_tar": "${registro.BAN_CUENTA_TARJETA}", "cod_tar": "${registro.BAN_COD_TARJETA}", "fec_cad": "${registro.BAN_FECHA_CADUCIDAD}"}'></th>
							<th >${registro.BAN_NOMBRE_TARJETA}</th>
							<th >${registro.BAN_ESTADO}</th>
							
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
						$('select[name="tip_cuenta_up"]').prop('disabled', false);
						$('input[name="cue_tar_up"]').prop('disabled', false);
						$('input[name="cod_tar_up"]').prop('disabled', false);
						$('input[name="fec_cad_up"]').prop('disabled', false);

						var MyRows = $(this);
						for (var i = 0; i < MyRows.length; i++) {
							var MyIndexValue = $(MyRows[i]).find('th:eq(0)').find('input[name=ban_id]').data('vars');
							console.log(MyIndexValue);
							
							$('select[name="tip_cuenta_up"]').val(MyIndexValue.tipo_cuenta);
							$('input[name="cue_tar_up"]').val(MyIndexValue.cuenta_tar);
							$('input[name="cod_tar_up"]').val(MyIndexValue.cod_tar);
							$('input[name="fec_cad_up"]').val(MyIndexValue.fec_cad);
						}
						
					});

				});
 

		});
	});


	$("input[name=tip_cuenta_up]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('AHORROS');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('CORRIENTE');
        }else if($(this).val() == 3){
            $(this).siblings().find('input').val('VIRTUAL DE PAGO');
        }else if($(this).val() == 4){
            $(this).siblings().find('input').val('TARJETA');
        }
	});

	$("input[name=tarjeta_up]").blur(function(){
        if($(this).val() == 2){
            $(this).siblings().find('input').val('DINNERS');
        }
	});

	$("input[name=nombre_banco_up]").blur(function(){
        if($(this).val() == 44){
            $(this).siblings().find('input').val('DINNERS');
        }
	});

	        //$('#price, #tax').on('keyup change paste', function() {
	$('.FormularioAjax').submit(function(e){
	 
        e.preventDefault();
		
        var form = $(this);
		
        var tipo="update";
        
        var metodo=form.attr('method');
        var respuesta=form.children('.RespuestaAjax');
		
        var formdata = new FormData(this);
		console.log(form.serialize());
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
                url: SERVER_API + "Preexistences/add_account_bank_person/",
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
				success: function (data) {
					//console.log(data);
					var data_server = $.parseJSON(data);
					respuesta.html(data_server); 
					
					//console.log(data_server);
					if(data_server.type == 'error'){
						swal(
							"Ocurrio un error",
							data_server.data.message,
							data_server.type
						);
					}else{
						if(tipo == 'save'){
							swal(
								"Registro ingresado",
								data_server.data.message,
								data_server.type
							);
							
 
						}
						if (tipo == 'update') {
							$('#datatable_banckAccount tbody').empty();
							swal(
								"Registro actualizado",
								data_server.data.message,
								data_server.type
							);
						}
						
					}
					
					$('.FormularioAjax')[0].reset();
					$('#datatable_banckAccount tbody').empty();
							var per_id = $('input[name=id_cuen_per]').val();
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
								$('#datatable_banckAccount tbody').prepend(tbHtml);

								
								
								$(".get_data_row").click(function() {
									var MyRows = $(this);
									for (var i = 0; i < MyRows.length; i++) {
										var MyIndexValue = $(MyRows[i]).find('th:eq(0)').find('input[name=ban_id]').data('vars');
										console.log(MyIndexValue);
										
										$('select[name="tip_cuenta"]').val(MyIndexValue.tipo_cuenta);
										$('input[name="cue_tar"]').val(MyIndexValue.cuenta_tar);
										$('input[name="cod_tar"]').val(MyIndexValue.cod_tar);
										$('input[name="fec_cad"]').val(MyIndexValue.fec_cad);
									}
									
								});

							});

				},
				error: function() {
					$('.RespuestaAjax').html(msjError);
				}
			});
			return false;
		});
	});


});

 