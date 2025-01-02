<?php

class Flasher{
 
    public static function setFlash($message, $action, $type){
        $_SESSION["flash"] = [
            "message" => $message,
            "action" => $action,
            "type" => $type
        ];
    }
    public static function flash() {
        if( isset($_SESSION['flash']) ){
            $type = $_SESSION['flash']["type"];
            $message = $_SESSION['flash']["message"];
            $action = $_SESSION['flash']["action"];       
            
            echo <<<HTML
                <div class="alert alert-$type alert-dismissible fade show" role="alert">
                  Data <strong>$message</strong> $action.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            HTML;

            unset($_SESSION["flash"]);
        }  
    }
}

