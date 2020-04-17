<?php
include "../FUNCTION/function.php";
$id = $_GET['id_proker'];
$query = "DELETE FROM proker WHERE id_proker = '$id'";
$result = mysqli_query($connect, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
}else {
    header('location: dasboard.php?hapus-proker-berhasil');
}

?>