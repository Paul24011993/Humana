<?php

    function get_header( $header = null ) {
    	require_once( DIR_MODULES . '/header' . ($header == '' ? '' : '-' . $header) . '.php');
    }

    function get_footer( $footer = null ) {
        require_once( DIR_MODULES . '/footer' . ($footer == '' ? '' : '-' . $footer) . '.php');
    }

    function language_attributes(){
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        echo  'lang="' . $idioma . '"';
    }

    function body_class( $class = '' ) {
        // Separa los nombres de las clases con un solo espacio, clasifica los nombres de las clases para el elemento del cuerpo
        echo 'class="' . join( ' ', get_body_class( $class ) ) . '"';
    }
    
    function get_body_class( $class = '' ) {
        
        $classes = array();
        if ( $class == 'login') {
            $classes[] = 'login';
             }else if ( $class == '404' ) {
            $classes[] = 'nav-md';
            }else{
            $classes[] = 'nav-md';
        }
        return array_unique( $classes );
    }
    
    function validate_login_user(){
        $token = (!empty($_COOKIE['Token_user'])) ? $_COOKIE['Token_user'] : '';
        
        if( !isset( $token ) || empty($token ) ){
            echo "<script>window.location='".SERVER_URL."';</script>"; 
            //json_send_fail( 'user_not_authenticated' );
        }
    }

    function json_send_success($data) {
        $error = json_last_error();
        if ($error != JSON_ERROR_NONE) {
            json_send_fail(array('type' => 'error', 'data' => $error ));
        }
        die(json_encode(  array('type' => 'success',  'data' => $data ) ) );
    }
    
    function json_send_fail($data) {
        die(json_encode(  array('type' => 'error',  'data' => $data ) ) );
    }
    
    function encryption($string){
        $output = FALSE;
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV),0 ,16);
        $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }
    
    //desencriptar contrasenia
    function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    function get_current_time(){
        /*$Object = new DateTime();  
        $DateAndTime = $Object->format("d-m-Y h:i:s a");  */

        $dateTime = new DateTime('now', new DateTimeZone('America/Guayaquil'));
        
        return $dateTime->format("d-m-Y h:i:s a");
}

    function register_style_sheet() {
        enqueue_style('Bootstrap-4', SERVER_URL . 'vendors/bootstrap/dist/css/bootstrap.min.css', '1.0', 'all');
        enqueue_style('Font-awesome', SERVER_URL . 'vendors/font-awesome/css/font-awesome.min.css', '1.0', 'all');
        enqueue_style('nprogress', SERVER_URL . 'vendors/nprogress/nprogress.css', '1.0', 'all');
        enqueue_style('Animate', SERVER_URL . 'vendors/animate.css/animate.min.css', '1.0', 'all');
        enqueue_style('sweetalert', SERVER_URL . 'vendors/sweetalert2/dist/sweetalert2.css', '1.0', 'all');
        
        
        if(is_page('inquiries')){
            enqueue_style('Jquery-dataTables', 'https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css', '1.0', 'all');
            enqueue_style('dataTables-bootstrap', SERVER_URL . 'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css', '1.0', 'all');
            enqueue_style('buttons-bootstrap', SERVER_URL . 'vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css', '1.0', 'all');
            enqueue_style('fixedHeader-bootstrap', SERVER_URL . 'vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css', '1.0', 'all');
            enqueue_style('responsive-bootstrap', SERVER_URL . 'vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css', '1.0', 'all');
            enqueue_style('scroller-bootstrap', SERVER_URL . 'vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css', '1.0', 'all');
            enqueue_style('iCheck-green', SERVER_URL . 'vendors/iCheck/skins/flat/green.css', '1.0', 'all');
        }
        
        if(is_page('thirdPartyRegistration')){
            enqueue_style('select2', SERVER_URL . 'vendors/select2/dist/css/select2.min.css', '1.0', 'all');
        }
        
        if(is_page('bankAccountUpdate')){
            enqueue_style('Jquery-dataTables', 'https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css', '1.0', 'all');
            enqueue_style('dataTables-bootstrap', SERVER_URL . 'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css', '1.0', 'all');
            enqueue_style('buttons-bootstrap', SERVER_URL . 'vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css', '1.0', 'all');
            enqueue_style('fixedHeader-bootstrap', SERVER_URL . 'vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css', '1.0', 'all');
            enqueue_style('responsive-bootstrap', SERVER_URL . 'vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css', '1.0', 'all');
            enqueue_style('scroller-bootstrap', SERVER_URL . 'vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css', '1.0', 'all');
            enqueue_style('iCheck-green', SERVER_URL . 'vendors/iCheck/skins/flat/green.css', '1.0', 'all');
            enqueue_style('select2', SERVER_URL . 'vendors/select2/dist/css/select2.min.css', '1.0', 'all');
        }
        
        if(is_page('addressUpdate')){
            enqueue_style('iCheck-green', SERVER_URL . 'vendors/iCheck/skins/flat/green.css', '1.0', 'all');
            enqueue_style('select2', SERVER_URL . 'vendors/select2/dist/css/select2.min.css', '1.0', 'all');
        }
        
        if(is_page('issuanceContracts')){
            enqueue_style('iCheck-green', SERVER_URL . 'vendors/iCheck/skins/flat/green.css', '1.0', 'all');
            enqueue_style('select2', SERVER_URL . 'vendors/select2/dist/css/select2.min.css', '1.0', 'all');
        }
        
        enqueue_style('custom-min', SERVER_URL . 'build/css/custom.min.css', '1.0', 'all');
    }

    function register_script() {
        enqueue_script('jquery', SERVER_URL . 'vendors/jquery/dist/jquery.min.js', '1.0');
        enqueue_script('jquery', SERVER_URL . 'vendors/bootstrap/dist/js/bootstrap.bundle.min.js', '1.0');
        enqueue_script('jquery', SERVER_URL . 'vendors/sweetalert2/dist/sweetalert2.min.js', '1.0');
        
        enqueue_script('icheck', SERVER_URL . 'vendors/iCheck/icheck.min.js', '1.0');
        enqueue_script('jquery', SERVER_URL . 'build/js/custom.min.js', '1.0');
        enqueue_script('jquery', SERVER_URL . 'build/js/main.js', '1.0');
        
            
        if(is_page('inquiries')){
            enqueue_script('jquery-dataTables', SERVER_URL . 'vendors/datatables.net/js/jquery.dataTables.min.js', '1.0');
            enqueue_script('dataTables-bootstrap', SERVER_URL . 'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js', '1.0');
            enqueue_script('dataTables-buttons', SERVER_URL . 'vendors/datatables.net-buttons/js/dataTables.buttons.min.js', '1.0');
            enqueue_script('buttons-bootstrap', SERVER_URL . 'vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js', '1.0');
            enqueue_script('buttons-flash', SERVER_URL . 'vendors/datatables.net-buttons/js/buttons.flash.min.js', '1.0');
            enqueue_script('buttons-html5', SERVER_URL . 'vendors/datatables.net-buttons/js/buttons.html5.min.js', '1.0');
            enqueue_script('buttons-print', SERVER_URL . 'vendors/datatables.net-buttons/js/buttons.print.min.js', '1.0');
            enqueue_script('dataTables-fixedHeader', SERVER_URL . 'vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js', '1.0');
            enqueue_script('dataTables-keyTable', SERVER_URL . 'vendors/datatables.net-keytable/js/dataTables.keyTable.min.js', '1.0');
            enqueue_script('dataTables-responsive', SERVER_URL . 'vendors/datatables.net-responsive/js/dataTables.responsive.min.js', '1.0');
            enqueue_script('responsive-bootstrap', SERVER_URL . 'vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js', '1.0');
            enqueue_script('dataTables-scroller', SERVER_URL . 'vendors/datatables.net-scroller/js/dataTables.scroller.min.js', '1.0');
            
            enqueue_script('inquiries-functions', SERVER_URL . 'vendors/inquiries/inquiries-functions.js', '1.0');
        }
        
        if(is_page('thirdPartyRegistration')){
            enqueue_script('select2', SERVER_URL . 'vendors/select2/dist/js/select2.min.js', '1.0');
            enqueue_script('dataTables-scroller', SERVER_URL . 'vendors/thirdPartyRegistration/thirdPartyRegistration.js', '1.0');

        }
            
        if(is_page('bankAccountUpdate')){
            enqueue_script('jquery-dataTables', SERVER_URL . 'vendors/datatables.net/js/jquery.dataTables.min.js', '1.0');
            enqueue_script('dataTables-bootstrap', SERVER_URL . 'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js', '1.0');
            enqueue_script('dataTables-buttons', SERVER_URL . 'vendors/datatables.net-buttons/js/dataTables.buttons.min.js', '1.0');
            enqueue_script('buttons-bootstrap', SERVER_URL . 'vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js', '1.0');
            enqueue_script('buttons-flash', SERVER_URL . 'vendors/datatables.net-buttons/js/buttons.flash.min.js', '1.0');
            enqueue_script('buttons-html5', SERVER_URL . 'vendors/datatables.net-buttons/js/buttons.html5.min.js', '1.0');
            enqueue_script('buttons-print', SERVER_URL . 'vendors/datatables.net-buttons/js/buttons.print.min.js', '1.0');
            enqueue_script('dataTables-fixedHeader', SERVER_URL . 'vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js', '1.0');
            enqueue_script('dataTables-keyTable', SERVER_URL . 'vendors/datatables.net-keytable/js/dataTables.keyTable.min.js', '1.0');
            enqueue_script('dataTables-responsive', SERVER_URL . 'vendors/datatables.net-responsive/js/dataTables.responsive.min.js', '1.0');
            enqueue_script('responsive-bootstrap', SERVER_URL . 'vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js', '1.0');
            enqueue_script('dataTables-scroller', SERVER_URL . 'vendors/datatables.net-scroller/js/dataTables.scroller.min.js', '1.0');
            enqueue_script('select2', SERVER_URL . 'vendors/select2/dist/js/select2.min.js', '1.0');

            enqueue_script('inquiries-functions', SERVER_URL . 'vendors/banckAccount/banckAccount-functions.js', '1.0');
        }

        if(is_page('addressUpdate')){
            enqueue_script('select2', SERVER_URL . 'vendors/select2/dist/js/select2.min.js', '1.0');
            enqueue_script('inquiries-functions', SERVER_URL . 'vendors/addressUpdate/addressUpdate-functions.js', '1.0');
        }

        if(is_page('issuanceContracts')){
            enqueue_script('select2', SERVER_URL . 'vendors/select2/dist/js/select2.min.js', '1.0');
            enqueue_script('inquiries-functions', SERVER_URL . 'vendors/issuanceContracts/issuanceContracts-functions.js', '1.0');
        }

        
}

    function enqueue_style($handle = '', $src = '', $ver = false, $media = 'all'){
        if($handle !== ''){
            $handle = 'id="'.$handle.'"';
        }
        $type_attr = 'type="text/css"';
        printf(
            '<link %s rel="stylesheet" href="%s" %s media="%s" />',
            $handle, $src, $type_attr, $media,
        );
    }

    function enqueue_script($handle = '', $src = '', $ver = false){
        if($handle !== ''){
            $handle = 'id="'.$handle.'"';
        }
        $type_attr = 'type="text/javascript"';
        printf(
            '<script %s src="%s" %s /></script>',
            $type_attr, $src, $handle,
        );
    }

    function is_page($page, $is_single_page = false){
        
        global $viewsControllers;
        $viewsLoad = $viewsControllers->get_views_controllers();
        $route = explode('/', $viewsControllers->get_views_controllers());
        $func_page = substr(end($route), 0, -4);
        
        if($is_single_page){
            if($page == $viewsLoad){
                return true;
            }else{
                return false;
            }
        }

        if($page == $func_page){
             return true;
            }else{
                return false;
        }
    }