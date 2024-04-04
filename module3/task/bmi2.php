<?php
// Fungsi untuk menghitung BMI
function hitungBMI($berat_badan, $tinggi_badan) {
    // Konversi tinggi badan dari cm ke meter
    $tinggi_badan_meter = $tinggi_badan / 100;

    // Hitung BMI menggunakan rumus: berat_badan / (tinggi_badan * tinggi_badan)
    $bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);

    // Kembalikan nilai BMI
    return $bmi;
}

// Berat badan dalam kilogram
$berat_badan = 70;

// Tinggi badan dalam centimeter
$tinggi_badan = 170;

// Hitung BMI
$bmi = hitungBMI($berat_badan, $tinggi_badan);

// Tampilkan hasil
echo "Berat Badan: $berat_badan kg<br>";
echo "Tinggi Badan: $tinggi_badan cm<br>";
echo "BMI: " . number_format($bmi, 2); // Menampilkan BMI dengan 2 angka di belakang koma
?>
