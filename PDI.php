<?php

$data = "Ini adalah data yang akan disimpan dalam file teks.";

$file = "data.txt";

$sukses = file_put_contents($file, $data);

if ($sukses !== false) {
    echo "Data berhasil disimpan dalam file $file";
} else {
    echo "Terjadi kesalahan saat menyimpan data ke file $file";
}
?>