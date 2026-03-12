<?php
    include 'config.php';
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id= '$id'";
    $conn->query($query);
    // header("Location: homepage.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo($id);
    ?>
    <p>user deleted</p>
    <a href="homepage.php">Go back</a>
</body>
</html>