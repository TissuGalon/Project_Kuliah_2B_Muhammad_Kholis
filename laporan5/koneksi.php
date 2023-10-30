<!DOCTYPE html>
<html lang="en">
<head>
    <title>Koneksi Database ke MySQL</title>
</head>
<body>
    <h1>Demo koneksi database MySQL</h1>
    <?php 
    $conn = mysqli_connect("localhost", "root", "");
    if($conn){
        echo "Server terkoneksi";
    }else{
        echo "Server tidak terkoneksi";
    }
     ?>
</body>
</html>


