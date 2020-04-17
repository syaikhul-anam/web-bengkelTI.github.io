<?php
include "../FUNCTION/function.php";
$id = $_GET['id_problem'];
$query = "DELETE FROM problem WHERE id_problem = '$id'";
$result = mysqli_query($connect, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
}else {
    header('location: table.php?hapus-konsultasi-berhasil');
}

?>