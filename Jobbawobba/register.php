<?php include_once 'config/init.php'; ?>
<?php
$user = new User;
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if(isset($_POST['submit'])){
    $data = array();
    $data['username'] = $_POST['username'];
    $data['emailid'] = $_POST['emailid'];
    $data['password'] = $_POST['password'];
    $data['roleid'] = 1;


    if($user->createUser($data)){
        redirect('index', "Your accound has been created", "success");
    } else{
        redirect('index', "Something went wrong", "error");
    }
    
}

$template = new Template('templates/frontpage.php');

echo $template;
