<?php
class Common
{

    public function __construct($base_url){
        Session::set('base_url',$base_url);
    }
    

    public function encrypt_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function verify_password($password, $storedPassword){
        if (password_verify($password, $storedPassword)) {
            return true;
        } else {
           return false;
        }
    }




}