<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Other cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link href="./asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- my css -->
  <link rel="stylesheet" href="./asset/css/style.css" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./asset/img/logo 16x16.png">



  <title>R & P Law Office</title>
</head>

<body>
  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./asset/img/logo 50x50.png" alt="">
        <span>R & P Law Office</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="row">
          <div class="col">
          </div>
          <div class="col"></div>
        </div>
        <ul class="navbar-nav ms-auto text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Back to Home</a>
          </li>
        
        </ul>
        
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

 
  <!-- About -->
  <div class="my-5" id="about">


    <div class="container about">
      <div class="row text-center mb-5">
        <div class="col">
          <h1>Pengunjung</h1>
        </div>
      </div>
      <div class="container">

        <div class="row justify-content-center fs-5 text-center">
          <div class="col-lg-6">

            <img src="./asset/img/logo r&p.jpg" alt="R&P Law Office Logo" />

          </div>
          <div class="col-lg-6 align-self-center text-start">
            <section class="visitor">
    <div class="container">
      <div class="text-center">
        <div class="row">
          <div class="col-md-12 col-sm-6">
            <div class="counter">
              <div class="counter-icon">
                <i class="fa fa-people-group "></i>
              </div>
              <!-- <span class="counter-value fa-beat">27</span> -->

              <div class="counter-value">
                  <?php 
            include ("counter.php");
           
            echo "<p style='color:blue; font-weight:enchant_broker_list_dicts(broker)'> $kunjungan[0]
            </p>";
          
            ?>
              <h3>Pengunjung</h3>
              </div>
              

            </div>
          </div>


        </div>
      </div>
    </div>

  </section>

          </div>
         
 

        </div>
      </div>
    </div>
  </div>

  
  
  <!-- End About -->

 

  


  

  

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <div class="row">
              <div class="col-lg-6 footer-links">
                <h4>Layanan Kami</h4>
                <ul>
                  <li><a href="service.html">Litigasi</a></li>
                  <li><a href="service.html">Praktik Multi Disiplin</a></li>
                  <li><a href="service.html">Perbankan & Keuangan</a></li>
                  <li><a href="service.html">Pertambangan</a></li>
                  <li><a href="service.html">Asuransi</a></li>
                  <li><a href="service.html">Ketenagakerjaan</a></li>
                </ul>
              </div>

              <div class="col-lg-6 footer-links">
                <h4><br></h4>
                <ul>
                  <li><a href="service.html">Pertanahan</a></li>
                  <li><a href="service.html">Kekayaan Intelektual</a></li>
                  <li><a href="service.html">Kesehatan</a></li>
                  <li><a href="service.html">Ekspor & Impor</a></li>
                  <li><a href="service.html">Kepailitan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <div class="footer-info">
              <img src="./asset/img/logo 100x100.png" alt="">
              <p class="">Head Office :
                Soho-Capital-Podomoro City, 25th Floor, Unit 2508. Jl.Letjen.S.Parman, Kav.28, Tanjung Duren Selatan,
                Grogol Petamburan, Jakarta Barat.<br><br>
                Office Yogyakarta : Polaman, RT/RW: 014/000, Argorejo, Sedayu, Bantul, D.I.Yogyakarta.<br><br>
                Office Medan : Jl.Bilal Ujung, Gg.Bima, No.41 CR, Pulo Brayan Darat 1, Medan Timur, Medan, Sumatera
                Utara.<br><br>
                Office Surabaya : Jl.Ketintang Selatan, Karah, Jambangan, Perum.Royal Ketintang Regency, Blok F-03,
                Surabaya, Jawa Timur.<br><br>
                Office Semarang : Jl.Jatingaleh III, Jatisari No.105, RT 003 RW 004, Kelurahan Jatingaleh, Kecamatan
                Candisari, Kota Semarang.<br><br>
                <strong>Phone:</strong> <a href="https://api.whatsapp.com/send?phone=628112642402">+62 811 2642 402</a>
                <br>
                <strong>Email:</strong> <a
                  href="https://mailto:rnplawoffice2015@gmail.com">rnplawoffice2015@gmail.com</a><br>
              </p>
              <div class="social-links d-flex justify-content-center mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>R & P Law Office</span></strong>.
        </div>
        <div class="credits">
          Created by <a href="https://api.whatsapp.com/send?phone=6282224160754">Lazuardi Yudistira</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Scroll Up -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill"></i></button>
  <!-- Scroll End -->

  <!-- WhatsAap floating Button -->
  <a href="https://api.whatsapp.com/send?phone=628112642402" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
  <!-- End Whatsapp -->

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>

  <!-- Vendor Js -->
  <!-- Lord icon -->
  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/fb1f2e46f7.js" crossorigin="anonymous"></script>


  <!-- My Js -->
  <script src="./asset/js/script.js"></script>

  <!-- Visitor Counter -->
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.counter-value').each(function () {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 3500,
          easing: 'swing',
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
    });
  </script> -->

</body>

</html>