<?php
 include ('../FUNCTION/function.php');
?>

<?php
    if(isset($_POST['submit'])){

        $nama_admin = $_POST['nama_admin'];
        $kota_admin = $_POST['kota_admin'];
        $status_admin = $_POST['status_admin'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $query = "INSERT INTO user (nama_admin, kota_admin, status_admin, username,password) VALUES (' $nama_admin', 
        '$kota_admin','$status_admin','$username','$password')";
        $result = mysqli_query($connect, $query);

        if(!$result) {
            
            header('location: dasboard.php?tambah-admin-gagal');
        }else{
            echo "<script> alert('Data berhasil ditambahkan!');window.location='dasboard.php';</script>";
           
        }
    }else{
        echo'<script>window.history.back() </script>';
    }
?>