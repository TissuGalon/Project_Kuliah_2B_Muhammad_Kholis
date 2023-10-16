<?php
// Matriks pertama
$matrix1 = [
    [1, 2],
    [3, 4]
];

// Matriks kedua
$matrix2 = [
    [5, 6],
    [7, 8]
];

// Fungsi untuk menambahkan dua matriks
function tambahMatriks($matriks1, $matriks2) {
    $hasil = array();

    for ($i = 0; $i < count($matriks1); $i++) {
        $baris = array();
        for ($j = 0; $j < count($matriks1[$i]); $j++) {
            $baris[] = $matriks1[$i][$j] + $matriks2[$i][$j];
        }
        $hasil[] = $baris;
    }

    return $hasil;
}

// Panggil fungsi untuk menambahkan matriks
$hasilPenjumlahan = tambahMatriks($matrix1, $matrix2);

// Tampilkan hasil penjumlahan matriks
echo "Matriks 1:\n";
foreach ($matrix1 as $baris) {
    echo implode(" ", $baris) . "\n";
}
echo "<br>";
echo "Matriks 2:\n";
foreach ($matrix2 as $baris) {
    echo implode(" ", $baris) . "\n";
}
echo "<br>";
echo "Hasil Penjumlahan Matriks:\n";
foreach ($hasilPenjumlahan as $baris) {
    echo implode(" ", $baris) . "\n";
}
?>
