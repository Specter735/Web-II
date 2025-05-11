<!DOCTYPE html>
<html>
<head>
    <title>PRAK403</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: max-content;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px 10px;
        }
        .revisi {
            background-color: red;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .tidak-revisi {
            background-color: green;
            color: white;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$data = [
    "Ridho" => [
        ["matkul" => "Pemrograman I", "sks" => 2],
        ["matkul" => "Praktikum Pemrograman I", "sks" => 1],
        ["matkul" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["matkul" => "Arsitektur Komputer", "sks" => 3]
    ],
    "Ratna" => [
        ["matkul" => "Basis Data I", "sks" => 2],
        ["matkul" => "Praktikum Basis Data I", "sks" => 1],
        ["matkul" => "Kalkulus", "sks" => 3]
    ],
    "Tono" => [
        ["matkul" => "Rekayasa Perangkat Lunak", "sks" => 3],
        ["matkul" => "Analisis dan Perancangan Sistem", "sks" => 3],
        ["matkul" => "Komputasi Awan", "sks" => 3],
        ["matkul" => "Kecerdasan Bisnis", "sks" => 3]
    ]
];

echo "<table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>";

$no = 1;
foreach ($data as $nama => $matkuls) {
    $total_sks = array_sum(array_column($matkuls, 'sks'));
    $keterangan = $total_sks > 7 ? "Tidak Revisi" : "Revisi KRS";
    $class = $keterangan == "Revisi KRS" ? "revisi" : "tidak-revisi";
    $rowspan = count($matkuls);

    foreach ($matkuls as $index => $mk) {
        echo "<tr>";
        if ($index == 0) {
            echo "<td rowspan='$rowspan'>$no</td>";
            echo "<td rowspan='$rowspan'>$nama</td>";
        }
        echo "<td>{$mk['matkul']}</td>";
        echo "<td>{$mk['sks']}</td>";
        if ($index == 0) {
            echo "<td rowspan='$rowspan'>$total_sks</td>";
            echo "<td rowspan='$rowspan' class='$class'>$keterangan</td>";
        }
        echo "</tr>";
    }
    $no++;
}

echo "</table>";
?>

</body>
</html>
