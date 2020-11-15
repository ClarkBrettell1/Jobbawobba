<?php include_once 'config/init.php'; ?>
<?php
$user = new User;
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if(isset($_POST['submit'])){
    $data = array();
    $data['username'] = $_POST['username'];
    $data['emailid'] = $_POST['emailid'];
    $data['password'] = $_POST['password'];


    if($user->createUser($data)){
        redirect('index', "Your job has created", "success");
    } else{
        redirect('index', "Something went wrong", "error");
    }
    
}

$template = new Template('templates/frontpage.php');

echo $template;
