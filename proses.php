<?php 
include 'function.php';
$db = new database();
 
$aksi = $_GET['opsi'];
    if($aksi == "tambah"){
        $db->input($_POST['nis'],$_POST['mapel1'],$_POST['mapel2'],$_POST['mapel3'],$_POST['mapel4'],$_POST['mapel5'],$_POST['mapel6']);
        echo "<script>
                alert('Data Berhasil Di tambahkan');
                document.location.href = 'tampil2.php';
            </script>";
        
    } elseif($aksi == "hapus"){ 	
        $db->hapus($_GET['nis']);
        echo "<script>
                alert('Data Berhasil Di hapus');
                document.location.href = 'tampil2.php';
            </script>";
    }elseif($aksi == "update"){
        $db->update($_POST['nis'],$_POST['mapel1'],$_POST['mapel2'],$_POST['mapel3'],$_POST['mapel4'],$_POST['mapel5'],$_POST['mapel6']);
        echo "<script>
                alert('Data Berhasil Di Ubah');
                document.location.href = 'tampil2.php';
            </script>";
    }
?>