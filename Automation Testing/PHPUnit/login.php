<?php

class Login{
    public function LoginSystem($email,$pass)
    {
        $emaill="si-boss@gmail.com";
        $passs ="123";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if ($email == $emaill && $pass == $passs){
                echo ' Login Berhasil !!!';
                return true;
            } if ($email != $emaill && $pass == $passs){
                echo ' Email Salah !!!';
                return false;
            } if ($email == $emaill && $pass != $passs){
                echo ' Password Salah !!!';
                return false;
            } else{
                echo ' Email dan Password Salah !!!';
                return false;
            }
        } else {
            echo ' Data Kosong !!!';
        }
    }
}

?>