<?php include_once 'config/init.php'; ?>
<?php
$user = new User;
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if(isset($_POST['login'])){
   $data = array();
   $emailid = $_POST['emailid'];
   $password = md5($_POST['password']);


    if($user->login($emailid, $password)){
        redirect('index', "Logged in", "success"); 
    } else{
        redirect('index', "Something wrong!", "error");
    }
    
}

$template = new Template('templates/frontpage.php');

echo $template;