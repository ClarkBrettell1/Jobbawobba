<?php include 'inc/header.php'; ?>

<div class="card text-center w-50 p-0 mx-auto my-2">
  <div class="card-header w-100">
  <?php echo $job->job_title; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"> Salary: <?php echo utf8_encode($job->salary); ?></h5>
    <h5 > Location: <?php echo $job->location; ?></h5>
    <p class="card-text px-5 py-1"> <?php echo $job->description; ?></p>

    <a href="mailto:<?php echo $job->contact_email;?>" class="btn btn-primary">Apply now</a>
  </div>
  <div class="card-footer text-muted">
  <small>Posted By: <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?> </small>
  </div>
</div>



<?php include 'inc/footer.php'; ?>
