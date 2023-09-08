<?php
require "includes/config.php";

$username = input('username');
$password = input('password');

$user = $db->select_one('users','*',"username='".$username."' and status = 1");

if(isset($user['id'])){

    if($common->verify_password($password, $user['password'])){
      
        $session->set('user_id', $user['id']);
        $session->set('user_name', $user['name']);

        redirect('dashboard.php');

    }else{
        $session->set('login_error',"Invalid Credentials");
        redirect('index.php');
    }
    

}else{
    $session->set('login_error',"Invalid Credentials");
    redirect('index.php');
}
