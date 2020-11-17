<?php include 'inc/header.php'; ?>

<div class="card text-center w-50 p-0 mx-auto my-2">
  <div class="card-header w-100">
      <h1><?php echo $job->job_title; ?></h1>
  </div>
  <div class="card-body">
      <h4 class="text-muted"><?php echo $job->company; ?></h4>
    <h5 class="card-title"> Salary: <?php echo $job->salary;?></h5>
    <h5 > Location: <?php echo $job->location; ?></h5>
    <p class="card-text px-5 py-1"> <?php echo $job->description; ?></p>
    <hr>
    <a href="mailto:<?php echo $job->contact_email;?>" class="btn btn-primary">Apply Now</a>
  </div>
  <div class="card-footer text-muted">
  <small>Posted By: <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?> </small>
  </div>
</div>

<a class="btn-lg btn-primary mx-5" href="index.php">Go back</a>
<br>
<br>




<?php if(isset($_SESSION['loggedin']) && $_SESSION['roleid'] == 2) {
  ?><div class="well">
  <a class="btn-lg btn-default" href="edit.php?id=<?php echo $job->id;?>">Edit</a>
  <form action="job.php" method="post" style="display:inline;">
  <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
  <input type="submit" class="btn-lg btn-danger" value="Delete">
  </form>
  </div> <?php } 
  else { ?>
<?php } ?>

<?php include 'inc/footer.php'; ?>
