<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="project.css" />
  </head>
  <body>
    <?php
    session_start() ;  
    ?>
    <title>LAZPRA</title>
    <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color: transparent; height: 80px;">
      <div class="container" style="width: 50pc">
        <a class="navbar-brand ps-1" href="#" style="color: #e0e4d6;"><i class="bi bi-motherboard"></i>&nbsp;   LAZPRA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item pe-3">
              <a class="nav-link active" aria-current="page" href="#" style="color: #e0e4d6">Home</a>
            </li>
            <li class="nav-item pe-3">
              <a class="nav-link" href="#about" style="color: #e0e4d6">Tentang Kami</a>
            </li>
            <li class="nav-item pe-3">
              <a class="nav-link" href="#footer" style="color: #e0e4d6">Kontak Kami</a>
              
            </li>
            <!-- <li class="nav-item pe-3 dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #e0e4d6">Kategori </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Laptop</a></li>
                <li><a class="dropdown-item" href="#">HandPhone</a></li>
                <li><a class="dropdown-item" href="#">Printer</a></li>
                <li><a class="dropdown-item" href="#">Monitor</a></li>
                <li><a class="dropdown-item" href="#">Cpu</a></li>
              </ul>
            </li> -->
            <li><a class="nav-link" href="#comment" style="color: #e0e4d6"><i class="bi bi-chat-square-text"></i>  Comment</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron jumbotron pt-5" style="margin-top: 100px; height: 500px; background: transparent; position: relative;">
      <div class="container" style="height: 600px; width: auto;">
        <div class="row justify-content-between ms-5 mt-0">
          <div class="col-md-7 mt-3">
            <p class="lead col-md-8 mb-0" style="color: #e0e4d6;font-size: 15px;">Informasi barang Elektronik kini tersedia di <span class="logo">LAZPRA</span></p>
            <h3 style="font-size: 40px; color: #e0e4d6; margin-top: 0; line-break: 5;"><b>Through the Power</b> <br /></h3>
            <h3 style="font-size: 40px; color: #e0e4d6"><b>of <span style="color: #0F75B7;">Technology</span></b></h3>
            <button type="button" class="btn btn-lg" style="background-color: #394C6B; color: #e0e4d6" href=""><a href="allbrand.html" style="color: #e0e4d6;text-decoration: none;">Lihat Sekarang</a></button>
            <!-- Images awal -->
            <div class="container mt-5 ms-auto" style="width: 31%; left: 60%; top: -80px; position: absolute;">
              <div id="carouselExampleCaptions" class="carousel slide" style="width: 400px;">
                <div class="carousel-indicators p-2 m-0" style="width: 400px;">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner justify-content-center" style="width: 400px; border-radius: 100px;">
                  <div class="carousel-item active">
                    <a href="#"><img src="asset/laptop1.png" class="d-block w-0" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block text-white-50">
                      <p class="ms-2 justify-content-center" style=" width: 250px;cursor: pointer;"></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="#"><img src="asset/hp.png" class="d-block w-0" alt=""></a>
                    <div class="carousel-caption d-none d-md-block text-white-50">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="#"><img src="asset/printer.png" class="d-block w-0" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block text-white-50">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="#"><img src="asset/tv1.png" class="d-block w-0" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block text-black-50">
                    </div>
                  </div>
                  <div class="carousel-item" style="width: 400px;">
                    <a href="#"><img src="asset/cpu.png" class="d-block w-0" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block text-white-50">
                    </div>
                  </div>
                  <div class="carousel-item" style="width: 400px;">
                    <a href="#"><img src="asset/speaker.png" class="d-block w-0" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block text-white-50">
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <section id="about" style="background-color: transparent">
      <div class="container mt-0" style="height: 500px;">
        <div class="card mb-3 m-5" style="max-width: 900px; top:90px; left:60px; background-color: transparent;">
          <div class="row g-0 ms-auto" style="width: auto; background-color: transparent;">
            <div class="col-md-4">
              <img src="asset/mb.jpg" style="border-radius: 5px;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body ps-3" style="background-color: transparent;">
                <h3 class="card-title mb-3" style="color: whitesmoke;">Tentang Kami</h3>
                <p class="card-text" style="color: whitesmoke;">TOKOKITA ialah sebuah web yang didirikan sejak ... oleh 5 pendahulu yang kala itu sedang menjual barang-barang elektronik milik mereka yang saat itu sedang tidak adanya pemasukan ataupun pembeli, oleh karena itu mereka akhirnya pun membuat website ini yang bertujuan untuk menjual barang-barang elektronik mereka secara lebih mudah diketahui banyak orang, dan kami membuat website ini bertujuan untuk memotivasi para penjual offline untuk mengetahui berkembang nya tekhnologi yg dimana kita tidak perlu memasarkan produk dengan offline/ditempat, kini kita dapat menjual barang melalui online shop yg dibuat di website ini.</p>
              </div>
            </div>
          </div>
        </div>
  </div>
</section>
<div class="container mt-5 p-5" id="comment">
      <div class="row">
        <div class="col-6 p-4">
          <form action="" method="post">
          <div class="form-floating mb-3">
              <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
              <textarea class="form-control" name = "comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Comments</label>
          </div><br>
              <input class="btn btn-primary" style="background-color:#0F75B7;" type="submit" value="Send">
              <input class="btn btn-primary" style="background-color:#0F75B7;" type="reset" value="Reset">
          </form>
        </div>
        <div class="col-6 p-4">
            <div class="box bg-white" style="height: 180px;width: 486px; border-radius: 15px; overflow-y: scroll;
            overflow-x: hidden;
            padding: 10px;
            scroll-snap-type: y mandatory">
              <?php


              if (isset($_POST['nama'])  && isset($_POST['comment']) ){
                  if($_POST['nama'] != null && $_POST['comment']!= null){
                      if ($_SESSION['dataNama'][0][0] != null){
                          $_SESSION['dataNama'][0][] = $_POST['nama'];
                          $_SESSION['dataNama'][1][] = $_POST['comment'];
                      }else{
                          $_SESSION['dataNama'][0][0] = $_POST['nama'];
                          $_SESSION['dataNama'][1][0] = $_POST['comment'];
                      }
                  }
              }else{
                  $_SESSION['dataNama'][0][0] = null;
                  $_SESSION['dataNama'][1][0] = null;
              }
              $panjangData = count($_SESSION['dataNama'][0]) ;   
              for ($i=0; $i < $panjangData; $i++) {
                if($_SESSION['dataNama'][$i] != null){
                echo "<b>".$_SESSION['dataNama'][0][$i]. "</b> <br> <blockquote> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" .
                $_SESSION['dataNama'][1][$i] ."</blockquote> <hr> <br> "; }
              }?>
            </div>
      </div>
    </div>
        </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: relative;">
  <path class="bg-body-black-50 shadow" fill-opacity=".8" d="M0,160L288,128L576,64L864,128L1152,96L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
<section id="footer" style="background-color: black; opacity: .8;">
    <div class="container text-center">
      <div class="row align-items-center text-light">
        <div class="col" style="line-height: 4;">
          <i class="bi bi-twitter-x p-2" style="cursor: pointer;"></i>
          <i class="bi bi-whatsapp p-2" style="cursor: pointer;"></i>
          <i class="bi bi-instagram p-2" style="cursor: pointer;"></i>
          <i class="bi bi-threads p-2" style="cursor: pointer;"></i>
          <i class="bi bi-envelope-at p-2" style="cursor: pointer;"></i>
          <p class="create mb-4">Created By : Kelompok IV Web Programming</p>
        </div>
      </div>
    </div>
</section>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>