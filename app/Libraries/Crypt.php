<?php

namespace App\Libraries;

class Crypt{
    public static function make($senha){
        return password_hash($senha, PASSWORD_BCRYPT);
    }

    public static function check($entrada, $db_senha){
        if(password_verify($entrada, $db_senha)){
            return true;
        }else{
            return false;
        }
    }
}