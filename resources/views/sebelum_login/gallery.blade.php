<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_sebelum_login/style.css">
    <title>Gallery Page</title>
</head>
<body>
   <!--bagian awal navigasi bar--> 
   <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color: #3c3d3ee8">
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
            <a class="nav-link active" href="../sebelum_login/gallery">GALLERY</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              OTHER
            </a>
            <ul class="dropdown-menu  " aria-labelledby="navbarDropdown" style="background-color: #3c3d3ee8 ; ">
              <li><a class="dropdown-item text-light" href="../sebelum_login/tips">TIPS&TRIK</a></li>
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
 <!--header-->
 <div class="container-fluidbg-dark" style="height: 100vh; margin-bottom: 10vh;">
 <div class="position-relative">
  <img src="../gambar/gambar17.png" alt="" style="height: 100vh; width: 100%;">
  <div class="position-absolute  start-50 translate-middle" style="position: absolute; top: 280px;  text-align: center; font-family: times new roman; color: rgb(255, 255, 255); background-color: ;">
    <h1>//Gallery//</h1>
    <h1><i class="bi bi-image"></i></h1>
    <p>Lorem ipsum dol corrupti labore non modi itaque, nobis fugiat ipsam deleniti porro explicabo assumenda.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem ipsum odio esse</p><br>
    <a href="#gambar"><button type="button" class="btn btn-outline-warning btn-lg">Show Gallery</button></a> 
  </div>
</div>
</div>
    <!--header-->
    
    <!--layout 1 awal-->
    <h1 id="gambar" style="text-align: center; margin-bottom: 40px;"><i class="bi bi-images"></i></h1>
    <div class="container overflow-hidden mt-5" style="margin-bottom: 10vh; display: flex;
    flex-wrap: wrap;">
      <div class="row gy-4">
        <div class="col-md-4">
          <a href="#gb1">
          <div class="p-2"><img src="../gambar/gb1.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Pegunungan Bersalju</p>
             </div>
             <div class="animasi" id="gb1">
              <a href="../gambar/gb1.png"><img src="../gambar/gb1.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="#gb2">
          <div class="p-2 "><img src="../gambar/gb2.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Tupai</p>
             </div>
             <div class="animasi" id="gb2">
              <a href="../gambar/gb2.png"><img src="../gambar/gb2.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb3">
          <div class="p-2 "><img src="../gambar/gb3.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Kupu-Kupu & Bunga</p>
             </div>
             <div class="animasi" id="gb3">
              <a href="../gambar/gb3.png"><img src="../gambar/gb3.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb4">
          <div class="p-2 "><img src="../gambar/gb4.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Burung & Madu</p>
             </div>
             <div class="animasi" id="gb4">
              <a href="../gambar/gb4.png"><img src="../gambar/gb4.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb5">
          <div class="p-2 "><img src="../gambar/gb5.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Potrait Wisuda</p>
             </div>
             <div class="animasi" id="gb5">
              <a href="../gambar/gb5.png"><img src="../gambar/gb5.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb6">
          <div class="p-2 "><img src="../gambar/gb6.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>chord Lagu</p>
             </div>
             <div class="animasi" id="gb6">
              <a href="../gambar/gb6.png"><img src="../gambar/gb6.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb7">
          <div class="p-2 "><img src="../gambar/gb7.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Kebun Teh</p>
             </div>
             <div class="animasi" id="gb7">
              <a href="../gambar/gb7.png"><img src="../gambar/gb7.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb8">  
          <div class="p-2 "><img src="../gambar/gb8.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Jalan di Hutan</p>
             </div>
             <div class="animasi" id="gb8">
              <a href="../gambar/gb8.png"><img src="../gambar/gb8.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#gb9">
          <div class="p-2"><img src="../gambar/gb9.png" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>@PIXABAY</h5><br>
              <p>Burung di atas pohon</p>
             </div>
             <div class="animasi" id="gb9">
              <a href="../gambar/gb9.png"><img src="../gambar/gb9.png" alt=""></a>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div> 
     
    <!--layout 1 akhir-->
    <div style="text-align: center; font-family: times new roman; margin-top: 100px;"><h2>Description</h2></div>
    <div class="row justify-content-center" style="height: 40vh;">
      <div class="col-md-5 mt-5 fs-5" style="text-align: center; margin-right: 15px;">
        <h1><i class="bi bi-card-image"></i></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias placeat cum sapiente in dolorum, exercitationem libero corporis ullam maiores. In est animi laborum ducimus voluptatem corporis ea dolorum rerum fuga. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo dignissimos aliquid </p>
      </div>
      <div class="col-md-5 mt-5 fs-5" style="text-align: center; margin-left: 15px;">
        <h1><i class="bi bi-image-fill"></i></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi debitis, provident quasi dolorum doloremque ducimus blanditiis atque tempore cupiditate molestias. Esse similique delectus, laboriosam ipsum officiis dolores consequuntur sed vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius</p>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#633d21dd" fill-opacity="1" d="M0,288L60,293.3C120,299,240,309,360,293.3C480,277,600,235,720,218.7C840,203,960,213,1080,229.3C1200,245,1320,267,1380,277.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <!--footer-->
    <div class="container-fluid" style="height: 25vh; background-color: #633d21dd;">
      <div class="row align-items-center">
        <div class="col-12 mt-5" style="text-align: center;">
          @Created by Muhammad Yusuf Abdurrahman
         <p><center>G.211.22.0004</center></p>
        </div>
      </div>
    </div>

    <script src="../css_sebelum_login/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>