<?php


class database{
    var $host = "localhost",
        $uname = "root",
        $pass = "",
        $dbName = "studikasus";

    var $conn;

    function __construct(){
        $this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->dbName);
    }

    function tampil_data(){
        $data = mysqli_query($this->conn,"SELECT * FROM studi");
        while($d = mysqli_fetch_assoc($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function hapus($nis){
		mysqli_query($this->conn, "DELETE FROM studi WHERE nis = '$nis' ");
	}


    function input($nis, $mapel1, $mapel2, $mapel3, $mapel4, $mapel5, $mapel6){

        mysqli_query($this->conn, "INSERT INTO studi VALUES('$nis', '$mapel1', '$mapel2', '$mapel3', '$mapel4' , '$mapel5', '$mapel6')");
    }

    function update($nis, $mapel1, $mapel2, $mapel3, $mapel4, $mapel5, $mapel6){
        mysqli_query($this->conn, "UPDATE studi SET 
                                                nis = $nis, 
                                                Inggris = $mapel1, 
                                                Ngoding = $mapel2, 
                                                Matematika = $mapel3, 
                                                Agama = $mapel4, 
                                                Sejarah = $mapel5, 
                                                Indonesia = $mapel6 
                                                WHERE nis = '$nis'");	
    }

    function edit($nis){
        $data = mysqli_query($this->conn, "SELECT * FROM studi WHERE nis= '$nis'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
}




?>