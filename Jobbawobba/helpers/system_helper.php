<?php
function redirect($page , $message , $message_type){
    if (is_string($page)){
        $_SESSION['Location:'] = $page;
    } else {
    
        $_SESSION['Location:'] = $page;
    }
    
    if($message != NULL) {
        $_SESSION['message'] = $message;
    }    

    if($message_type != NULL){
        $_SESSION['message_type'] = $message_type;
    }
    header("Location:". $_SESSION['Location:']);
    die();
}

function displayMessage() {
    if(!empty($_SESSION['message'])) {
         $message = $_SESSION['message'];

        if(!empty($_SESSION['message_type'])){

            $message_type = $_SESSION['message_type'];

            if ($message_type == 'error'){
                echo '<div class="alert alert-danger w-50 mx-auto">' . $message . "</div>";
            }else {
                echo '<div class="alert alert-success w-50 mx-auto">' . $message . "</div>";
            }
        }
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}