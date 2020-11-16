<?php include 'inc/header.php'; ?>
<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
  ?> <div>Welcome to the Job Goblin</div>  <?php } 
  else { ?>
<form style="background-color: #F0C278;" class="mx-auto my-5 w-75 p-5" action="register.php" method="post">
  <h2>Sign Up</h2>    
<div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
        <label for="emailid">Email</label>
        <input type="text" class="form-control" name="emailid">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password">
    </div>
    <input type="submit" class="btn-info btn-lg p-2 m-4" value="Submit" name="submit">
</form>

<form style="background-color: #e0e0f6;" class="mx-auto my-5 w-75 p-5" action="login.php" method="post">
  <h2>Login</h2>    
<div class="form-group">
        <label for="emailid">Email</label>
        <input type="text" class="form-control" name="emailid">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password">
    </div>
    <input type="submit" class="btn-info btn-lg p-2 m-4" value="Login" name="login">
</form> <?php } ?>
<div class="jumbotron jumbotron-fluid shadow jum">
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
    <input type="submit" class="btn btn-lg btn-info" value="FIND">
    </form>
  </div>
</div>

<h3 class="text-center"><?php echo $title; ?></h3>
<div class="d-flex flex-wrap w-75 mx-auto">
<?php foreach($jobs as $job): ?>
<div class="card m-4 shadow" style="width: 360px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $job->job_title; ?></h5>
    <p class="card-text"><?php echo $job->description; ?></p>
    <a href="job.php?id=<?php echo $job->id;?>" class="btn btn-primary">View More</a>
  </div>
</div>
<?php endforeach; ?>
</div>

<?php include 'inc/footer.php'; ?>