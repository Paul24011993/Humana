$('document').ready(function (e) {

	load_select_2("#select_contratante", 'Persons/get_person/');

	
	//$('#datatable_addressUpdate').DataTable();

	$("#select_city").change(function () {
		$('select[name="negocio"]').val('2');
		$('input[name="min_tit"]').val('1');
		$('input[name="edad_ingreso"]').val('110');
		$('input[name="max_tit"]').val('3');
		$('input[name="limit_edad_renov"]').val('110');
		$('input[name="min_dep"]').val('0');
		$('input[name="edad_min_titular"]').val('18');
		$('input[name="max_dep"]').val('53');
		$('input[name="realiz_reembolso"]').val('8');
		$('select[name="tipo_titular"]').val('2');
		$('input[name="no_personas"]').val('10');
		$('select[name="forma_fact"]').val('2');
		$('select[name="presen_reclamo"]').val('2');
		$('input[name="dev_desafiliacion"]').iCheck('check');
		//$('input[name="prorrateo"]').iCheck('check');
		$('input[name="emision_nc_nd"]').iCheck('check');
		$('input[name="renovacion_auto"]').iCheck('check');
		$('input[name="fact_si"]').iCheck('check');
		$('select[name="sucursal"]').val('1');
		$('select[name="anualidad"]').val('1');
		$('input[name="dia_gracia"]').val('15');
		$('select[name="pool"]').val('1');
		$('select[name="periodo_fact"]').val('1');
		$('select[name="plan_pago"]').val('1');
		$('input[name="fech_emi"]').val('2021-08-01');
		$('input[name="tiempo_mes"]').val('12');
		$('input[name="desde"]').val('2021-06-23');
		$('input[name="hasta"]').val('2022-07-31');
		$('select[name="tiempo_contrato"]').val('1');
	});
	
	$("#select_contratante").change(function () {
		
		$('select[name="pagador"]').val('1');
		$('select[name="datos_fact"]').val('1');
		$('input[name="ciud_cobre"]').val('ECUADOR - PICHINCHA - QUITO');
		
		
	});
	$("#direct_cobro").change(function () {
		$('input[name="nom_tarjeta"]').val('DINERS');
		$('input[name="nom_banco"]').val('DINERS');
		$('input[name="tip_cuenta"]').val('TARJETA');
		$('input[name="cta_tarjeta"]').val('3685701639139');
	});
	
	$("#load_parameters").click(function () {
		$('input[name="reg_debito"]').val('272117');
		$('input[name="registro"]').val('272117');
		$('input[name="user_crea"]').val('RPA_SOFT');
		$('input[name="fecha_crea"]').val('2021-08-01 21:08:52');
		
	});
		
		



	/*
		$("#select_city option:selected").each(function () {
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
 

		});*/
 


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


	var data = [
		{
			id: 0,
			text: 'Selecione',
			"selected": true
		},
		{
			id: 4,
			text: '946 - PLAN FULL - METROHUMANA 50.000'
		}
	];

	$("#nombre_plan").select2({
		data: data
	})

	var tbHtml2 = '';
	var tbHtml3 = '';
	$("#nombre_plan").change(function () {

		tbHtml2 += `
		<tr>
			<th>946</th>
			<th>MH 50.000 - COD</th>
			<th>PLAN FULL - METROHUMANA 50.000</th>
			<th>10</th>
			<th>METROHUKMANA</th>
			<th>1</th>
			<th>GRUPO 1</th>
		</tr>`;

		$('#table_detail_plan tbody').prepend(tbHtml2);

		$('select[name="negocio_select"]').val('2');
		$('input[name="negocio_select"]').val('E');
		$('input[name="edad_min_titular"]').val('18');
		$('input[name="manual_tar_1"]').val('1383');
		$('input[name="manual_tar_2"]').val('TARIFARIO METROHUMANA');
		$('input[name="edad_maximo_titular"]').val('110');
		$('select[name="tipo_apilcacion"]').val('2');
		$('input[name="valor_base"]').val('1.00');
		$('input[name="periodo_presente_recalmo"]').val('60');
		
		$('input[name="tipo_cobertura_1"]').val('2');
		$('input[name="tipo_cobertura_2"]').val('ANUAL');
		$('input[name="periodo_cobertura_1"]').val('1');
		$('input[name="periodo_cobertura_2"]').val('VIOGENCIA CONTRATO');
		$('input[name="valor_cobertura"]').val('50.000.00');
		$('select[name="tope_cobertura"]').val('2');
		$('input[name="Codsecuases"]').val('5');
		$('input[name="NombreAcess"]').val('Plan Full - Metrohumana 50.000');
		$('input[name="Codscvs"]').val('53059');
		$('input[name="CodAcess"]').val('005-Cl3-2020');
		$('input[name="Benefscvs"]').val('53069');
		$('input[name="Benefacess"]').val('005-10-012');


		tbHtml3 += `
		<tr>
			<th>0</th>
			<th>110</th>
			<th>100.00%</th>
			<th>50.000</th>
		</tr>`;

		$('#table_edad_cobertura tbody').prepend(tbHtml3);
	
	});


	var data2 = [
		{
			id: 0,
			text: 'Selecione',
			"selected": true
		},
		{
			id: 4,
			text: '946 - PLAN FULL - METROHUMANA 50.000'
		}
	];

	$("#select_identificacion").select2({
		data: data2
	})

	var tbHtml4 = '';
	$("#select_identificacion").change(function () {

		tbHtml4 += `
		<tr>
			<th>1311370413</th>
			<th>VERA CAMACHO WILSON JAVIER</th>
		</tr>`;

		$('#table_identificacion tbody').prepend(tbHtml4);

		$('select[name="select_plan"]').val('2');
		$('input[name="input_tarifa"]').val('GRUPO ETAREO');
		$('input[name="input_estado"]').val('INGRESADO');
		$('input[name="fech_nacimiento"]').val('13/05/1978');
		$('input[name="edad_ingreso"]').val('43');
		$('input[name="input_sexo"]').val('MASCULINO');
		$('input[name="prima_neta"]').val('92.04');
		
		tbHtml3 += `
		<tr>
			<th>0</th>
			<th>110</th>
			<th>100.00%</th>
			<th>50.000</th>
		</tr>`;

		$('#table_edad_cobertura tbody').prepend(tbHtml3);
	
	});


});

 