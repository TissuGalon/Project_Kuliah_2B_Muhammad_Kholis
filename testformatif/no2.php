<?php
// Fungsi untuk mengisi celah-celah kosong pada tes a
function tesA($n) {
    $result = array();
    $current = 4;
    for ($i = 1; $i <= $n; $i++) {
        $result[] = $current;
        $current += $i;
    }
    return $result;
}

// Fungsi untuk mengisi celah-celah kosong pada tes b
function tesB($n) {
    $result = array();
    $current = 223;
    for ($i = 1; $i <= $n; $i++) {
        $result[] = $current;
        $current -= $i;
    }
    return $result;
}

// Fungsi untuk mengisi celah-celah kosong pada tes c
function tesC($n) {
    $result = array();
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $result[] = $i / 2;
        } else {
            $result[] = $i + 7;
        }
    }
    return $result;
}

// Tes A
$tesA_result = tesA(8);
echo "Tes A: " . implode(" ", $tesA_result) . "\n";
echo "<br>";
// Tes B
$tesB_result = tesB(4);
echo "Tes B: " . implode(" ", $tesB_result) . "\n";
echo "<br>";
// Tes C
$tesC_result = tesC(7);
echo "Tes C: " . implode(" ", $tesC_result) . "\n";
?>
