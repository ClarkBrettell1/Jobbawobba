<?php if(! empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<form method="post">
    <div>
        <label for="title" class="form-label">Title</label>
        <input name="title" id="title" type="text" placeholder="Article Title" value="<?= htmlspecialchars($title); ?>">
    </div>
    <div>
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" cols="40" rows="4" placeholder="Article Content"><?= htmlspecialchars($content); ?></textarea>
    </div>
    <div>
        <label for="published_at"  class="form-label" value="<?= htmlspecialchars($published_at);?>">publication date and time</label>
        <input type="date" name="published_at" id="published_at">
    </div>
    
    <button class="btn-lg btn-info">SAVE</button>
</form>