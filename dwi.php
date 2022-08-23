<?php
    echo "
          <marquee>
            <h1>Dwi Gita Anggraeni | XI RPL 2</h1>
          </marquee>
    ";

    //Variable
    $nama = "Dwi Gita Anggraeni";
    $kelas = "XI RPL 2";
    $nilai = 99.99;

    echo "Nama : " . $nama;
    echo "<br>";
    echo "Kelas : " . $kelas;
    echo "<br>";
    echo "Nilai : $nilai";

    // Operator  Jumlah
    echo "<br><br>";
    $angka1 = "5";
    $angka2 = "10";

    $hasil = $angka1 + $angka2;
    echo "Hasil dari pejumlahan : $hasil";

    // Rumus Luas Segi Tiga
    echo "<br><br>";
    $alas = 8;
    $tinggi = 20;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil rumus : $rumus";

    //Rumus Luas Lingkaran
    echo "<br><br>";
    $phi = 22/7;
    $r = 7;
    // luas ling : phi * r * r
    $lingkaran = $phi * $r *$r;

    echo "Hasil Luas Lingkaran : $lingkaran";

    //Rumus Volum Balok
    echo "<br><br>";
    // V =p x l x t;
    // p = 10, l = 5, t = 10;
    $p = 10;
    $l = 5;
    $t = 10;

    $volume = $p * $l * $t;

    echo "Hasil Volume Balok : $volume";

?>