<?php
    include 'config.php';
    $query = "SELECT * FROM student";
    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Age</th>
        </tr> 
        
        <?php
            while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td>
                <?php echo($row['id']); ?>
            </td>

            <td>
                <?php echo($row['name']); ?>
            </td>

            <td>
                <?php echo($row['email']); ?>
            </td>

            <td>
                <?php echo($row['age']); ?>
            </td>
        </tr>

        <?php
            endwhile;
        ?>

    </table>

    <a href="homepage.php">Go Home</a>
    
</body>
</html>