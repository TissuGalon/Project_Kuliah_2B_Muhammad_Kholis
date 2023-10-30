<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simpan Buku Tamu</title>
</head>
<body>
    <h1>Simpan Buku tamu MySQL</h1>
    <?php 
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $conn = mysqli_connect("localhost", "root", "", "db_bukutamu") or die("KOneksi Gagal");
    echo "Nama      : $nama <br>";
    echo "Email      : $email <br>";
    echo "Komentar      : $komentar <br>";
    $hasil = mysqli_query($conn, "INSERT INTO bukutamu (nama,email, komentar) VALUES ('$nama', '$email', '$komentar')");
    echo "Simpan bukutamu berhasil dilakukan";

    ?>
</body>
</html>


