<?php
    $day = date('l');
    switch($day){
        case "Sunday": 
            echo "Pada hari Minggu<br>";
            break;
        case "Monday": 
            echo "Pada hari Senin<br>";
            break;
        case "Tuesday": 
            echo "Pada hari Selasa<br>";
            break;
        case "Wednesday": 
            echo "Pada hari Rabu<br>";
            break;
        case "Thursday": 
            echo "Pada hari Kamis<br>";
            break;
        case "Friday": 
            echo "Pada hari Jum'at<br>";
            break;
        default: 
            echo "Pada hari Sabtu<br>";
            break;
    }

    $nama = "Cah Ayu";
    $NIM = "005410247";
    $nilai_tugas = 78;
    $nilai_uts = 65;
    $nilai_uas = 80;
    $nilai_akhir = (0.4 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.3 * $nilai_uas);

    if ($nilai_akhir >= 80) {
        $grade = "A";
    } elseif ($nilai_akhir >= 65) {
        $grade = "B";
    } elseif ($nilai_akhir >= 55) {
        $grade = "C";
    } elseif ($nilai_akhir >= 45) { // Perbaikan: Rubah batas nilai untuk grade D
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo "Nilai dari Mahasiswa <hr><pre>";
    echo "NIM        : " . $NIM . "<br>";
    echo "Nama       : " . $nama . "<br>";
    echo "Nilai Tugas: " . $nilai_tugas . "<br>";
    echo "Nilai Uts  : " . $nilai_uts . "<br>";
    echo "Nilai Uas  : " . $nilai_uas . "<br>";
    echo "Nilai Akhir: " . $nilai_akhir . "<br>";
    echo "Grade Nilai: " . $grade . "<br>";
?>
