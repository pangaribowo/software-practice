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

// Set nilai awal berat badan dan tinggi badan
$berat_badan = '';
$tinggi_badan = '';
$bmi = '';

// Cek apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai berat badan dan tinggi badan dari formulir
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];

    // Hitung BMI
    $bmi = hitungBMI($berat_badan, $tinggi_badan);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
</head>
<body>
    <h2>Kalkulator BMI</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="berat_badan">Berat Badan (kg): </label>
        <input type="number" name="berat_badan" id="berat_badan" value="<?php echo $berat_badan; ?>" required><br><br>
        <label for="tinggi_badan">Tinggi Badan (cm): </label>
        <input type="number" name="tinggi_badan" id="tinggi_badan" value="<?php echo $tinggi_badan; ?>" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    // Tampilkan hasil jika sudah dihitung
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Hasil</h3>";
        echo "Berat Badan: $berat_badan kg<br>";
        echo "Tinggi Badan: $tinggi_badan cm<br>";
        echo "BMI: " . number_format($bmi, 2); // Menampilkan BMI dengan 2 angka di belakang koma
    }
    ?>
</body>
</html>
