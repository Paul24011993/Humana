$('document').ready(function (e) {

    load_select_2("#preexistencias_select", 'Preexistences/get_Preexistences/');
    
    load_select_2("#auditor", 'Preexistences/get_auditor/');


        $(".add-row").click(function(){
            var searchTerm_per = $("#preexistencias_select").val();
            var auditoriD = $("#auditor").val();
            
            if(searchTerm_per == null || auditoriD == null){
                alert('Seleccione una preexistencia y un auditor');
                return false;
            }
            var tbHtml = '';
            $.post(SERVER_API + "Preexistences/get_PreexistencesId/", { searchTerm: searchTerm_per, auditoriD : auditoriD }, function (data) {
                var get_data_to_table = $.parseJSON(data);

                $.each(get_data_to_table, function (key, registro) {

                    tbHtml = `<tr>
                    <td><input type="hidden" value="${registro[0].PRE_ID}" name="preexistencias_table">${registro[0].PRE_ID}</td>
                    <td>${registro[0].PRE_CODIGO}</td>
                    <td>${registro[0].PRE_TIPO}</td>
                    <td>${registro[0].PRE_DESCRIPCION}</td>
                    <td><input type="hidden" value="${registro[1].AUD_ID}" name="auditor_table">${registro[1].AUD_NOMBRES+  ' ' +registro[1].AUD_APELLIDOS }</td>
                    </tr>`;
                });
                $("#table_preexistences tbody").append(tbHtml);
                
            });
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });


        //$('#price, #tax').on('keyup change paste', function() {
	$('.FormularioAjax').submit(function(e){
	 
        e.preventDefault();
		
        var form = $(this);
		
        var tipo=form.attr('data-form');
        
        var metodo=form.attr('method');
        var respuesta=form.children('.RespuestaAjax');
		
        var formdata = new FormData(this);
		
        swal({
            title: "¿Estás seguro?",   
            text: "Los datos que enviaras quedaran almacenados en el sistema",   
            type: "question",   
            showCancelButton: true,     
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
			}).then(function () {
            $.ajax({
                type: metodo,
                url: SERVER_API + "Preexistences/addPerson/",
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
							swal(
								"Registro actualizado",
								data_server.data.message,
								data_server.type
							);
						}
						
					}
					
					$('.respuesta-validacion-correo').removeClass('has-success');
					$('.respuesta-validacion-cedula').removeClass('has-success');
					$(".respuesta-val-input-cedula").html("");
					$(".respuesta-val-input-correo").html("");
				},
				error: function() {
					$('.RespuestaAjax').html(msjError);
				}
			});
			return false;
		});
	});





});