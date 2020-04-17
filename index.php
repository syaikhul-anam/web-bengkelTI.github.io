<?php
include('FUNCTION/function.php'); //

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans:wght@400;700&family=Viga&display=swap" rel="stylesheet">

    <!-- My Css -->
    <link rel="stylesheet" href="FRONT-END/style.css">

   <!-- FancyBox -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script>
    $("[data_fancybox]").fancybox();
  </script>
    <title>Pemrograman Web</title>
  </head>
  <body>
  
      <!-- Navbar -->
   <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light  shadow-sm p-3 mb-5 bg-white rounded">
      <div class="container">
                                                  <!-- // -->
       <img class="navbar-brand img-fluid im" src="FRONT-END/asset-img/icon/logo.png">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
           <a class="nav-item nav-link" href="#banner" id="nav-home">Home <span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="#about" id="nav-about">About</a>
           <a class="nav-item nav-link" href="#service" id="nav-service">Services</a>
           <a class="nav-item nav-link" href="#shop" id="nav-shop">Shop</a>
           <a class="nav-item nav-link" href="#contacts" id="nav-contacts">Contacts</a>
         </div>
                                                                        <!-- // -->
         <button class="btn btn-warning rounded-pill login non"><a href="FRONT-END/log_index.php?user=pass=" class="non">Login</a></button> 
       </div>
     </div>
   </nav>
   </section>
    <!-- Akhir Navbar -->
 <scroll-container>
    <!-- Banner -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <p class="top-tittle">Welcome</p>
            <p class="promo-tittle wow zoomInLeft">Bengkel <br> Teknik Informatika</p>
            <p class="bottom-tittle">Overcome All Problem of Laptop, PC, Printer, Software and Reinstall Software</p>
            <form class="my-2 my-lg-0 tombol">
             <button class="btn rounded-pill tombol2 " type="submit"><a href="#contacts" class="non">Contact Us</a></button>
           </form>
          </div>
                                                    <!-- // -->
          <div class="col-md-7 text-center"><img src="FRONT-END/asset-img/icon/try.png" class="ban-img img-fluid  wow zoomIn" ></div>
        </div>
      </div> 
    </section>
    <!-- Akhir Banner -->

  
      
   
   <!-- About -->
   <section id="about">
     <div class="container"> 
       <div class="row">
         <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- // -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="FRONT-END/asset-img/bengkel/christopher-gower-m_HRfLhgABo-unsplash.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="FRONT-END/asset-img/bengkel/marvin-meyer-SYTO3xs06fU-unsplash.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="FRONT-END/asset-img/bengkel/austin-distel-goFBjlQiZFU-unsplash.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
         </div>
        
        <div class="col-md-4">
          <h1 class="font-weight-bolder tag-about">About</h1>
          <div class="underline-orange"></div>
          <p id="text-about">Bengkel Teknik Informatika adalah 
            salah satu organisasi studi club di 
            bawah naungan program studi 
            Teknik Informatika Universitas 
            Darussalam Gontor Ponorogo, yang 
            dimana berfokus pada pelayanan 
            service alat elektronik khusunya 
            laptop, PC, printer serta instalasi 
            software dan OS.
            <br><br>
            Bengkel Teknik Informatika didirikan 
            pada tahun 2015 dengan tujuan untuk 
            menjadi wadah pengembangan 
            mahasiswa Teknik Informatika dalam 
            bidang teknisi komputer  </p>
        </div>
       </div> 
      <section id="team">
        <h2 class="team-tag font-weight-bolder">OUR TEAM</h2>
        <div class="underline-orange"></div>

        
        <div class="container-2">

          <div class="row">
          <?php
          $query = "SELECT * FROM team ORDER BY id_team DESC";
          $result = mysqli_query($connect,$query);

          if(!$result) {
            die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
        }

        while ($row = mysqli_fetch_assoc($result)){
        ?>
          <!--  -->
           <div class="col-md-4">
             <img src="LOGIN/assets/img/team/<?=$row['foto_team'];?>" alt="" class="team-img rounded-circle"> 
             <h6><b><?=$row['nama_team'];?></b></h6>
             <p><?=$row['prodi_team'];?><br><?=$row['kota_team'];?></p>
           </div>
           <?php
        }
       ?>
          
         </div>
       </div>
       
       </section>
    </div> 
    <!--  -->
    <img src="FRONT-END/asset-img/icon/Path 64@2x.png" class="bottom-img">
   </section>
  
   <!-- Akhir About -->
  
   <!-- Services -->
   <section id="service">   
     <div class="container">
      <h1 class="tag-service font-weight-bolder">SERVICES</h1>
      <div class="underline-orange"></div>
      <div class="row">
        <div class="col mb-4">
          <div class="card card1">
          <!--  -->
            <img src="FRONT-END/asset-img/icon/printer.png" class="card-img-top rounded-circle mx-auto d-block crd" alt="...">
            <div class="card-body">
              <h4 class="card-title font-weight-bolder">Printer Services</h4>
              <p class="card-text">Melayani permasalahan yang ada pada Printer seperti masalah pada pewarnaan, permasalahan pada proses printer serta masalah yang lainya. Serta kami menyediakan beberapa komponen printer</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card card2">
            <img src="FRONT-END/asset-img/icon/laptop.jpg" class="card-img-top rounded-circle mx-auto d-block crd" alt="...">
            <div class="card-body">
              <h4 class="card-title font-weight-bolder">Computer Repair</h4>
              <p class="card-text">Melayani permasalahan yang ada pada PC/Laptop seperti masalah pada Hardware, permasalahan pada komponen-komponen PC serta masalah yang lainya. Serta kami menyediakan beberapa aksesoris PC</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card card3">
            <img src="FRONT-END/asset-img/icon/soft.png" class="card-img-top rounded-circle mx-auto d-block crd" alt="...">
            <div class="card-body">
              <h4 class="card-title font-weight-bolder">Virus Removal</h4>
              <p class="card-text">Melayani permasalahan yang ada pada Software seperti masalah pada Virus pada PC/Laptop, Install Ulang serta masalah software yang lainya. Serta kami menyediakan beberapa Software serta Game</p>
            </div>
          </div>
        </div>
      </div>
     </div> 
     
     <div class="container pad">
       <div class="row">
        <div class="col-md-6">
          <form class="rounded mx-auto d-bloc data pad">
            <p class="font-weight-bolder">Location</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9414231253627!2d111.49037501475675!3d-7.
            9011888943079995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a1d5d364a069%3A0x4a240a2a0c83c8db!2sBengkel%20TI
            %20UNIDA%20GONTOR!5e0!3m2!1sid!2sid!4v1583983752075!5m2!1sid!2sid"
            width="460" height="150" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <br><br>
            <p id="find"><a href="https://www.google.co.id/maps/place/Bengkel+TI+UNIDA+GONTOR/@-7.9011889,111.490375,17z/data=!4m5!3m4!
              1s0x2e79a1d5d364a069:0x4a240a2a0c83c8db!8m2!3d-7.9011889!4d111.4925637?hl=id">Find us in Google Maps</a></p>
          </form>
        </div>
        
        <div class="col-md-6">
        <!--  -->
          <form class="rounded mx-auto d-bloc data pad" method="POST" action="FRONT-END/proses-list.php">
            <p class="font-weight-bolder">Consultation</p>
            <div class="form-group row">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Full Name" name="nama_tabel"  autofocus="" required="">
              </div>
             
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Email Address" name="email_tabel" required="">
              </div>
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" id="inputAddress" placeholder="How May We Help You" name="ket_tabel" required=""></textarea>
            </div>
              <button class="btn rounded mx-auto d-block font-weight-bolder tbl" type="submit" name="submit">SEND MESSAGE</button> 
          </form>
        </div>
       </div> 
     </div>
   </section>
   <!-- Akhir Services -->


   <!-- Shop -->
   <section id="shop">
    <div class="container-fluid pt-5 pb-5">
      <h1 class="tx font-weight-bolder tag-shop">SHOP</h1>
      <div class="underline-orange"></div>

     <div class="container rounded mx-auto d-block">
       <div class="row">

       <!-- LAPTOP -->
         <div class="col-md-4">
           <div class="row">
             <h4 class="font-weight-bolder">AKSESORIS LAPTOP</h4>
           </div>
           <div class="row">
               <div class="underline-green"></div>
           </div>  
 
           <div class="row">   
           <?php
                $query = "SELECT * FROM shop_laptop ORDER BY id_laptop DESC";
                $result = mysqli_query($connect,$query);

                if(!$result) {
                  die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }

                while ($row = mysqli_fetch_assoc($result)){
                ?>
              <div class="col-md-6 ">
                  <!--  -->
                <div class="media mt-5">
                <img src="LOGIN/assets/img/shop/<?=$row['gambar_laptop'];?>" class="img-fluid mr-3" alt="media-img">
                </div>

              </div>

              <div class="col-md-6 ">

                <div class="media-body mt-5">
                <h5 class="font-weight-bolder"><?=$row['nama_laptop'];?></h5>
                <h6>Rp <?=$row['harga_laptop'];?></h6>
                <button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
                </div>

              </div> 

              <?php
                }
              ?>       
       </div>
          </div>

<!-- PENYIMPANAN -->
          <div class="col-md-4">
          
            <div class="row">
              <h4 class="font-weight-bolder">MEDIA PENYIMPANAN</h4>
            </div>

            <div class="row">
                <div class="underline-purple"></div>
            </div>  
  
            <div class="row"> 
            <?php
                $query = "SELECT * FROM shop_penyimpanan ORDER BY id_penyimpanan DESC";
                $result = mysqli_query($connect,$query);

                if(!$result) {
                  die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }

                while ($row = mysqli_fetch_assoc($result)){
                ?>
              <div class="col-md-6 ">
                  <!--  -->
                <div class="media mt-5">
                <img src="LOGIN/assets/img/shop/<?=$row['gambar_penyimpanan'];?>" class="img-fluid mr-3" alt="media-img">
                </div>

              </div>

              <div class="col-md-6 ">

                <div class="media-body mt-5">
                <h5 class="font-weight-bolder"><?=$row['nama_penyimpanan'];?></h5>
                <h6>Rp <?=$row['harga_penyimpanan'];?></h6>
                <button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
                </div>

              </div> 

              <?php
                }
              ?>

            </div>
  
           
  
        
           </div>

<!-- KOMPUTER -->
           <div class="col-md-4">
            <div class="row">
              <h4 class="font-weight-bolder">KOMPONEN KOMPUTER</h4>
            </div>
            <div class="row">
                <div class="underline-blue"></div>
            </div>  
  
            <div class="row">   
            <?php
                $query = "SELECT * FROM shop_komputer ORDER BY id_komputer DESC";
                $result = mysqli_query($connect,$query);

                if(!$result) {
                  die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
                }

                while ($row = mysqli_fetch_assoc($result)){
                ?>
              <div class="col-md-6 ">
                  <!--  -->
                <div class="media mt-5">
                <img src="LOGIN/assets/img/shop/<?=$row['gambar_komputer'];?>" class="img-fluid mr-3" alt="media-img">
                </div>

              </div>

              <div class="col-md-6 ">

                <div class="media-body mt-5">
                <h5 class="font-weight-bolder"><?=$row['nama_komputer'];?></h5>
                <h6><?=$row['harga_komputer'];?></h6>
                <button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
                </div>

              </div> 

              <?php
                }
              ?>         
        </div>
           </div>

        </div>  
      </div>
    </div>
      <button class="btn rounded mx-auto d-block font-weight-bolder tbl1" type="submit"><a href="https://www.tokopedia.com/p/komputer-laptop" class="non">SEE MORE -></a> </button> 
   </section>
   
   <!-- Akhir Shop -->

        <!-- Footer -->
      <footer class="page-footer font-small stylish-color-dark pt-4">
      <section id="contacts">
      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content  -->
            <!--  -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ">Contacts</h5>
            <div class="row border-right">
              <div class="col">
                <img src="FRONT-END/asset-img/icon/unida@2x.png" class="img-fluid rounded mx-auto d-block unida" alt="">
              </div>
              <div class="col">
                <img src="FRONT-END/asset-img/icon/logo-TI@2x.png" class="img-fluid  rounded mx-auto d-block ti" alt="">
              </div>
              <div class="col">
                <img src="FRONT-END/asset-img/icon/Lambang HIMATIF@2x.png" class="img-fluid rounded mx-auto d-block hmp" alt="">
              </div>
            </div>
           

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">
          <!-- Grid column -->
          <div class="col-md-4 mrtop ">

            <!-- Content -->
            
            
            <p><b>BENKEL TI</b></p>
            <p>Universitas Darussalam Gontor, <br> Ponorogo, Jawa Timur, Indonesia</p>

          </div>
         
           <!-- Grid column -->

           <hr class="clearfix w-100 d-md-none">
          <!-- Grid column -->
          <div class="col-md-4 mrtop ">

            <!-- Content -->
            
            <!--  -->
            <p>WA : +62 8787 0682 093</p>
            <ul class="list-unstyled list-inline text-left">
              <li class="list-inline-item">
                <a href="https://www.instagram.com"><img src="FRONT-END/asset-img/icon/instagram.png" class="logo img-fluid rounded mx-auto d-block" title="instagram" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="http://gmail.com"><img src="FRONT-END/asset-img/icon/gmail.png" class="logo img-fluid rounded mx-auto d-block" title="gmail" alt=""></a>
              </li>
              <li class="list-inline-item">
               <a href="https://www.facebook.com"><img src="FRONT-END/asset-img/icon/facebook.png" class="logo img-fluid rounded mx-auto d-block" title="facebook" alt=""></a> 
              </li>
            </ul>
            
          </div>
          <!-- Grid column -->
                
        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <hr>

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> BenkelTI.com</a>
      </div>
      <!-- Copyright -->
      </section>       
      </footer>
      <!-- Footer -->


   <!-- Getbutton.io widget -->
<script type="text/javascript">
  (function () {
      var options = {
          whatsapp: "+62 87870682093", // WhatsApp number
          telegram: "+62 87870682093", // Telegram bot username
          call_to_action: "Kirim Pesan", // Call to action
          button_color: "#932C8B", // Color of button
          position: "right", // Position may be 'right' or 'left'
          order: "whatsapp,telegram", // Order of buttons
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>
<!-- /Getbutton.io widget -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    
    
  
  </body>
  <script>
   var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();


  </script> 
</html>



