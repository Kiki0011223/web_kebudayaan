<?php
// session_start();
// $user_id = $_SESSION['user_id'];

// if (!isset($user_id)){
//   header('Location:../class/index.php');
// }

// // if ($_SESSION['status'] != "login"){
// //   header("location:../class/index.php");
// // }

// include 'koneksi.php';
// $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_registrasi WHERE id = '$user_id'") or die('query failed');
// if(mysqli_num_rows($tampil) > 0){
//   $data = mysqli_fetch_assoc($tampil);
// }
 


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">   
    <title>Home Page</title>
</head>
<body class="bg-dark">
  
   <!--bagian awal navigasi bar--> 
    <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color:  #3c3d3ee8">
        <div class="container-fluid">
          <a class="navbar-brand" href="route('profile.edit')"><i class="bi bi-person-circle"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../setelah_login/home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../setelah_login/harga">PAKET</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  OTHER
                </a>
                <ul class="dropdown-menu  " aria-labelledby="navbarDropdown" style="background-color:  #3c3d3ee8; ">
                  <li><a class="dropdown-item text-light " href="../setelah_login/contact">CONTACT</a></li> 
                  <li><a class="dropdown-item text-light" href="../setelah_login/gallery">GALLERY</a></li>
                  <li><a class="dropdown-item text-light" href="../setelah_login/tips">TIPS&TRIK</a></li>
                  <li><a class="dropdown-item text-light" href="../setelah_login/kupon">KUPON</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="dropdown-item text-light">LOGOUT</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   <!--bagian akhir navigasi bar-->

   <!--layout 1 awal-->
   <div class="container-fluid bg-dark text-light" style="height: 100vh; ">
    <!--carousel atas-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="border-radius: 10px;">
          <div class="carousel-item" >
            <img src="../gambar/gambar1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
            <div class="carousel-caption ">
              <h5>Wedding Party</h5>
              <p>Kami Siap Mengabadikan Momen Spesial Dalam Hidup Anda</p>
            </div>
          </div>
          <div class="carousel-item active" >
            <img src="../gambar/gambar2.jpg" class="d-block w-100" alt="..." style="height: 500px;">
            <div class="carousel-caption ">
              <h5>Graduation</h5>
              <p> kami Siap Mengabadikan Hari Bersejarah Dalam Hidup Anda</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../gambar/gambar3.jpg" class="d-block w-100" alt="..." style="height: 500px;">
            <div class="carousel-caption ">
              <h5>Pemandangan</h5>
              <p>Kami Siap Mengabadikan Setiap Petualangan Yang Kamu Lalui</p>
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
    <!--caraousel bawah-->
    <div class="container-fluid bg-dark text-light" style="height: 25vh; margin-bottom: 20px">
    <div class="row align-items-center mt-2 ">
      <div class="col-12 text-center">
      <?php
      // if($data['image'] == ''){
      // echo '<img style="border-radius: 20px; border: solid 4px;" width="150" height="150" src="../gambar/gambar5.png">';
      // }else{
      //    echo '<img style="border-radius: 20px; border: solid 4px;" width="150" height="150" src="../registrasi/upload_img/'.$data['image'].'">';
      // }
      ?>
         <img src="../gambar/gambar5.png" alt="" style="border-radius: 20px; border: solid 4px;" width="150" height="150">
       <h2 class="mt-2">//Fotografer//</h2>
       <h4 style="font-family: times new roman;">Welcome @<i><?//= $data['nama'];?></i> to my website Fotografer</h4>
    </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,229.3C384,224,480,192,576,160C672,128,768,96,864,112C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    

    <!--about-->
    <div class="container-fluid   " style="height: 50vh; background-color: #f3f4f5;">
      <h2 style="text-align: center; font-family: Times New Roman ;">Tentang Kami</h2>
      <div class="row justify-content-center">
        <div class="col-md-4 mt-5 fs-5" style="text-align: center; margin-right: 15px;">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius rerum consequatur amet soluta asperiores consequuntur? Cumque soluta ipsum facilis totam quo magnam corrupti reiciendis, nostrum quos. Enim nam dicta voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum asperiores commodi ex architecto et. Sint aspernatur ea, officiis </p>
        </div>
        <div class="col-md-4 mt-5 fs-5" style="text-align: center; margin-left: 15px;">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus laboriosam saepe fugit doloribus aperiam corporis ducimus ab quia facilis exercitationem amet eos molestias reiciendis expedita, veniam repellendus dignissimos accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quaerat fugiat quod nostrum repudianda</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,160C384,171,480,213,576,192C672,171,768,85,864,80C960,75,1056,149,1152,154.7C1248,160,1344,96,1392,64L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!--about bawah-->
      
    <!--konten 2 atas-->
    <div class="container bg-dark text-light" style="height: 300vh; ">
      <h2 style="text-align: center; font-family:  Times New Roman;" id="produk">Penawaran Kami</h2>
    <div class="row align-items-center mt-4">
    <div class="col-md-4 g-5">
      <div class="card mt-4" style=" border-radius: 20px; background-color: bisque;">
        <img src="../gambar/gambar6.png" class="card-img-top" alt="..." style="padding: 20px 20px 20px 20px ; border-radius: 40px;" >
        <div class="card-body">
          <h2 class="card-text text-dark text-center">Kupon Dan Discount</h2>
          <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="../kupon/index.php" class="btn btn-outline-dark d-block">Klaim Kupon</a>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: larger;">
            Promo
            <span class="visually-hidden">unread messages</span>
          </span>
      </div>
      </div>
    </div>
    <div class="col-md-4 g-5">
      <div class="card mt-4" style=" border-radius: 20px; background-color: bisque; ">
        <img src="../gambar/gambar7.png" class="card-img-top" alt="..." style="padding: 20px 20px 20px 20px; border-radius: 40px;" >
        <div class="card-body">
          <h2 class="card-text text-dark text-center">Harga Paket </h2>
          <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="../harga/index.php" class="btn btn-outline-dark d-block">Lihat Harga Paket</a>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: larger;">
            50k
            <span class="visually-hidden">unread messages</span>
          </span>
      </div> 
      </div>
    </div>
    <div class="col-md-4 g-5">
      <div class="card mt-4" style="  border-radius: 20px; background-color: bisque;">
        <img src="../gambar/gambar8.png" class="card-img-top" alt="..." style="padding: 20px 20px 20px 20px; border-radius: 40px;" >
        <div class="card-body">
          <h2 class="card-text text-dark text-center">Informasi lainnya</h2>
          <p class="card-text text-dark ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="../tips/index.php" class="btn btn-outline-dark d-block">Tips&Trik</a>
      </div> 
      </div>
    </div>
      <!--konten 2 bawah-->
      
      <!--konten3 atas-->
      <div class="col-md-4 g-5" style="margin-bottom: 50px;">
        <div class="card mt-4" style=" border-radius: 20px; background-color: bisque;">
          <img src="../gambar/gambar11..png  " class="card-img-top" alt="..." style="padding: 20px 20px 20px 20px ; border-radius: 40px;" >
          <div class="card-body">
            <h2 class="card-text text-dark text-center">Gallery</h2>
            <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="../gallery/index.php" class="btn btn-outline-dark d-block">Lihat Gallery</a>
              <span class="visually-hidden">unread messages</span>
            </span>
        </div>
        </div>
      </div>
      <div class="col-md-4 g-5" style="margin-bottom: 50px;">
        <div class="card mt-4" style=" border-radius: 20px; background-color: bisque; ">
          <img src="../gambar/gambar10.png" class="card-img-top" alt="..." style="padding: 20px 20px 20px 20px; border-radius: 40px;" >
          <div class="card-body">
            <h2 class="card-text text-dark text-center">Class Fotografer </h2>
            <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-dark d-block">Gabung Dengan Kami</a>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: larger;">
              Promo 
              <span class="visually-hidden">unread messages</span>
            </span>
        </div> 
        </div>
      </div>
      <div class="col-md-4 g-5" style="margin-bottom: 50px;">
        <div class="card mt-4" style="  border-radius: 20px; background-color: bisque;">
          <img src="../gambar/gambar9.png" class="card-img-top " alt="..." style="padding: 20px 20px 20px 20px; border-radius: 40px;" >
          <div class="card-body">
            <h2 class="card-text text-dark text-center ">Contact</h2>
            <p class="card-text text-dark ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="../contact/index.php" class="btn btn-outline-dark d-block">Hubungi Kami</a>
        </div> 
        </div>
      </div>

      <div class="row" style="text-align: center; padding-left: 20px; padding-right: 20px;">
        <div class="col-md-12" style="margin-top: 30px;">
          <h3 style="text-align: center; font-family: 'Times New Roman', Times, serif;">Description</h3>
        </div>
        <div class="col-md-4" style="margin-top: 30px; margin-bottom: 30px;">
          <h1><i class="bi bi-camera2"></i></h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et maiores libero omnis possimus fugit quo sed nostrum! Ipsa, ipsam ab reprehenderit volupta</p>
        </div>
        <div class="col-md-4" style="margin-top: 30px; margin-bottom: 30px;">
          <h1><i class="bi bi-camera-reels-fill"></i></h1>     
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, iusto nihil culpa placeat praesentium minus consectetur quos suscipit sint incidu</p>
        </div>
        <div class="col-md-4" style="margin-top: 30px; margin-bottom: 30px;">
          <h1><i class="bi bi-camera-fill"></i></h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis, aperiam dolor temporibus aliquam ex dolore velit provident accusantium molliti </p>
        </div>
    </div>
      </div>
      </div>
      </div>
      <!--konten3 bawah-->
      
    <!--layout 1 akhir-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#abb0b7" fill-opacity="1" d="M0,64L9.6,80C19.2,96,38,128,58,128C76.8,128,96,96,115,74.7C134.4,53,154,43,173,80C192,117,211,203,230,234.7C249.6,267,269,245,288,234.7C307.2,224,326,224,346,202.7C364.8,181,384,139,403,144C422.4,149,442,203,461,224C480,245,499,235,518,218.7C537.6,203,557,181,576,181.3C595.2,181,614,203,634,186.7C652.8,171,672,117,691,85.3C710.4,53,730,43,749,53.3C768,64,787,96,806,133.3C825.6,171,845,213,864,240C883.2,267,902,277,922,266.7C940.8,256,960,224,979,186.7C998.4,149,1018,107,1037,101.3C1056,96,1075,128,1094,128C1113.6,128,1133,96,1152,101.3C1171.2,107,1190,149,1210,165.3C1228.8,181,1248,171,1267,176C1286.4,181,1306,203,1325,176C1344,149,1363,75,1382,58.7C1401.6,43,1421,85,1430,106.7L1440,128L1440,320L1430.4,320C1420.8,320,1402,320,1382,320C1363.2,320,1344,320,1325,320C1305.6,320,1286,320,1267,320C1248,320,1229,320,1210,320C1190.4,320,1171,320,1152,320C1132.8,320,1114,320,1094,320C1075.2,320,1056,320,1037,320C1017.6,320,998,320,979,320C960,320,941,320,922,320C902.4,320,883,320,864,320C844.8,320,826,320,806,320C787.2,320,768,320,749,320C729.6,320,710,320,691,320C672,320,653,320,634,320C614.4,320,595,320,576,320C556.8,320,538,320,518,320C499.2,320,480,320,461,320C441.6,320,422,320,403,320C384,320,365,320,346,320C326.4,320,307,320,288,320C268.8,320,250,320,230,320C211.2,320,192,320,173,320C153.6,320,134,320,115,320C96,320,77,320,58,320C38.4,320,19,320,10,320L0,320Z"></path></svg>
    <!--footer-->
    <div class="container-fluid" style="height: 25vh; background-color:#abb0b7;">
      <div class="row align-items-center">
        <div class="col-12 mt-5" style="text-align: center;">
          @Created by Muhammad Yusuf Abdurrahman
         <p><center>G.211.22.0004</center></p>
        </div>
      </div>
    </div>
    
    

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>