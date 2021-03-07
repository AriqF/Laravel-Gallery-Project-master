<!doctype html>
<html lang="en">
    <head>
        <title>MoKarya || Home Page</title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <!--Swiper JS-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!--My css-->
        <link rel="stylesheet" type="text/css" href="/css/indexStyle.css"/>

        <!--Swiper.js-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
         
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        
    </head> <!--#4527a4;-->
    <body>
      
      <!--NavBar-->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4527a4;">
        <a class="navbar-brand" href="#">MoKarya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--Header--> 
      <div class="content h-100">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <table class="table-sm">
              <tbody>
                <tr>
                  <table class="table-sm mx-auto ">
                    <tbody>
                      <tr>
                        <td>
                          <img src="/img/work.png" id="vector1" class="fadeInLeft img-fluid">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </tr>
                <tr class="spacer">

                </tr>
                <tr>
                  <table class="table-sm mx-auto">
                    <tbody>
                      <tr>
                        <td>
                          <h1 class="font-weight-semibold ml3 fadeInDown">MoKarya</h1>
                          <p class="lead fadeInRight">Website Projek Monitor Karya Mahasiswa <br> D4 Manajemen Informatika </p>
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="startbtn">
                            Upload Karya <!--Login Mhs-->
                          </button>
                          <div class="w-100"></div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="startbtn2">
                            Lihat Gallery &#187 <!--To Gallery Page-->
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--Gallery-->
      <div class="jumbotron gallery">
        <h2 class="text-center font-weight-semibold">Showcase Gallery</h3>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Title 1</div> <!--nth-child(start from 4)--> <!--sliderPerView+1-->
            <div class="swiper-slide">Title 2</div>
            <div class="swiper-slide">Title 3</div> 
            <div class="swiper-slide">Title 4</div>
            <div class="swiper-slide">Title 5</div>
            <div class="swiper-slide">Title 6</div>
            <div class="swiper-slide">Title 7</div>
            <div class="swiper-slide">Title 8</div>
            <div class="swiper-slide">Title 9</div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
       
      </div>
    
      
      <div class="jumbotron footer" style="width: 100%; margin: 0">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">

                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <hr style="border-top: 1px solid white;">
                    <p>Website ini dibuat dengan tujuan memenuhi tugas mata kuliah Pemograman Web Lanjutan</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Tim Kami</h5>
                    <hr style="border-top: 1px solid white;">
                    <ul class="list-unstyled" style="color: #ffffff;">
                        <li>
                            Ariq Fachry R         
                        </li>
                        <li>
                            Deni Eka Aji J R   
                        </li>
                        <li>
                            M. Alif Hidayatullah  
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script>
         var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
      </script>
    </body>
    
</html>
