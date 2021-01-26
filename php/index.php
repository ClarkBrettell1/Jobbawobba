<?php
require 'includes/database.php';

	$conn = getDB();
    
    $sql = " SELECT * FROM article ORDER  BY published_at;";
    
    $results = mysqli_query($conn, $sql);
    
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }



?>

<?php require 'includes/header.php'; ?>

<a href="new-article.php">Add New Article</a>

    <?php if(empty($articles)): ?>
		<p>No Articles Found</p>
    
    <?php else: ?>
		<ul class="list-group-flush">
            <?php foreach ($articles as $article): ?>
				<li>
					<article>
						<h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
						<p><?=htmlspecialchars($article['content']); ?></p>
					</article>
				</li>
            <?php endforeach; ?>
		</ul>
    <?php endif; ?>

<?php require 'includes/footer.php'; ?>

