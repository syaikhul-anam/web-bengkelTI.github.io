<?php
 include ('../FUNCTION/function.php');
?>

<?php
    if(isset($_POST['submit'])){

        $nama_tabel = $_POST['nama_tabel'];
        $email_tabel = $_POST['email_tabel'];
        $ket_tabel = $_POST['ket_tabel'];

        $query = "INSERT INTO problem (nama_problem, email_problem, ket_problem) VALUES ('$nama_tabel', '$email_tabel', '$ket_tabel')";
        $result = mysqli_query($connect, $query);

        if(!$result) {
            
            header('location: ../index.php?konsultasi-gagal');
        }else{
            echo "<script> alert('Pesan berhasil dikirim!');window.location='../index.php';</script>";
           
        }
    }else{
        echo'<script>window.history.back() </script>';
    }
?>