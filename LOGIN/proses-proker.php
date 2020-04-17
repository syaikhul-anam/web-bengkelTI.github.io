<?php
 include ('../FUNCTION/function.php');
?>

<?php
    if(isset($_POST['submit'])){

        $ket_proker = $_POST['ket_proker'];
        $pj_proker = $_POST['pj_proker'];

        $query = "INSERT INTO proker (ket_proker, pj_proker) VALUES ('$ket_proker', '$pj_proker')";
        $result = mysqli_query($connect, $query);

        if(!$result) {
            
            header('location: dasboard.php?konsultasi-gagal');
        }else{
            header('location: dasboard.php?konsultasi-berhasil');
           
        }
    }else{
        echo'<script>window.history.back() </script>';
    }
?>