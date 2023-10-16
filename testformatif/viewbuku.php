<?php
$conn = mysqli_connect("localhost", "root", "", "db_bukutamu");
if(!$conn){
    die("Koneksi Error");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
        </tr>

        <?php 
        $query = mysqli_query($conn, "SELECT * FROM bukutamu");
        while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['komentar'] ?></td>
        </tr>
        <?php } ?>

    </table>

    <button style="margin:10px;" onclick="window.location.href = 'no6.php'">Kembali</button>
</body>
</html>