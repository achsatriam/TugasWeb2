<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" cellspacing = "1" cellspadding = "10" width="50%">

        <tr align="center">
            <td rowspan = "3">
                <img src="<?= $_GET["foto"]?>" alt="" width="300px" height="300px">
            </td>
            <td>Nama</td>
            <td><?= $_GET["nama"] ?></td>
       </tr>
        <tr align="center">
            <td>Alamat</td>
            <td><?= $_GET["alamat"]?></td>
        </tr>
        <tr align="center">
            <td>No.Telepon</td>
            <td><?= $_GET["telepon"]?></td>
        </tr>
    </table>
 
    <a href="http://localhost/belajarphp/admin.php"><button>Kembali</button></td>
</body>
</html>