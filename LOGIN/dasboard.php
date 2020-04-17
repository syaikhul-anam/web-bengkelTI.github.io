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
          <li class="nav-item active">
            <a class="nav-link" href="dasboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item">
            <a class="nav-link" href="team.php">
              <i class="material-icons">personal</i>
              <p>Team</p>
            </a>
          </li>
          <li class="nav-item ">
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
          <li class="nav-item">
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
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
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
      <!-- <div class="content">
        <div class="container-fluid"> -->
          <!-- your content here -->
          <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                  <?php
                  $sql = "SELECT * FROM team";
                  $query = mysqli_query($connect, $sql);
                  ?>
                  <p class="card-category">Team</p>
                  <h3 class="card-title"><?php echo mysqli_num_rows($query)?>
                    <small>People</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> 24 Hours Time Work
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <?php
                  $sql = "SELECT * FROM shop_laptop";
                  $query = mysqli_query($connect, $sql);
                  ?>
                  <p class="card-category">Stock</p>
                  <h3 class="card-title"><?php echo mysqli_num_rows($query)?>
                  <small>Pcs</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Aksesoris Laptop
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <?php
                  $sql = "SELECT * FROM problem";
                  $query = mysqli_query($connect, $sql);
                  ?>
                  <p class="card-category">Consultation</p>
                  <h3 class="card-title"><?php echo mysqli_num_rows($query)?>
                  <small>Quest</small></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            
          </div>
         

          <!-- PROKER -->
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                    <h4 class="card-title">Program Kerja</h4>
                    <p class="card-category">Bengkel Teknik Informatika Unida Gontor</p>
                      
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                      
                        <button type="button" rel="tooltip" title="Tambah" class="btn btn-primary btn-link btn-sm pull-right">
                        <a href="tambah-proker.php"><i class="material-icons">add_circle_outline</i></a>        
                              </button>      
                     
                        <tbody>
                            <?php
                            $query = "SELECT * FROM proker ORDER BY id_proker ASC";
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
                            <td><?php echo $row['ket_proker']; ?> <p>(<?php echo $row['pj_proker']; ?>)</p></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <a href="edit-proker.php?id_proker=<?php echo $row['id_proker']; ?>"><i class="material-icons">edit</i></a>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <a href="hapus-proker.php?id_proker=<?php echo $row['id_proker']; ?>" onclick="return confirm('Anda yakin ingin mengahpus data?')"><i class="material-icons">close</i></a>
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
              <!-- DAFTAR ADMIN -->
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Data Admin</h4>
                  <p class="card-category">Bengkel Teknik Informatika Unida Gontor</p>
                </div>

                <div class="card-body table-responsive">
                <button type="button" rel="tooltip" title="Tambah" class="btn btn-warning btn-link btn-sm pull-right">
                        <a href="tambah-admin.php"><i class="material-icons">add_circle_outline</i></a>        
                              </button>  
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Daerah</th>
                      <th>Status</th>
                    </thead>

                    <tbody>
                    <?php
                    $query = "SELECT * FROM user ORDER BY id_user ASC";
                    $result = mysqli_query($connect, $query);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                    }
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)){
                        ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_admin']; ?></td>
                        <td><?php echo $row['kota_admin']; ?></td>
                        <td><?php echo $row['status_admin']; ?></td>
                  
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
          </div>
        </div>

          
           

      <!-- </div>
      </div> -->
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
