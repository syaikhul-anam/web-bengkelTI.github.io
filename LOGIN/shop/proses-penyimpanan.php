<?php
   include ('../../FUNCTION/function.php');
?>

<!-- PROSES PENYIMPANAN -->
<?php
   $nama_shop = $_POST['nama_shop'];
   $harga_shop = $_POST['harga_shop'];
   $gambar_shop = $_FILES['gambar_shop']['name'];

   if($gambar_shop != "") {
        $ekstensi_diperbolehkan = array('jpg','png','jpeg','jfif');
        $x = explode('.',$gambar_shop);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_shop']['tmp_name'];
        $angka_acak = rand(1, 999);
        $gambar_shop_baru = $angka_acak.'-'.$gambar_shop;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../assets/img/shop/'.$gambar_shop_baru);

            $query = "INSERT INTO shop_penyimpanan (nama_penyimpanan, harga_penyimpanan, gambar_penyimpanan) VALUES ('$nama_shop',
            '$harga_shop','$gambar_shop')";
            $result = mysqli_query($connect, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
            }else {
                echo "<script> alert('Data berhasil ditambahkan!');window.location='../shop.php';</script>";
            }
        }else {
            echo "<script> alert ('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah-penyimpanan.php';</script>";
        }
   }else {
        $query = "INSERT INTO shop_laptop (nama_penyimpanan, harga_penyimpanan) VALUES ('$nama_shop',
        '$harga_shop')";
        $result = mysqli_query($connect, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
        }else {
            echo "<script> alert('Data berhasil ditambahkan!');window.location='../shop.php';</script>";
        }
   }
?>