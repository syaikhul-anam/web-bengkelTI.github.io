<!-- DELETE LAPTOP -->

<?php
include "../../FUNCTION/function.php";
$id = $_GET['id_laptop'];
$query = "DELETE FROM shop_laptop WHERE id_laptop = '$id'";
$result = mysqli_query($connect, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
}else {
    echo "<script> alert('Data berhasil dihapus!');window.location='../shop.php';</script>";
}

?>

<!-- DELETE PENYIMPANAN -->

<?php
include "../../FUNCTION/function.php";
$id = $_GET['id_penyimpanan'];
$query = "DELETE FROM shop_penyimpanan WHERE id_penyimpanan = '$id'";
$result = mysqli_query($connect, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
}else {
    echo "<script> alert('Data berhasil dihapus!');window.location='../shop.php';</script>";
}

?>


<!-- DELETE KOMPUTER -->

<?php
include "../../FUNCTION/function.php";
$id = $_GET['id_komputer'];
$query = "DELETE FROM shop_komputer WHERE id_komputer = '$id'";
$result = mysqli_query($connect, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
}else {
    echo "<script> alert('Data berhasil dihapus!');window.location='../shop.php';</script>";
}

?>

