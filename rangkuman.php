<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangkuman Materi Perulangan dalam PHP</title>
</head>
<body>

<?php
// Materi Rangkuman
$materi = [
    "Pembagian Perulangan",
    "Ada dua pembagian perulangan dalam pemrograman: Counted loop dan Uncounted loop.",
    "Jenis-jenis perulangan:",
    "- Perulangan For",
    "- Perulangan While",
    "- Perulangan Do/While",
    "- Perulangan Foreach",
    "Perulangan For:",
    "   - Termasuk dalam counted loop karena dapat menentukan jumlah perulangannya.",
    "   - Bentuk dasar perulangan for:",
    "        Veriabel $.i sebagai counter yang menghitung berapa kali ia akan mengulang.",
    "        nilai $ i = 0, perhitungan dimulai dari 0.",
    "        $ i < 10, perulangan akan mengulang sebanyak 10x.",
    "        $ i++ adalah nilai $ i akan ditambah 1 setiap kali melakukan perulangan.",
    "Perulangan While:",
    "   - Termasuk dalam uncounted loop.",
    "   - Digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya.",
    "   - Bentuk dasar perulangan while:",
    "        Selama nilai $ ulangi lebih kecil dari 10, perulangan akan terus berlangsung.",
    "        Increment nilai $ ulangi dengan $ ulangi++: Tambah 1 setiap pengulangan.",
    "Perulangan Do/While:",
    "   - Tergolong uncounted loop seperti while.",
    "   - Perbedaan dengan while terletak pada cara memulai pengulangan.",
    "   - Melakukan pengulangan 1 kali, lalu pengecekan kondisi. Sebaliknya dengan while.",
    "Perulangan Foreach:",
    "   - Digunakan khusus untuk mecetak array.",
    "   - Bentuk perulangan foreach:",
    "        Cetak setiap elemen array menggunakan sintaks: foreach ($ array as $ nilai).",
    "Perulangan Bersarang (Nested Loop):",
    "   - Merupakan perulangan di dalam perulangan.",
    "   - Dalam bahasa Inggris disebut nested loop.",
];

// Menampilkan Materi
echo "<h3>Salman Fariz</h3>";
echo "<ul>";
// Menampilkan Materi
echo "<h2>Rangkuman Materi Perulangan dalam PHP</h2>";
echo "<ul>";

foreach ($materi as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?>

</body>
</html>