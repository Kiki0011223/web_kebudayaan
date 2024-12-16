<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Sosmed Page</title>
</head>
<body>
    <!--bagian awal navigasi bar--> 
    <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color:  #3c3d3ee8">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Fotografer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../sebelum_login/gallery">GALLERY</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                OTHER
              </a>
              <ul class="dropdown-menu  " aria-labelledby="navbarDropdown" style="background-color: #3c3d3ee8 ; ">
                <li><a class="dropdown-item text-light active" href="../sebelum_login/tips">TIPS&TRIK</a></li>
                <li><a class="dropdown-item text-light" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right">&nbsp;&nbsp;Login</i></a></li>
                <li><hr class="dropdown-divider"></li>
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
   <div class="container-fluid text-light" style="height: 10vh; background-color: #393E46; position: absolute; " >
    <div  class="row align-items-center">
      <div class="col-12 text-center">
       <h2 style="text-align: center; font-family: times new roman; margin-top: 50px;">//5 Tips Dan Teknik Photography//</h2>
       <h1 style="text-align: center;"><i class="bi bi-camera"></i></h1>
      </div>
      </div>
   </div>
   
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#393E46" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,112C320,96,400,96,480,122.7C560,149,640,203,720,192C800,181,880,107,960,112C1040,117,1120,203,1200,240C1280,277,1360,267,1400,261.3L1440,256L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
   
    <!--layout 1 akhir--> 

    <!--layout 2-->
    <div class="container" style="height: 80vh;">
      <div class="row mb-2">
        <div class="col-md-12" style="padding-top: 30px;">
          <div class="row g-0  rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
              <img src="../gambar/image1.png" alt="">
            </div>
            <div class="col p-4 d-flex flex-column position-static">
              <br>
              <h3 class="mb-0">1.  Long expose.</h3><br>
              <p class="card-text mb-auto" style="font-size: 20px;">
                Termasuk dalam teknik pengambilan gambar yang wajib dipahami oleh fotografer, apalagi pemula. Dengan pemahaman yang baik, 
                pengambilan gambar akan menghasilkan lebih jelas, unik dan menarik. Jadi teknik satu ini memanfaatkan shutter speed yang lambat 
                untuk pengambilan objek bergerak. Umumnya digunakan pada pengambilan gambar aliran sungai, binatang langit, jalanan dan lainnya.
              </p>
            </div>
          </div>
        </div>
    </div>
    </div>

    <div class="container-fluid bg-dark text-light" style="height: 95vh;">
      <div class="col-md-12" style="padding-top: 100px; padding-right: 100px;">
        <div class="row g-0  rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <br>
              <h3 class="mb-0">2.  Light painting.</h3><br>
              <p class="card-text mb-auto" style="font-size: 20px;">
                Teknik selanjutnya yang harus Anda kuasai sebagai pemula adalah light painting, jadi ini memanfaatkan sumber cahaya lain sebagai
                 penerang objek. Bisa dikatakan cukup sulit karena ada beberapa hal yang perlu untuk diperhatikan. Anda bisa berlatih pada lokasi gelap,
                  langsung kreasikan cahaya sesuai dengan selera.
              </p>
          </div>
          <div class="col-auto d-none d-lg-block">
           <img src="../gambar/image2.png" alt="" style="">
          </div>
        </div>
      </div>
      </div>
    </div>
    
    <div class="container" style="height: 100vh;">
      <div class="row mb-2">
        <div class="col-md-12" style="padding-top: 90px;">
          <div class="row g-0  rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
              <img src="../gambar/image3.png" alt="">
            </div>
            <div class="col p-4 d-flex flex-column position-static">
              <br>
              <h3 class="mb-0">3.  Black and White.</h3><br>
              <p class="card-text mb-auto" style="font-size: 20px;">
                Lalu teknik selanjutnya black and white, dimana bagi pemula ini perlu untuk dipelajari dan diterapkan secara perlahan. Apalagi
                 bagi Anda yang memiliki jenis kamera DSLR atau mirrorles, yang perlu pengaturan sendiri supaya menghasilkan gambar dengan 2 warna 
                 tersebut. Bila ingin hasil yang lebih memuaskan, bisa mengedit foto menggunakan Photoshop.
              </p>
            </div>
          </div>
        </div>
    </div>
    </div>

    <div class="container-fluid bg-dark text-light" style="height: 95vh;">
      <div class="col-md-12" style="padding-top: 90px; padding-right: 100px;">
        <div class="row g-0  rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <br>
            <h3 class="mb-0">4. Makro.</h3><br>
            <p class="card-text mb-auto" style="font-size: 20px;">
              Teknik fotografi yang dilakukan untuk mengambil gambar supaya hasilnya lebih terlihat besar namun jelas. 
              Umumnya ini dilakukan untuk objek pengambilan sangat dekat, teknik ini tidak menggunakan alat bantu seperti mikroskop 
              namun tetap dekat dan jelas. Umumnya digunakan untuk pengambilan gambar seperti capung, serangga ataupun binatang lainnya.
            </p>
          </div>
          <div class="col-auto d-none d-lg-block">
           <img src="../gambar/image4.png" alt="" style="">
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="container" style="height: 100vh;">
      <div class="row mb-2">
        <div class="col-md-12" style="padding-top: 100px;">
          <div class="row g-0  rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
              <img src="../gambar/image5.png" alt="">
            </div>
            <div class="col p-4 d-flex flex-column position-static">
              <br>
              <h3 class="mb-0">5. Siluet.</h3><br>
              <p class="card-text mb-auto" style="font-size: 20px;">
                Pernah melihat foto dengan menutup cahaya atau dalam fotografi disebut siluet, ini artinya objek hanya berupa bayangan. 
                Waktu yang tepat untuk mendapatkan jenis gambar ini adalah ketika matahari terbenam.
              </p>
            </div>
          </div>
        </div>
    </div><br><br>

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


    <!--layout 2 akhir-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>