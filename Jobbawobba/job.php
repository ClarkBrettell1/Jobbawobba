<?php include_once 'config/init.php'; ?>
<?php
error_reporting(E_ALL|E_STRICT); 
$job = new Job;

if(isset($_POST['del_id'])){
     $del_id = $_POST['del_id'];
     if($job->delete($del_id)){
            redirect('index.php', 'job deleted', 'success');
     }else { redirect('index.php', "job not deleted" , "error");

     }
}

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);



echo $template;