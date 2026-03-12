<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action - where to send -->
    <!-- method - how to send - GET POST -->
    <!-- GET passes through url -->
    <form action="" method="GET">
        <label for="">Name</label>
        <input type="text" placeholder="Enter your name" name="name">
        <br><br>
        <label for="">Email</label>
        <input type="text" placeholder="Enter your email" name="email">
        <br><br>
        <label for="">Age</label>
        <input type="text" placeholder="Enter your age" name="age">

        <br><br>
        <button type="submit" name="submit">Create</button>

        <a href="homepage.php">Go Home</a>
    </form>
</body>
</html>

<?php
    include 'config.php';
    if(isset($_GET['submit'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        $query = "INSERT INTO student (name, email, age) VALUES ('$name', '$email', '$age')";
        $conn->query($query);
    }

?>

