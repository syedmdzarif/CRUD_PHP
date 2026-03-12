<?php
    include 'config.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM student WHERE id='$id'";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Name</label>
        <input type="text" value=" <?php echo($data['name']) ?> " name="name">
        <br>
        <label for="">Email</label>
        <input type="text" value=" <?php echo($data['email']) ?> " name="email">
        <br>
        <label for="">Age</label>
        <input type="text" value=" <?php echo($data['age']) ?> " name="age">
        <br><br>
        <button type="submit" name="submit">Upate</button>
    </form>
</body>
</html>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $query = "UPDATE student SET name='$name', email='$email', age='$age' WHERE id = '$id'";
        $conn->query($query);

        header("Location: homepage.php");
    }
?>