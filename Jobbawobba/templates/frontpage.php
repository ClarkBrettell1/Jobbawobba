<?php include 'inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">JobbaWobba</h1>
    <p class="lead">Click below for the latest jobs</p>
    <button type="button" class="btn btn-primary btn-lg">Latest Jobs</button>
  </div>
</div>

<div class="d-flex">


<?php foreach($jobs as $job): ?>
<div class="card m-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $job->job_title; ?></h5>
    <p class="card-text"><?php echo $job->description; ?></p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
<?php endforeach; ?>
</div>

<a href="https://www.youtube.com/watch?v=LEkjrQMmIK0">49 mins</a>


<?php include 'inc/footer.php'; ?>