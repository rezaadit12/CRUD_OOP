<?php
include 'function.php';
$db = new database();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan 1</title>
</head>
<body>


<center>
    <br><br><table border="1" cellspacing="1" cellpadding="10">
        <tr>
            <th colspan="10"><h2>Data Nilai Siswa</h2></th>
        </tr>
        <tr>
            <th>Nis</th>
            <th>Inggris</th>
            <th>Ngoding</th>
            <th>Matematika</th>
            <th>Agama</th>
            <th>Sejarah</th>
            <th>Indonesia</th>
            <th>Total</th>
            <th>Rata</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($db->tampil_data() as $a):?>
            <?php
                $total = $a["Inggris"] + $a["Ngoding"] + $a["Matematika"] + $a["Agama"] + $a["Sejarah"] + $a["Indonesia"];
                $rata = $total / 6;
            ?>
            <tr>
                <td><?= $a["nis"]?></td>
                <td><?= $a["Inggris"]?></td>
                <td><?= $a["Ngoding"]?></td>
                <td><?= $a["Matematika"]?></td>
                <td><?= $a["Agama"]?></td>
                <td><?= $a["Sejarah"]?></td>
                <td><?= $a["Indonesia"]?></td>
                <td><?= $total?></td>
                <td><?= number_format($rata, 2)?></td>
                <td>
                    <a href="proses.php?nis=<?php echo $a['nis']; ?>&opsi=hapus">Hapus</a> |
                    <a href="edit.php?nis=<?php echo $a['nis']; ?>">Ubah</a>
                </td>
            </tr>
        <?php endforeach;?>
            <tr>
                <td colspan="10"><center><a href="index.php">Input Ulang</a></td></center> 
            </tr>
    </table>
</center>
</body>
</html>
