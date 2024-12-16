<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_sebelum_login/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_sebelum_login/style.css">
    <title>Gallery Page</title>
</head>
<body>
   <!--bagian awal navigasi bar--> 
   <header class="header">
    <div class="logo">
        <a href="../setelah_login/biodata"><img src="../gambar/image8.png" alt="Logo"></a>
        <h2  style="font-weight: bold;">Budaya Nusantara</h2>
        
    </div>
    <nav class="nav-links">
        <a href="{{ route('login') }}" >Beranda</a>
        <a href="../setelah_login/event">Event</a>
        <a href="../setelah_login/gallery" class="beranda-btn" >Poster</a>
        <a href="../setelah_login/contact">Kontak</a>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
          @csrf
          <button type="submit" class="logout-form">LOGOUT</button>
        </form>
    </nav>
</header>
<!--bagian akhir navigasi bar-->
<!--carousel atas-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="border-radius: 10px;">
    <div class="carousel-item" >
      <img src="../gambar/image19.png" class="d-block w-100" alt="..." style="height: 600px;">
      
    </div>
    <div class="carousel-item active" >
      <img src="../gambar/image20.png" class="d-block w-100" alt="..." style="height: 600px;">
      
    </div>
    <div class="carousel-item">
      <img src="../gambar/image21.png" class="d-block w-100" alt="..." style="height: 600px;">
      
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
<br><br><br>
<!--caraousel bawah-->
<div class="position-absolute  start-50 translate-middle" style="position: absolute; top: 370px;  text-align: center; font-family: times new roman; color: rgb(255, 255, 255); background-color: ;">
  <h1>Keanekaragaman Budaya Indonesia</h1>
  <h1>Dari Sabang sampai Merauke</h1>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem ipsum odio esse </p><br>
  <a href="#gambar"><button type="button" class="btn btn-warning btn-lg">Lihat Poster</button></a> 
</div>
 <!--header-->

  <!--header-->
    
    <!--layout 1 awal-->
    <h1 id="gambar" style="text-align: center; margin-bottom: 40px;"><i class="bi bi-images"></i></h1>
    <div class="container overflow-hidden mt-5" style="margin-bottom: 10vh; display: flex;
    flex-wrap: wrap;">
      <div class="row gy-4">

        @foreach($posters as $poster)
        <div class="col-md-4">
          <a href="#gb1">
          <div class="p-2"><img src="{{ asset('storage/images/' . $poster->image) }}" alt="" style="height: 100%; width: 100%;" class="shadow-lg">
            <div class="img-title">
              <h5>{{ $poster->nama }}</h5><br>
              <p>{{ $poster->deskripsi }}</p>
             </div>
             <div class="animasi" id="gb1">
              <a href="{{ asset('storage/images/' . $poster->image) }}"><img src="{{ asset('storage/images/' . $poster->image) }}" alt=""></a>
            </div>
          </div>
          </a>
        </div>
        @endforeach
        
        
      </div>
      <div class="mx-auto" style="margin-top: 50px">
        {{ $posters->links() }}
      </div>
    </div> 
     <BR>

      
    <!--layout 1 akhir-->
    
    
    <!--footer-->
    <footer>
      <div class="footer-content">
          <div>
            <p>PAGE</p>
            <hr>
            <br>
            <div class="footer-text">
              <P>Event</P>
              <p>Poster</p>
              <p>Kontak</p>
              <br><br>
            </div>
          </div>
          <div>
            <p>GET SOCIAL </p>
            <hr>
            <br>
            <div class="footer-text">
              <P>+62-123-146</P>
              <p>KebudayaanIndonesia@gmail.com</p>
              <p>@kebudayaan_Indonesia</p>
              <br><br>
            </div>
          </div>
          <div>
            AUTHOR
            <hr>
            <br>
            <div class="footer-text">
              <P>@Muhammad Yusuf Abdurrahman</P>
              <p>@Rizam Hakiki</p>
              <p>@Lifio Syifa Kurniawan</p>
              <br><br>
            </div>
          </div>
      </div>
  </footer>

    <script src="../css_sebelum_login/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>