<?php include_once 'config/init.php'; ?>
<?php
error_reporting(E_ALL|E_STRICT); 
$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->create($data)){
        redirect('index', "Your job was created", "success");

      
    } else{
        redirect('index', "Something went wrong", "error");

    }
    
}


$template = new Template('templates/job-create.php');
$template->job = $job->getJob($job_id);
$template->categories = $job->getAllCategories();

echo $template;
