$('document').ready(function (e) {

    $('body').on("click","button.submit",function(){
        setCookie("Token_user", token(), 1);
        if(getCookie('Token_user') !== '' && $('input[name="user"]').val() == 'admin' && $('input[name="pass"]').val() == 'admin'){
            $(location).attr('href', SERVER_URL + "home/");
        }else{
            alert('Credenciales incorrectas');
        }
    });
    
    $('body').on("click","a.exit_module",function(){
        eraseCookie('Token_user');
        $(location).attr('href', SERVER_URL);
    });

    
    //validaciones en campos del formulario
    /*$(".only_letters").lettersOnly();
    $(".only-number").numbersOnly();
    $(".alpha_numeric").alphaNumericOnly();*/

    $('input[name="intervaltype"]').click(function () {
        $(this).tab('show');
        $(this).removeClass('active');
    });

});

var rand = function() {
    return Math.random().toString(36).substr(2); // remove `0.`
};

function token() {
    return rand() + rand(); // to make it longer
};

function encode_b64(str) {
    return btoa(btoa(btoa(str)));
}

function decode_b64(str) {
    return atob(atob(atob(str)));
}

function capitalizarPalabras(val) {
    return val.toLowerCase()
        .trim()
        .split(' ')
        .map(v => v[0].toUpperCase() + v.substr(1))
        .join(' ');
}



var idioma_espanol = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
};

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    setCookie(name, "", -1);
}

// cargar datos en un select2 con ajax
function load_select_2(identifier, patch){
    $(identifier).select2({
        placeholder: 'SELECCIONE',
        ajax: {
            url: SERVER_API + patch,
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    searchTerm: params.term // search term
                };
            },
            processResults: function (response) {
                //console.log(response);
                return {
                    results: response
                };
            },
            cache: true
        }
    });
}

//Reiniciar un select2
function reset_select(id_selector) {
    $(id_selector).val('');
    $(id_selector).trigger('change');
}
