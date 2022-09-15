<?php

if(!$_POST)

$siswa = [
    [
        "foto" => "OKAYU.jpg",
        "nama" => "Ach Satria"
    ],
    [
        "foto" => "aqua.jpg",
        "nama" => "Kinnaras"
    ],
    [
        "foto" => "wingman.jpg",
        "nama" => "Bagas AP"
    ],
    [
        "foto" => "okayukopel.jpg",
        "nama" => "Zulfikar"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Data Siswa (siswa)</h1>
</head>
<body>
    <table border = "1" cellspacing = "1" cellspadding = "10" width="40%">
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>

        <?php foreach ($siswa as $id => $value): ?> 
        <tr align = "center">
            <td><?=$id + 1?></td>
            <td><img src="<?=$value["foto"]?>" alt="" width="100px" height="100px"></td>
            <td><?=$value["nama"] ?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>