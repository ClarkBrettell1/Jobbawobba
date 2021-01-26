<?php include 'includes/header.php' ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}
?>

<form method="post">
    <input name="username">
    <input name="password" type="password">
    <input type="color">
    <input type="range">
    <button>
        send
    </button>
</form>


<?php include 'includes/footer.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

<h1>Form</h1>



</body>
</html>