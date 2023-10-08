<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proses Input</title>
</head>
<body>
    <?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
    ?>

    Username : <?php echo $username ?>
    Password : <?php echo $password ?>
</body>
</html>