<?php
    
    /**
     * @return false|mysqli
     *
     *
     */
    
    function getDB(){
        $db_host = "localhost:3307";
        $db_name = "cms";
        $db_user = "cms_www";
        $db_pass = "kZGAaYZjbxAF4SaP";
    
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
        if( mysqli_connect_error()){
            echo mysqli_connect_error();
            exit;
        }
        
        return $conn;
    
    }
    
