$('document').ready(function (e) {

    var role_user = $("input[type='radio']").val();
	$("input[type='radio']:first").iCheck('check');
	
    get_list_users(role_user);

    $('.role_user').on('ifClicked', function (event) {
		role_user = $(this).val();
        get_list_users($(this).val());
    });
    
	$('.action_add_person').on('click', function (event) {
		$(location).attr('href', SERVER_URL + "thirdPartyRegistration/");
	});

	// Register date formats to allow DataTables sorting of the dates https://momentjs.com/
	//$.fn.dataTable.moment( 'LLLL', 'es');		 // Monday, August 2, 2021 5:57 PM

});

//******* profiles ******/
 function get_list_users (role_user) {

	
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

	});

}

//******* end profiles ******/
