<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Wendo Store</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .nav-icon{
        display: flex;
        align-items: center;
      }

      .nav-icon i{
        margin-right: 20px;
        color: white;
        font-size: 25px;
        font-weight: 400;
      }

      .div-icon{
        color: white;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    <header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Wendo Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
         </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="nav-icon">
        <a href="keranjang.php"><i class='bx bx-cart'></i></a>
        <a href="profil.php"><i class='bx bx-user' ></i></a>
      </div>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/atas5.jpg"class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1></h1>
            <p class="opacity-75"></p>
            <p><a class="btn btn-lg btn-primary" href="#">Cek Disini</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/atas6.webp"class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="#">Cek Disini</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/atas4.webp"class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1></h1>
            <p> </p>
            <p><a class="btn btn-lg btn-primary" href="#">Cek Disini</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->

    <div class="row">
  <div class="col-md-4 col-sm-6 col-lg-3 mb-5">
    <div class="card h-100">
      <!-- Konten kartu produk di sini -->
    </div>
  </div>
</div>


    <div class="row">
    <?php
      $koneksi= mysqli_connect("localhost","root","","db_tokowendo");

      $tambah = mysqli_query($koneksi, "SELECT * from tb_produk");
        while ($produk = mysqli_fetch_array($tambah)) {
    ?>
      <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image -->
             <img class="card-img-top" src="img/<?=$produk['foto'] ?>"/>
             <!-- Product details-->
             <div class="card-body p-4">
                  <p class="text-center"><b><?= $produk['nama'] ?></b></p>
                  <p><?= $produk['harga'] ?></p>
                  <p><?= $produk['deskripsi'] ?></p>
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark at-auto" href="detail.php">Lihat Datail</a></div>
              </div>
              </div>
              <!-- Product action-->
              <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                 </div> -->
             </div>
           </div>
           <?php } ?>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->


    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 15 Pro Max - <span class="text-body-secondary">Rp24.999.000</span></h2>
        <p class="lead">Fitur Utama: Menggunakan chip A17 Pro, layar OLED ProMotion 6,7 inci, Dynamic Island, kamera utama 48 MP
           dengan perbaikan fotografi cahaya rendah, USB-C, dan bodi titanium.Sistem Operasi: iOS 17.
        </p>
      </div>
      <div class="col-md-5">
        <img src="img/iPhone15.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 1" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 15 Plus - <span class="text-body-secondary">Rp18.499.000</span></h2>
        <p class="lead">Fitur Utama: Chip A16 Bionic, layar OLED 6,7 inci, Dynamic Island, kamera utama 48 MP, USB-C, 
          dan daya tahan baterai yang ditingkatkan.Sistem Operasi: iOS 17.
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/ip15plus.png" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 15 - <span class="text-body-secondary">Rp16.249.000</span></h2>
        <p class="lead">Fitur Utama: Chip A16 Bionic, layar OLED 6,1 inci, Dynamic Island, kamera utama 48 MP, 
          USB-C, dan peningkatan fotografi.Sistem Operasi: iOS 17.
        </p>
      </div>
      <div id="col-md-5"class="col-md-5">
        <img src="img/ip15.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

       <br>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 14 Pro Max - <span class="text-body-secondary">Rp21.999.000</span></h2>
        <p class="lead">Fitur Utama: Chip A16 Bionic, layar OLED 6,7 inci dengan ProMotion, Dynamic Island, kamera utama 48 MP,
           dan deteksi tabrakan.Sistem Operasi: iOS 16, dapat diupgrade ke iOS 17.
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/ip14pm.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 14 Plus - <span class="text-body-secondary">Rp14.999.000</span></h2>
        <p class="lead">Fitur Utama: Chip A15 Bionic, layar OLED 6,7 inci, kamera utama 12 MP dengan mode sinematik,
           dan deteksi tabrakan.Sistem Operasi: iOS 16, dapat diupgrade ke iOS 17.
        </p>
      </div>
      <div class="col-md-5">
        <img src="img/ip14plus.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 14 - <span class="text-body-secondary">Rp11.568.000</span></h2>
        <p class="lead">Fitur Utama: Chip A15 Bionic, layar OLED 6,1 inci, kamera utama 12 MP dengan mode sinematik, 
          dan deteksi tabrakan. Sistem Operasi: iOS 16, dapat diupgrade ke iOS 17.
        </p>
      </div>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/ip14.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>
        </br>

        <br>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 13 Pro Max - <span class="text-body-secondary">Rp18.499.000</span></h2>
        <p class="lead">Fitur Utama: Chip A15 Bionic, layar OLED 6,7 inci dengan ProMotion, kamera utama 12 MP dengan LiDAR, 
          dan daya tahan baterai yang luar biasa.Sistem Operasi: iOS 15, dapat diupgrade ke iOS 17.
        </p>
      </div>
      <div class="col-md-5">
        <img src="img/ip13prmx.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">iPhone 13 - <span class="text-body-secondary">Rp10.499.000</span></h2>
        <p class="lead">Fitur Utama: Chip A15 Bionic, layar OLED 6,1 inci, kamera utama 12 MP 
          dengan mode sinematik, dan deteksi tabrakan.Sistem Operasi: iOS 15, dapat diupgrade ke iOS 17.
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/ip13.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">iPhone 13 Mini - <span class="text-body-secondary">Rp9.499.000</span></h2>
        <p class="lead">Fitur Utama: Chip A15 Bionic, layar OLED 5,4 inci, kamera utama 12 MP, 
          ukuran kecil namun performa tinggi.Sistem Operasi: iOS 15, dapat diupgrade ke iOS 17.
        </p>
      </div>
      <div class="col-md-5">
        <img src="img/ip13mini.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>
        
    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Samsung Galaxy S24 Ultra - <span class="text-body-secondary">Rp20.499.000</span></h2>
        <p class="lead">Fitur Utama: Exynos 2400 atau Snapdragon 8 Gen 3, layar Dynamic AMOLED 6,8 inci dengan refresh rate 120Hz,
           kamera utama 200 MP, dan S Pen built-in.Sistem Operasi: Android 14 dengan One UI 6.
        </p>
      </div>
      <div class="col-md-5">
       <img src="img/Samsung1.webp" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Samsung S24 - <span class="text-body-secondary">Rp15.999.000</span></h2>
        <p class="lead">Fitur Utama: Exynos 2400 atau Snapdragon 8 Gen 3, layar Dynamic AMOLED 6,1 inci, 
          kamera utama 50 MP, dan desain premium.Sistem Operasi: Android 14 dengan One UI 6.
        </p>
      </div>
      <div class="col-md-5">
       <img src="img/s24.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Samsung Galaxy Z Flip5 - <span class="text-body-secondary">Rp14.499.000</span></h2>
        <p class="lead">Fitur Utama: Desain lipat vertikal, layar AMOLED 6,7 inci, layar luar lebih besar, Snapdragon 8 Gen 2, 
          kamera utama 12 MP ganda.Sistem Operasi: Android 13 dengan One UI 5.1.
        </p>
      </div>
      <div class="col-md-5">
       <img src="img/zflip5.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Samsung Galaxy A55 5G - <span class="text-body-secondary">Rp5.500.000</span></h2>
        <p class="lead">Fitur Utama: Prosesor Exynos 1380, layar Super AMOLED 6,5 inci, kamera utama 64 MP, dukungan 5G,
           dan baterai besar.Sistem Operasi: Android 13 dengan One UI 5.1.
          </p>
      </div>
     </div>
     <div class="col-md-5">
       <img src="img/a555g.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>
    
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>