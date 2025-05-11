<!DOCTYPE html>
<html>
<head>
    <title>PRak402</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: grey;
        }
    </style>
</head>
<body>

<?php
$data = [
    [
        "nama" => "Andi",
        "nim" => "2101001",
        "uts" => 87,
        "uas" => 65
    ],
    [
        "nama" => "Budi",
        "nim" => "2101002",
        "uts" => 76,
        "uas" => 79
    ],
    [
        "nama" => "Tono",
        "nim" => "2101003",
        "uts" => 50,
        "uas" => 41
    ],
    [
        "nama" => "Jessica",
        "nim" => "2101004",
        "uts" => 60,
        "uas" => 75
    ]
];

function hitungNilaiAkhir($uts, $uas) {
    return round(($uts * 0.4) + ($uas * 0.6), 1);
}

function konversiHuruf($nilai) {
    if ($nilai >= 80) return 'A';
    elseif ($nilai >= 70) return 'B';
    elseif ($nilai >= 60) return 'C';
    elseif ($nilai >= 50) return 'D';
    else return 'E';
}

echo "<table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>";

foreach ($data as $mhs) {
    $nilai_akhir = hitungNilaiAkhir($mhs["uts"], $mhs["uas"]);
    $huruf = konversiHuruf($nilai_akhir);

    echo "<tr>
            <td>{$mhs['nama']}</td>
            <td>{$mhs['nim']}</td>
            <td>{$mhs['uts']}</td>
            <td>{$mhs['uas']}</td>
            <td>$nilai_akhir</td>
            <td>$huruf</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>
