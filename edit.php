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
    <title>Halo!</title>
</head>

<body>
    <?php foreach($db->edit($_GET['nis']) as $data):?>
            <form action="proses.php?opsi=update" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="nis">Masukkan NIS : </label></td>
                        <td><input type="number" name="nis" id="nis" value="<?php echo $data["nis"]; ?>"><br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel1">Masukkan Nilai Inggris : </label></td>
                        <td><input type="number" name="mapel1" id="mapel1" value="<?php echo $data["Inggris"]; ?>"><br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel2">Masukkan Nilai Ngoding : </label></td>
                        <td><input type="number" name="mapel2" id="mapel2" value="<?php echo $data["Ngoding"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel3">Masukkan Nilai Matematika : </label></td>
                        <td><input type="number" name="mapel3" id="mapel3" value="<?php echo $data["Matematika"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel4">Masukkan Nilai Agama : </label></td>
                        <td><input type="number" name="mapel4" id="mapel4" value="<?php echo $data["Agama"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel5">Masukkan Nilai Sejarah : </label></td>
                        <td><input type="number" name="mapel5" id="mapel5" value="<?php echo $data["Sejarah"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel6">Masukkan Nilai Indonesia : </label></td>
                        <td><input type="number" name="mapel6" id="mapel6" value="<?php echo $data["Indonesia"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="submit">Kirimkan data</button></td>
                        <td><button type="hapus" name="hapus">hapus</button></td>
                    </tr>
                </table>
            </form>
   <?php endforeach; ?>
</body>

</html>