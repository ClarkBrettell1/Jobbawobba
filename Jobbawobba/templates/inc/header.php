<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>The Job Goblin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<nav class="navbar navbar-light bg-light shadow d-flex">
  <div class="container-fluid d-flex">
    <a class="navbar-brand d-flex" href="index.php">
      <img src="img/search.png" alt="" width="48" height="48">
      <h3 class="m-2"><?php echo SITE_TITLE;?></h3>
    </a>
    <div class="d-flex flex-row-reverse align-items-center">
    <a href="index.php" class="p-2">
      <img src="img/home.png" alt="" width="48px" height="48px">
    </a>
    <a href="create.php">Create a Job</a>
    </div>
  </div>
</nav>
<?php displayMessage(); ?>
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
        <label for="password">Contact Email</label>
        <input type="text" class="form-control" name="password">
    </div>
    <input type="submit" class="btn-info btn-lg p-2 m-4" value="Submit" name="submit">
</form>

<form style="background-color: #e0e0f6;" class="mx-auto my-5 w-75 p-5" action="login.php" method="post">
  <h2>Login</h2>    
<div class="form-group">
        <label for="emailid">Email</label>
        <input type="text" class="form-control" name="emailid">
        <label for="password">Contact Email</label>
        <input type="text" class="form-control" name="password">
    </div>
    <input type="submit" class="btn-info btn-lg p-2 m-4" value="Login" name="login">
</form> <?php } ?>