<?php
class Session 
{

    public function __construct(){
        session_start();
    }

    public function check($name){
        if(isset($_SESSION[$name]))
            return true;
        else
            return false;
    }

    public function get($name, $destroy = false){
        if($this->check($name)){
            if($destroy){
                $value = $_SESSION[$name];
                unset($_SESSION[$name]);
                return $value;
            }else{
                return $_SESSION[$name];
            }            
        }
        else
            return "";
    }

    public static function set($name, $value){
        $_SESSION[$name] = $value;
    }

    public function unset($name){
        if($this->check($name))
            unset($_SESSION[$name]);
    }
}