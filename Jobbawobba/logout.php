<?php include_once 'config/init.php'; ?>
<?php
$user = new User;


if(isset($_POST['logout'])){
    if($user->logout()){
        redirect('index', "Logged out", "success"); 
    } else{
        redirect('index', "Still logged in!", "error");
    }
    
}

$template = new Template('templates/frontpage.php');
echo $template;