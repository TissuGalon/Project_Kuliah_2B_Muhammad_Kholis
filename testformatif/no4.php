<?php
// Fungsi untuk mencari nilai maksimum dari tiga nilai
function cariNilaiMaksimum($nilai1, $nilai2, $nilai3) {
    $maksimum = $nilai1;

    if ($nilai2 > $maksimum) {
        $maksimum = $nilai2;
    }

    if ($nilai3 > $maksimum) {
        $maksimum = $nilai3;
    }

    return $maksimum;
}

// Nilai-nilai yang akan dicari maksimumnya
$nilai1 = 10;
$nilai2 = 15;
$nilai3 = 5;

// Memanggil fungsi untuk mencari nilai maksimum
$hasil = cariNilaiMaksimum($nilai1, $nilai2, $nilai3);

// Menampilkan hasil
echo "Nilai maksimum dari $nilai1, $nilai2, dan $nilai3 adalah: $hasil";
?>


