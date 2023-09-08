<?php


$session = new Session();

function base_url($return = false){
    global $session;
    return $session->get('base_url');
}

function user_name(){
    global $session;
    return $session->get('user_name');
}


function assets_url($path){
    return base_url().'assets/'.$path;
}

function redirect($url){
    header('Location:'.$url);
}

function app_name(){
    global $app_name;
    return $app_name;
}

function layoutHeader(){
    include('layouts/header.php');
    include('layouts/left.php');
}

function layoutFooter(){
    include('layouts/footer.php');
}

function input($key){
    global $db;
    return $db->real_escape_string($_REQUEST[$key]);
}

function check_logged_in(){
    global $session;
    if($session->get('user_id')){
        
    }else{
        $session->set('login_error',"Please login to proceed");
        redirect('index.php');
    }
}