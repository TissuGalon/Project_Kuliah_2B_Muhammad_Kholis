<!DOCTYPE html>
<html lang="en">
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Koneksi Database dengan mysqli_fetch_assoc</h1>
    <?php 
    $conn = mysqli_connect("localhost", "root", "","db_liga") or die("Koneksi Gagal");
    $hasil = mysqli_query($conn, "SELECT * FROM liga");
    while($row = mysqli_fetch_assoc($hasil)){
        echo "Liga" . $row['negara']; //array assosiatif
        echo " mempunyai " . $row['champion']; //array numeris
        echo " wakil di liga champion <br>";
    }
    ?>
</body>
</html>


