<?php 
$cari = $_GET['cari'];
$conn = mysqli_connect("localhost", "root", "", "db_bukutamu");
$hasil = mysqli_query($conn, "SELECT * FROM bukutamu WHERE nama like '%$cari%'");
$jumlah = mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while($baris = mysqli_fetch_array($hasil)){
    echo "Nama : ";
    echo $baris[0];
    echo "Email : ";
    echo $baris[1];
    echo "Komentar : ";
    echo $baris[2];
    echo "<br>";
}
?>


