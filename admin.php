<?php

if(!$_POST)

$siswa = [
    [
        "foto" => "OKAYU.jpg",
        "nama" => "Ach Satria",
        "alamat" => "Jambangan",
        "telepon" => "0881026006951"
    ],
    [
        "foto" => "aqua.jpg",
        "nama" => "Kinnaras",
        "alamat" => "Ketintang",
        "telepon" => "0880133290039"
    ],
    [
        "foto" => "wingman.jpg",
        "nama" => "Bagas AP",
        "alamat" => "",
        "telepon" => "08512310300392"
    ],
    [
        "foto" => "okayukopel.jpg",
        "nama" => "Zulfikar",
        "alamat" => "jambangan",
        "telepon" => "08239012393029"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Data Siswa (admin)</h1>
</head>
<body>
    <table border = "1" cellspacing = "1" cellspadding = "10" width="40%">
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Aksi</th>

        <?php foreach ($siswa as $id => $value): ?> 
        <tr align = "center">
            <td><?= $id + 1 ?></td>
            <td><img src="<?=$value['foto'];?>" alt="" width="100px" height="100px"></td>
            <td><?=$value['nama']; ?></td>
            <td><a href="http://localhost/belajarphp/detail.php?nama=
            <?= $value['nama']; ?>
            &alamat=<?= $value['alamat'];?>
            &telepon=<?= $value['telepon'];?>
            &foto=<?= $value['foto'];?>
            "><button>Detail</button></a>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>