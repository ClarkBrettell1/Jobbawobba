<?php include 'inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Find a Job</h1>
    <form method="GET" action="index.php">
    <select name="category" class="form-control">
      <option value="0">Choose Category</option>
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name?></option>
      <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" class="btn btn-lg btn-success" value="FIND">
    </form>
  </div>
</div>

<div class="d-flex">
  <h3><?php echo $title; ?></h3>
<?php foreach($jobs as $job): ?>
<div class="card m-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $job->job_title; ?></h5>
    <p class="card-text"><?php echo $job->description; ?></p>
    <a href="job.php?id=<?php echo $job->id;?>" class="btn btn-primary">View More</a>
  </div>
</div>
<?php endforeach; ?>
</div>

<a href="https://www.youtube.com/watch?v=LEkjrQMmIK0">49 mins</a>


<?php include 'inc/footer.php'; ?>