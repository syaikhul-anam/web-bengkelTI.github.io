<?php
   include ('../../FUNCTION/function.php');
?>
<?php

   $nama_team = $_POST['nama_team'];
   $prodi_team = $_POST['prodi_team'];
   $kota_team = $_POST['kota_team'];
   $foto_team = $_FILES['foto_team']['name'];

   if($foto_team != "") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg','jfif');
        $x = explode('.',$foto_team);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto_team']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_team_baru = $angka_acak.'-'.$foto_team;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp,'../assets/img/team/'.$nama_team_baru);

            $query = "INSERT INTO team (nama_team, prodi_team, kota_team, foto_team) VALUES ('$nama_team',
            '$prodi_team','$kota_team','$foto_team')";
            $result = mysqli_query($connect, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
            }else {
                echo "<script> alert('Data berhasil ditambahkan!');window.location='../team.php';</script>";
            }
        }else {
            echo "<script> alert ('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah-team.php';</script>";
        }
   }else {
        $query = "INSERT INTO team (nama_team, prodi_team, kota_team) VALUES ('$nama_team',
        '$prodi_team','$kota_team')";
        $result = mysqli_query($connect, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
        }else {
            echo "<script> alert('Data berhasil ditambahkan!');window.location='../team.php';</script>";
        }
   }
?>