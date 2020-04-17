<?php
   include ('../../FUNCTION/function.php');

   $id = $_POST['id_team'];
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
            move_uploaded_file($file_tmp, 'assets/img/team/'.$nama_team_baru);

            $query = "UPDATE team SET nama_team = '$nama_team',prodi_team = '$prodi_team',
            kota_team = '$kota_team',foto_team = '$nama_team_baru'";
            $query .= "WHERE id_team = '$id'";
            $result = mysqli_query($connect, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
            }else {
                echo "<script> alert('Data berhasil diubah!');window.location='../team.php';</script>";
            }
        }else {
            echo "<script> alert ('Ekstensi gambar hanya bisa jpg dan png!');window.location='edit-team.php';</script>";
        }
   }else {
        $query = "UPDATE team SET nama_team = '$nama_team',prodi_team = '$prodi_team',
        kota_team = '$kota_team'";
        $query .= "WHERE id_team = '$id'";
        $result = mysqli_query($connect, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
        }else {
            echo "<script> alert('Data berhasil diubah!');window.location='../team.php';</script>";
        }
   }
?>