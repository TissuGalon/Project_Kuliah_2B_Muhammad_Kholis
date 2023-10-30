<?php include 'koneksi.php'; ?>

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
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Email</th>
        </tr>

        <?php 
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row['nim'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['jk'] ?></td>
            <td><?php echo $row['jurusan'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['agama'] ?></td>
            <td><?php echo $row['email'] ?></td>
        </tr>
        <?php } ?>

    </table>

    <button style="margin:10px;" onclick="window.location.href = 'no7.php'">Kembali</button>
</body>
</html>