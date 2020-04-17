<?php
session_start();
if(isset($_SESSION['login'])) {
    header ('location:../LOGIN/dasboard.php');
    exit;
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
    <title>Document</title>

    <style>
        .col-md-4 h3{
        text-align: center;
        }
        .col-md-4{
        margin-top: 180px;
        margin-left: 400px;
        border: 2px solid grey;
        border-radius: 5px;
       }
       .notif{
        font-size:14px;
        font-style: italic;
        color: red;
       }
    </style>
</head>
<body>
<link rel="stylesheet" href="css/bootstrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="../LOGIN/cek_login.php" method="POST">
                    <h3><b>Admin Login</b></h3>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control :focus" name="username" placeholder="Username" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <?php 

                    if(isset($_GET['login-gagal'])) {?>
                    <div>
                        <p class="notif">Maaf, Username / Password yang anda masukan Salah</p>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-success" >Sign in</button>
                    </div>
                    </form>
                    
            </div>
        </div>
    </div>
    
</body>
</html>
