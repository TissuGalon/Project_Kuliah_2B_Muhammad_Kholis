<!DOCTYPE html>
<html lang="en">

<?php include 'koneksi.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>n0 7</title>
    <style>
        ol {
            list-style: none;
            /* Remove the default numbering */
            counter-reset: item;
            /* Reset the counter for the list items */
        }

        li {
            counter-increment: item;
            /* Increment the counter for each list item */
        }

        li::before {
            content: "";
            /* Remove the default numbering content */
        }
    </style>
</head>

<body>
    <h1>Form Registrasi Mahasiswa Politeknik Negeri Lhokseumawe</h1>

    <form action="no7.php" method="GET">
        <ol>
            <li>
                <label for="nim">NIM</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="nim" name="nim" required>
            </li>
            <li>
                <label for="nama">NAMA</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="nama" name="nama" required>
            </li>
            <li>
                <label>JENIS KELAMIN</label>
                <br>
                <input type="radio" id="laki" name="jk" value="Laki Laki" required>
                <label for="laki">Laki Laki</label>
                <input type="radio" id="perempuan" name="jk" value="Perempuan" required>
                <label for="perempuan">Perempuan</label>
            </li>
            <li>
                <label for="jurusan">JURUSAN</label>
                &nbsp;&nbsp;
                <select id="jurusan" name="jurusan" required>
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select>
            </li>
            <li>
                <label for="alamat">ALAMAT</label>
                &nbsp;&nbsp;&nbsp;
                <input type="text" id="alamat" name="alamat" required>
            </li>
            <li>
                <label for="agama">AGAMA</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="agama" name="agama" required>
                    <option value="ISLAM">ISLAM</option>
                    <option value="KRISTEN">KRISTEN</option>
                    <option value="HINDU">HINDU</option>
                    <option value="BUDHA">BUDHA</option>
                </select>
            </li>
            <li>
                <label for="email">EMAIL</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="email" name="email" required>
            </li>
        </ol>
        <br>
        <input type="submit" value="SIMPAN" name="insert">
        <a href="datano7.php">LIHAT DATA</a>

    </form>

    <?php
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        $nama = $_GET['nama'];
        $jk = $_GET['jk'];
        $jurusan = $_GET['jurusan'];
        $alamat = $_GET['alamat'];
        $agama = $_GET['agama'];
        $email = $_GET['email'];

        $query = mysqli_query($conn, "INSERT INTO mahasiswa (nim,nama,jk,jurusan,alamat,agama,email) VALUES ('$nim','$nama','$jk','$jurusan','$alamat','$agama','$email')");
        echo "<script>alert('Data berhasil diinput'); window.location.href = 'no7.php';</script>";
    }
    ?>


</body>

</html>