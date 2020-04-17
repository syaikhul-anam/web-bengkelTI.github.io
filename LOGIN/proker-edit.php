<?php
 include ('../FUNCTION/function.php');
?>

<?php
    if(isset($_POST['submit'])){
        $id = $_POST['id_proker'];
        $ket_proker = $_POST['ket_proker'];
        $pj_proker = $_POST['pj_proker'];

        $query = "UPDATE proker SET ket_proker = '$ket_proker',pj_proker = '$pj_proker'";
        $query .= "WHERE id_proker = '$id'";
        $result = mysqli_query($connect, $query);

        if(!$result) {
            
            header('location: dasboard.php?proker-gagal');
        }else{
            header('location: dasboard.php?proker-berhasil');
           
        }
    }else{
        echo'<script>window.history.back() </script>';
    }
?>