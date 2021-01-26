<?php
    
    require 'includes/database.php';
    require 'includes/article.php';
    
    $errors = [];
    $title = '';
    $content = '';
    $published_at = null;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	
        $title = $_POST['title'];
        $content = $_POST['content'];
        $published_at = $_POST['published_at'];
        
        $errors = validateArticle($title, $content, $published_at);
        
        
        if (empty($errors)) {
            $conn = getDB();
            
            $sql = "INSERT INTO article (title, content, published_at)
				VALUES('" . $_POST['title'] . "','" . $_POST['content'] . "','" . $_POST['published_at'] . "')";
            
            $results = mysqli_query($conn, $sql);
            
            if ($results === false) {
                echo mysqli_error($conn);
            } else {
                $id = mysqli_insert_id($conn);
                
                
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                    $protocol = 'https';
                } else {
                    $protocol = 'http';
                }
                
                header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . '/php' . "/article.php?id=$id");
                exit;
            }
        }
        
    }
?>

<?php require 'includes/header.php'; ?>

<h2>New Article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require 'includes/footer.php'; ?>
