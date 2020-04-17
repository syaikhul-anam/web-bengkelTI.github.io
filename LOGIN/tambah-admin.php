<?php
    include ('../FUNCTION/function.php');
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
    <center><h1>Tambah Admin</h1></center>
    <form action="proses-admin.php" method="post" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama Admin</label>
            <input type="text" name="nama_admin" autofocus="" required=""/>
        </div>
        <div>
            <label>Kota Asal</label>
            <input type="text" name="kota_admin" required=""/>
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status_admin" required=""/>
        </div>
        <div>
            <label>Username</label>
            <input type="text" name="username" required=""/>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" required=""/>
        </div>

        <div>
            <button type="submit" name="submit">Simpan Data</button>
        </div>
    </section>
    </form>
</body>
</html>