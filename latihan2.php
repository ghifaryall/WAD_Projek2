<!DOCTYPE html>
<html>
    <head>
        <title>Penjumlahan dua angka</title>
        <style>
        
    </style>
    </head>
    <body>
        <div class="grid text-center">
        <h1>Perhitungan</h1>
        </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukan angka Pertama <input type="number" name="angka1"><br>
        Operasi: 
        <select name="operasi">
            <option value="tambah">Pertambahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br>
        Masukan angka Kedua: <input type="number" name="angka2"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operasi = $_POST["operasi"];
        
        $hasil = 0;
        
        switch ($operasi) {
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Tidak dapat membagi oleh nol.";
                }
                break;
        }
        
        echo "Hasil: " . $hasil;
    }
    ?>
</html>