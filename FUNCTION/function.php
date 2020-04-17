<!-- Sambung Database -->
<?php
    global $connect;

    $dbserver = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbnama = "bengkel";

    $connect = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbnama);

    if(!$connect){
        die("koneksi Gagal".mysqli_connect_error());
    }

?>
<!-- //ambil data (fecth) dari objek result
//ada 4 cara
//mysqli_fecth_row()   u/ mengembalikan array numerik
//mysqli_fecth_assec()   u/ mengembalikan array assosiative
//mysqli_fecth_array()   u/ dapat mengembalikan keduanya
//mysqli_fecth_object()   u/ mengembalikan object -->