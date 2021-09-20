$('document').ready(function (e) {

    load_select_2("#preexistencias_select", 'Preexistences/get_Preexistences/');
    
    load_select_2("#auditor", 'Preexistences/get_auditor/');


    $("#button_serach_person").click(function(){

        var input_dni = $(this).parent().siblings('input[name=dni]').val();
        
        $.post(SERVER_API + "Persons/get_all_persons_dni/", { input_dni: input_dni }, function (data) {
            var data_get_person_dni = $.parseJSON(data);
            if(data_get_person_dni.data == '' || data_get_person_dni.data == null){
                swal('', 'No existen personas que cumplan con  los filtros de busqueda ingresados, revise.', 'error');
            }else{
                $.each(data_get_person_dni.data, function (key, registro) {
                    $("input[name=tip_dni]").val(registro.PER_TIPO_DNI)
                    if($("input[name=tip_dni]").val() == 1){
                        $("input[name=tip_dni_name]").val('CEDULA')
                    }else if($("input[name=tip_dni]").val() == 2){
                        $("input[name=tip_dni_name]").val('PASAPORTE')
                    }
                    
                    $("input[name=email]").val(registro.PER_EMAIL)
                    
                    $("input[name=status]").val(registro.PER_ESTADO)
                    if($("input[name=status]").val() == 1){
                        $("input[name=status_name]").val('ACTIVO')
                    }else if($("input[name=status]").val() == 2){
                        $("input[name=status_name]").val('INACTIVO')
                    }

                    $("input[name=ape_pat]").val(registro.PER_APELLIDO_PATERNO)
                    $("input[name=ape_mat]").val(registro.PER_APELLIDO_MATERNO)
                    $("input[name=prim_nom]").val(registro.PER_PRIMER_NOMBRE)
                    $("input[name=seg_nom]").val(registro.PER_SEGUNDO_NOMBRE)
                    $("input[name=fech_nac]").val(registro.PER_FECHA_NACIMIENTO)

                    $("input[name=genero]").val(registro.PER_GENERO)
                    if($("input[name=genero]").val() == 1){
                        $("input[name=genero_name]").val('MASCULINO')
                    }else if($("input[name=genero]").val() == 2){
                        $("input[name=genero_name]").val('FEMENINO')
                    }

                    $("input[name=tip_viv]").val(registro.PER_TIPO_VIVIENDA)
                    if($("input[name=tip_viv]").val() == 1){
                        $("input[name=tip_viv_name]").val('NO APLICA')
                    }else if($("input[name=tip_viv]").val() == 2){
                        $("input[name=tip_viv_name]").val('')
                    }

                    $("input[name=estudios]").val(registro.PER_ESTUDIOS)
                    if($("input[name=estudios]").val() == 1){
                        $("input[name=estudios_name]").val('A/N')
                    }else{
                        $("input[name=estudios_name]").val('')
                    }

                    $("input[name=estado_civil]").val(registro.PER_ESTADO_CIVIL)
                    if($("input[name=estado_civil]").val() == 1){
                        $("input[name=estado_civil_name]").val('A/N')
                    }else {
                        $("input[name=estado_civil_name]").val('')
                    }

                    $("input[name=cargo]").val(registro.PER_CARGO)
                    if($("input[name=cargo]").val() == 1){
                        $("input[name=cargo_name]").val('A/N')
                    }else{
                        $("input[name=cargo_name]").val('')
                    }

                    $("input[name=profesion]").val(registro.PER_PROFESION)
                    if($("input[name=profesion]").val() == 1){
                        $("input[name=profesion_name]").val('A/N')
                    }else{
                        $("input[name=profesion_name]").val('')
                    }


                });
            }
        });
    });
        
    $("input[name=tip_dni]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('CEDULA');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('PASAPORTE');
        }
	});
    
    $("input[name=tip_per]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('NATURAL');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('JURÍDICO');
        }
	});
    
    $("input[name=status]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('ACTIVO');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('INACTIVO');
        }
	});
    
    $("input[name=genero]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('FEMENINO');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('MASCULINO');
        }
	});
    
    $("input[name=tip_viv]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('NO APLICA');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('');
        }
	});
    
    $("input[name=estudios]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('A/N');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('');
        }
	});
    
    $("input[name=estado_civil]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('SOLTERO');
        }else if($(this).val() == 2){
            $(this).siblings().find('input').val('CASADO');
        }else if($(this).val() == 3){
            $(this).siblings().find('input').val('VIUDO');
        }else if($(this).val() == 4){
            $(this).siblings().find('input').val('DIVORCIADO');
        }else if($(this).val() == 5){
            $(this).siblings().find('input').val('UL');
        }
	});
    
    $("input[name=cargo]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('A/N');
        }
    });
    
    $("input[name=profesion]").blur(function(){
        if($(this).val() == 1){
            $(this).siblings().find('input').val('A/N');
        }
    });
    
    
    
    
            
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