$(function(e) {

	
	var role_user = $("input[type='radio']").val();
	$("input[type='radio']:first").iCheck('check');
	

	get_list_users(role_user);
	
	$('.role_user').on('ifClicked', function (event) {
		$("#datatable_inquiries tbody").empty();
		role_user = $(this).val();
		get_list_users($(this).val());
	});
	
	$('#button_serach_person_table').on('click', function (event) {
		$("#datatable_inquiries tbody").empty();
		var input_search = $(this).parent().siblings('input[type="text"]').val();
		console.log(input_search);

		$.post(SERVER_API + "Persons/search_input/", { input_search: input_search }, function (data) {
			var get_data_to_table2 = $.parseJSON(data).data;
			if(get_data_to_table2.length){
				
				$.each(get_data_to_table2, function (key, registro) {
					//console.log(registro);

					tbHtml = `<tr>
								<td>${registro.PER_CODIGO}</td>
								<td>${registro.TIP_ID}</td>
								<td>${registro.PER_DNI}</td>
								<td>${registro.PER_APELLIDO_PATERNO +' '+registro.PER_APELLIDO_MATERNO +' ' + registro.PER_PRIMER_NOMBRE +' '+registro.PER_SEGUNDO_NOMBRE }</td>
								<td>${registro.PER_FECHA_NACIMIENTO}</td>
								<td>${registro.PER_GENERO}</td>
								<td>${registro.PER_GENERO}</td>
								<td>${(registro.PER_ESTADO == 1 )? 'Usuario activo' : 'Usuario inactivo' }</td>
							</tr>`;
					$("#datatable_inquiries tbody").append(tbHtml);
				});
			}else{
				swal('','No existe personas que cumplan con los filtros de busqueda ingresados, revise.','warning');
			}


		});
	});
	
	
	$('.action_add_person').on('click', function (event) {
		$(location).attr('href', SERVER_URL + "thirdPartyRegistration/");
	});
/*
	$('#datatable_inquiries').on( 'draw.dt', function () {
	 
		
		if($('#test_show').length ){
			swal('','No existe personas que cumplan con los filtros de busqueda ingresados, revise.','warning');
		}
	} );*/

});
//******* profiles ******/
 function get_list_users (role_user) {
	
	//var tbHtmlInquiries = '';
	$.post(SERVER_API + "Persons/", { role_user: role_user }, function (data) {
		var get_data_to_table = $.parseJSON(data).data;
		if(get_data_to_table.length){
			
			$.each(get_data_to_table, function (key, registro) {

				tbHtml = `<tr>
							<td>${registro.PER_CODIGO}</td>
							<td>${registro.TIP_ID}</td>
							<td>${registro.PER_DNI}</td>
							<td>${registro.PER_APELLIDO_PATERNO +' '+registro.PER_APELLIDO_MATERNO +' ' + registro.PER_PRIMER_NOMBRE +' '+registro.PER_SEGUNDO_NOMBRE }</td>
							<td>${registro.PER_FECHA_NACIMIENTO}</td>
							<td>${registro.PER_GENERO}</td>
							<td>${registro.PER_GENERO}</td>
							<td>${(registro.PER_ESTADO == 1 )? 'Usuario activo' : 'Usuario inactivo' }</td>
						</tr>`;
				$("#datatable_inquiries tbody").append(tbHtml);
			});
		}else{
			swal('','No existe personas que cumplan con los filtros de busqueda ingresados, revise.','warning');
		}
	});


	/*
	$('#datatable_inquiries').DataTable({
		"destroy" : true,
		"columnDefs": [
			{ className: "text-center", "targets": [7] }
		],
		"ajax": SERVER_API + "Persons/" + role_user + "/",
        "type": 'POST',
		"columns": [
			{ "data": "PER_CODIGO" },
			{ "data": "TIP_ID" },
			{ "data": "PER_DNI" },
			{
				"data": "PER_APELLIDO_PATERNO",
				render: function (data, type, row) {
					return row.PER_APELLIDO_PATERNO + ' ' + row.PER_APELLIDO_MATERNO + ' ' + row.PER_PRIMER_NOMBRE + ' ' + row.PER_SEGUNDO_NOMBRE;
				}
			},
			{ "data": "PER_FECHA_NACIMIENTO" },
			{ "data": "PER_GENERO" },
			{ "data": "PER_GENERO" },

			{
				"data": "PER_ESTADO",
				render: function (data, type, row) {
					var addres = (row.USU_ACTIVO == 1) ? 'Usuario activo' : (row.USU_ACTIVO == 2) ? '<code>Cambiar contraseña</code>' : '<code>Usuario inactivo</code>';
					return addres;
				}
			},
		],
	
		"language": idioma_espanol2,
		
		
		
		
		
		*/	
	}