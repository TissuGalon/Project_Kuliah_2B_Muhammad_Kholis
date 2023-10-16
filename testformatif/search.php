<?php
$conn = mysqli_connect("localhost", "root", "", "db_bukutamu");
if (!$conn) {
    die("Koneksi Error");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <h1>Cari Data Buku</h1>

    <form action="" method="GET">
        <input type="text" name="search" required>
        <input type="submit" name="" id="">
    </form>

    <?php
    if (isset($_GET['search'])) {

        $search = $_GET['search'];
        $query = mysqli_query($conn, "SELECT * FROM bukutamu WHERE nama LIKE '%$search%'");
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {

            if (isset($_GET['search'])) { ?>

                <table border="2">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['nama'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <?php echo $row['komentar'] ?>
                            </td>
                        </tr>
                    <?php } ?>


                </table>

                <?php
            }

        } else {
            echo "Buku dengan nama " . $search . " Tidak Ditemukan!";
        }
    }


    ?>

    <br><button style="margin:10px;" onclick="window.location.href = 'no6.php'">Kembali</button>

</body>

</html>