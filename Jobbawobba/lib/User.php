<?php
class User {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        
    }

    function __destruct() {  
              
    }  

    public function getUser($user_id) {
        $this->db->query("SELECT * FROM users WHERE id = :user_id");
        $this->db->bind(":user_id" , $user_id);

        $row = $this->db->single();

        return $row;
    }

    public function createUser($data) {
        $this->db->query("INSERT INTO users(username, emailid, password)
        
                        VALUES(:username, :emailid, :password )");

                $this->db->bind(':username' , $data['username']);
                $this->db->bind(':emailid' , $data['emailid']);
                $this->db->bind(':password' , md5($data['password']));
      
                if($this->db->execute()){
                    return true;
                }else {
                    return false;
                }
    }
    public function login($emailid, $password){  
        $this->db->query("SELECT * FROM users WHERE emailid = '$emailid' AND password = '$password'");        
        $row = $this->db->single();
        $vars =  get_object_vars($row);
        if ($row)   
        {      
            $_SESSION['loggedin'] = '1';
            $_SESSION['username'] = $vars['username'];
            $_SESSION['email'] = $vars['emailid'];
            return TRUE;  
        }  
        else  
        {   $_SESSION['logggedin'] = '0'; 
            $_SESSION['username'] = $vars['username']; 
            $_SESSION['email'] = $vars['emailid']; 
            return FALSE;  
        }  
    } 
    public function logout(){
        session_destroy();
    }
}