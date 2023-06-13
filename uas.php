<?php

echo 'Nama : Afiva Maylinda';

// Array data siswa untuk membuat KTP
$siswa = array(
    array('nama' => 'Ana', 'usia' => 15),
    array('nama' => 'Amel', 'usia' => 16),
    array('nama' => 'Eyin', 'usia' => 15),
    array('nama' => 'Zahra', 'usia' => 17)
);

// Perulangan untuk menampilkan data siswa
foreach ($siswa as $data) 
    $nama = $data['nama'];
    $usia = $data['usia'];

    // Percabangan berdasarkan usia siswa
    if ($usia > 16) {
        echo "$nama sudah cukup dewasa.";
    } elseif ($usia > 14) {
        echo "$nama memasuki masa remaja.";
    } else {
        echo "$nama masih dalam masa kanak-kanak.";
    }
    echo "<br>";

?>