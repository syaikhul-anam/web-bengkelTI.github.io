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
<?php include ('../FUNCTION/function.php'); ?>

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
    
    border: 1px solid grey;
    color: black;
    padding: 10px;
    text-align: left;
    margin-left: 5px;
}
.plus{
    text-decoration: none;
    color: white;
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
          <li class="nav-item">
            <a class="nav-link" href="dasboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item active  ">
            <a class="nav-link" href="team.php">
              <i class="material-icons">personal</i>
              <p>Team</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="table.php">
              <i class="material-icons">content_paste</i>
              <p>Table-List</p>
            </a>
          </li>
          <li class="nav-item ">
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
            <a class="navbar-brand" href="javascript:;">Team</a>
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
          <div style="padding: 0 15px;">
      <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span><a href="team/tambah-team.php" class="plus"><i class="material-icons">add_circle</i> Tambah Data</a>
      </button>
      <h2>Data Team</h2>
      <div id="view"><?php include "../FUNCTION/function.php"; ?></div>
      <table>
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Program Studi</th>
                  <th>Daerah</th>
                  <th>Foto</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php
                $query = "SELECT * FROM team ORDER BY id_team ASC";
                $result = mysqli_query($connect, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)){
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_team']; ?></td>
                        <td><?php echo $row['prodi_team']; ?></td>
                        <td><?php echo $row['kota_team']; ?></td>
                        <td><img style="width: 120px" src="assets/img/team/<?php echo $row['foto_team']; ?>"></td>
                        <td>
                            <a href="team/edit-team.php?id_team=<?php echo $row['id_team']; ?>"><i class="material-icons">edit</i></a> 
                            <a href="team/hapus-team.php?id_team=<?php echo $row['id_team']; ?>" onclick="return confirm('Anda yakin ingin mengahpus data?')"><i class="material-icons" data-color="danger">delete</i></a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
              ?>
          </tbody>
      </table>
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
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
