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
<!-- Script -->


 <style>

table{
    border-spacing: 0;
    width: 100%;
    margin: 10px auto 32px auto;
}
table thead th{
    background-color: rgb(111, 217, 221);
    border: 1px solid rgb(111, 217, 221);
    color: black;
    padding: 10px;
    text-align: left;
}
table tbody td{
    
    border: 1px solid rgb(111, 217, 221);
    color: black;
    padding: 10px;
    text-align: left;
    margin-left: 5px;
}
.plus{
    text-decoration: none;
    color: white;
}
/* Style Laptop */

.underline-green{
    width: 70px;
    height: 3px;
    background-color:lawngreen ;
}
h4{
  font-size: 32px;
  color: black;
}
#btn-hapus{
  color: white;
}
/* STYLE PENYIMPANAN */

.underline-purple{
    width: 70px;
    height: 3px;
    background-color:blueviolet ;
}
/* STYLE KOMPUTER */
.underline-orange{
    width: 70px;
    height: 3px;
    background-color:orange ;
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
          <li class="nav-item">
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
          <li class="nav-item">
            <a class="nav-link" href="map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item active  ">
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
            <a class="navbar-brand" href="javascript:;">Shop</a>
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
          <!-- LAPTOP -->
       
        <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span><a href="shop/tambah-laptop.php" class="plus"><i class="material-icons">add_circle</i> Tambah Data</a>
        </button>
        
       <section id="laptop">
          <h4>Aksesoris Laptop</h4>
          <div class ="underline-green"></div>
          <div id="view"><?php include "../FUNCTION/function.php"; ?></div>
      <table>
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Harga Barang</th>
                  <th>Gambar Barang</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php
                $query = "SELECT * FROM shop_laptop ORDER BY id_laptop ASC";
                $result = mysqli_query($connect, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)){
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_laptop']; ?></td>
                        <td><?php echo $row['harga_laptop']; ?></td>
                        <td><img style="width: 120px" src="assets/img/shop/<?php echo $row['gambar_laptop']; ?>"></td>
                        <td>
                       
                        <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-plus"></span><a href="shop/hapus-shop.php?id_laptop=<?php echo $row['id_laptop']; ?>"
                         onclick="return confirm('Anda yakin ingin mengahpus data?')" class="plus"><i class="material-icons" >delete</i> Delete</a>
                          
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
              ?>
          </tbody>
      </table>

      <!-- AKHIR LAPTOP -->
      <!--  PENYIMPANAN-->

      <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span><a href="shop/tambah-penyimpanan.php" class="plus"><i class="material-icons">add_circle</i> Tambah Data</a>
        </button>
        
      <h4 id= "laptop">Penyimpanan</h4>
          <div class ="underline-purple"></div>
          <div id="view"><?php include "../FUNCTION/function.php"; ?></div>
      <table>
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Harga Barang</th>
                  <th>Gambar Barang</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php
                $query = "SELECT * FROM shop_penyimpanan ORDER BY id_penyimpanan ASC";
                $result = mysqli_query($connect, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)){
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_penyimpanan']; ?></td>
                        <td><?php echo $row['harga_penyimpanan']; ?></td>
                        <td><img style="width: 120px" src="assets/img/shop/<?php echo $row['gambar_penyimpanan']; ?>"></td>
                        <td>

                        <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-plus"></span><a href="shop/hapus-shop.php?id_penyimpanan=<?php echo $row['id_penyimpanan']; ?>"
                         onclick="return confirm('Anda yakin ingin mengahpus data?')" class="plus"><i class="material-icons" >delete</i> Delete</a>
                            
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
              ?>
          </tbody>
      </table>
     
      <!-- AKHIR PENYIMPANAN -->
      <!-- KOMPUTER -->

      <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span><a href="shop/tambah-komputer.php" class="plus"><i class="material-icons">add_circle</i> Tambah Data</a>
        </button>
        

      <h4 id= "laptop">Aksesoris  Komputer</h4>
          <div class ="underline-orange"></div>
          <div id="view"><?php include "../FUNCTION/function.php"; ?></div>
      <table>
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Harga Barang</th>
                  <th>Gambar Barang</th>
                  <th>Action</th>
              </tr>
          </thead>
          
          <tbody id="komputer">
              <?php
                $query = "SELECT * FROM shop_komputer ORDER BY id_komputer ASC";
                $result = mysqli_query($connect, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)){
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_komputer']; ?></td>
                        <td><?php echo $row['harga_komputer']; ?></td>
                        <td><img style="width: 120px" src="assets/img/shop/<?php echo $row['gambar_komputer']; ?>"></td>
                        <td>

                        <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-plus"></span><a href="shop/hapus-shop.php?id_komputer=<?php echo $row['id_komputer']; ?>"
                         onclick="return confirm('Anda yakin ingin mengahpus data?')" class="plus"><i class="material-icons" >delete</i> Delete</a>

                        </td>
                    </tr>
                    <?php
                    $no++;
                }
              ?>
          </tbody>
      </table>
      <button type="button" id="btn-print" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-left">
        <span class="glyphicon glyphicon-plus"></span><a href="#laptop" class="plus"  onClick="window.print();" ><i class="material-icons">print</i> Cetak Data</a>
        </button>
      <!-- AKHIR KOMPUTER -->
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <
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






