<?php include 'inc/header.php'; ?>
<h2 class="page-header">Create Job Listing</h2>
<form action="create.php" method="post">
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" name="company">
        <label for="category">Category</label>
        <select class="form-control" name="category">
        <?php foreach($categories as $category): ?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name?></option>
      <?php endforeach; ?>
        </select>
        <label for="job_title">Job Title</label>
        <input type="text" class="form-control" name="job_title">
        <label for="description">description</label>
        <input type="text" class="form-control" name="company">
        <label for="company">Company</label>
        <input type="text" class="form-control" name="company">
    </div>
</form>
<?php include 'inc/footer.php'; ?>
