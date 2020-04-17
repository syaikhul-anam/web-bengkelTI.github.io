<?php
    include ('../FUNCTION/function.php');

    if(isset($_GET['id_proker'])) {
        $id = $_GET['id_proker'];
        $query = "SELECT * FROM proker WHERE id_proker = '$id'";
        $result = mysqli_query($connect, $query);

        if(!$result) {
            die("Query Error :".mysqli_errno($connect). " - ".mysqli_error($error));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script> alert('Data tida ditemukan pada tabel');window.location='dasboard.php';</script>";
        }

    }else {
        echo"<script> alert('Masukan ID yang ingin di edit');window.location='dasboard.php';</script>";
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
    <center><h1>Edit Data Program Kerja</h1></center>
    <form action="proker-edit.php" method="post" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Rencana Kegiatan</label>
            <input type="text" name="ket_proker" autofocus="" required="" value="<?php echo $data['ket_proker']?>"/>
            <input type="hidden" name="id_proker" value="<?php echo $data['id_proker']?>"/>
        </div>
        <div>
            <label>Penaggung Jawab</label>
            <input type="text" name="pj_proker" value="<?php echo $data['pj_proker']?>"/>
        </div>
        
        <div>
            <br>
            <button type="submit" name="submit">Simpan Perubahan</button>
        </div>
    </section>
    </form>
</body>
</html>