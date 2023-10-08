<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <?php 
     $nama = $_POST['nama'];
     $email = $_POST['email'];
     $komentar = $_POST['komentar'];
    ?>
    <h1>Data Buku Tamu</h1>
    <hr>
    Nama anda : <?php echo $nama ?>
    <br>
    Email : <?php echo $email ?>
    <br>
    Komentar : <textarea name="komentar" id="" cols="40" rows="5"><?php echo $komentar ?></textarea>
    <br>

</body>
</html>