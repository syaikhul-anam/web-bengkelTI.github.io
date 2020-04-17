<?php
session_start();
if(empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    header ('location: ../FRONT-END/log_index.php');
    exit;
}else {
  $username=$_SESSION['username'];
  include "../FUNCTION/function.php";
}
?>


<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- My Css -->
 <link rel="stylesheet" href="das.css">
 <style>

table{
    border-spacing: 0;
    width: 100%;
    margin: 10px auto 10px auto;
}
table thead th{
    background-color: blueviolet;
    border: 1px solid blueviolet;
    color: white;
    padding: 10px;
    text-align: left;
}
table tbody td{
    
    color: black;
    padding: 10px;
    text-align: left;
    margin-left: 5px;
}

</style>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <img src="assets/img/logo/logo.png" alt="" class="img-fluid log">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="dasboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item ">
            <a class="nav-link" href="team.php">
              <i class="material-icons">personal</i>
              <p>Team</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="table.php">
              <i class="material-icons">content_paste</i>
              <p>Table-List</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="shop.php">
              <i class="material-icons">shopping_cart</i>
              <p>Shop</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Table-List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="material-icons">logout</i> Logout
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Cek</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Keluhan</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php
                            $query = "SELECT * FROM problem ORDER BY id_problem ASC";
                            $result = mysqli_query($connect, $query);

                            if(!$result) {
                                die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                            }

                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td><?php echo $row['nama_problem']; ?></td>
                            <td><?php echo $row['email_problem']; ?></td>
                            <td><?php echo $row['ket_problem']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <a href="hapus-konsultasi.php?id_problem=<?php echo $row['id_problem']; ?>"><i class="material-icons">close</i></a>
                              </button>
                            </td>
                          </tr>

                          <?php
                            }
                          ?>
 
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
          </div>
        </div>
    
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Bengkel TI
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Bengkel TI</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>
</html>
