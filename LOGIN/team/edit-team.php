<?php
    include ('../../FUNCTION/function.php');

    if(isset($_GET['id_team'])) {
        $id = $_GET['id_team'];
        $query = "SELECT * FROM team WHERE id_team = '$id'";
        $result = mysqli_query($connect, $query);

        if(!$result) {
            die("Query Error :".mysqli_errno($connect). " - ".mysqli_error($error));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script> alert('Data tida ditemukan pada tabel');window.location='../team.php';</script>";
        }

    }else {
        echo"<script> alert('Masukan ID yang ingin di edit');window.location='../team.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }
        h1 {
            text-transform: uppercase;
            color :  blueviolet;
        }
        .base{
            width: 400px;
            padding :20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ededed;
        }
        label{
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input{
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            background-color: #f8f8f8;
            outline-color: blueviolet;
        }
        button{
            background-color: blueviolet;
            color: white;
            padding: 10px;
            font-size: 14px;
            border: 0;
            margin-top: 20px;

        }
    </style>
</head>
<body>
    <center><h1>Edit Data <?php echo $data['nama_team']?></h1></center>
    <form action="proses-edit.php" method="post" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_team" autofocus="" required="" value="<?php echo $data['nama_team']?>"/>
            <input type="hidden" name="id_team" value="<?php echo $data['id_team']?>"/>
        </div>
        <div>
            <label>Program Studi</label>
            <input type="text" name="prodi_team" value="<?php echo $data['prodi_team']?>"/>
        </div>
        <div>
            <label>Daerah</label>
            <input type="text" name="kota_team" value="<?php echo $data['kota_team']?>"/>
        </div>
        <div>
            <label>Foto</label>
            <img style="width: 120px; float: left; margin-bottom: 5px;" src="../assets/img/team/<?php echo $data['foto_team'];?>">
            <input type="file" name="foto_team"/>
            <i style="float: left;font-size: 11px;color: red;">Abaikan jika tidak merubah foto.</i>
        </div>
        <div>
            <br>
            <button type="submit">Simpan Perubahan</button>
        </div>
    </section>
    </form>
</body>
</html>