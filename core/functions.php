<?php

    function get_header( $header = null ) {
    	require_once( DIR_MODULES . '/header' . ($header == '' ? '' : '-' . $header) . '.php');
    }

    function get_footer( $footer = null ) {
        require_once( DIR_MODULES . '/footer' . ($footer == '' ? '' : '-' . $footer) . '.php');
    }
    
    function get_bottom_bar( $bottom_bar = null ) {
        require_once( DIR_MODULES . '/bottom_bar' . ($bottom_bar == '' ? '' : '-' . $bottom_bar) . '.php');
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
        enqueue_style('Bootstrap-4', SERVER_URL . 'vendors/font-awesome/css/font-awesome.min.css', '1.0', 'all');
        enqueue_style('Bootstrap-4', SERVER_URL . 'vendors/nprogress/nprogress.css', '1.0', 'all');
        enqueue_style('Bootstrap-4', SERVER_URL . 'vendors/animate.css/animate.min.css', '1.0', 'all');
        
        if(is_page('home')){
            
        }
        
        enqueue_style('custom-min', SERVER_URL . 'build/css/custom.min.css', '1.0', 'all');
        enqueue_style('style_fixed', SERVER_URL . 'assets/css/style-fixed.css', '1.0', 'all');
    }

    function register_script() {
        enqueue_script('jquery', SERVER_URL . 'vendors/jquery/dist/jquery.min.js', '1.0');
        enqueue_script('jquery', SERVER_URL . 'vendors/bootstrap/dist/js/bootstrap.bundle.min.js', '1.0');
            
        if(is_page('forgotPassword', true)){
            enqueue_script('send_form_email', SERVER_URL . 'assets/js/send_form_email.js', '1.0');
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