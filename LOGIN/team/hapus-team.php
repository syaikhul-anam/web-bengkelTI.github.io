<?php
include "../../FUNCTION/function.php";
$id = $_GET['id_team'];
$query = "DELETE FROM team WHERE id_team = '$id'";
$result = mysqli_query($connect, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
}else {
    echo "<script> alert('Data berhasil dihapus!');window.location='../team.php';</script>";
}

?>