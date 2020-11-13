<?php include 'inc/header.php'; ?>
<h2 class="page-header text-center">Edit Job Listing</h2>
<form style="background-color: #ef6824;" class="mx-auto w-75 p-5" action="edit.php?id=<?php echo $job->id->id; ?>" method="post">
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
        <label for="description">Description</label>
        <textarea class="form-control" name="description">
        </textarea>
        <label for="location">Location</label>
        <input type="text" class="form-control" name="location">
        <label for="salary">Salary</label>
        <input type="text" class="form-control" name="salary">
        <label for="contact_user">Contact User</label>
        <input type="text" class="form-control" name="contact_user">
        <label for="contact_email">Contact Email</label>
        <input type="text" class="form-control" name="contact_email">
    </div>
    <input type="submit" class="btn-info btn-lg p-2 m-4" value="Submit" name="submit">
</form>
<?php include 'inc/footer.php'; ?>
