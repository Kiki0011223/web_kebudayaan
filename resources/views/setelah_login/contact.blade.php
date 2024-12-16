


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css_sebelum_login/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_setelah_login/style_contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iKBo+qL8r+8R6RTZ/DZUJntj6TlK9l5rZ5uNETqVJj82L/J9C/JepJHH" crossorigin="anonymous">

    <style>
      .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
      }
    
      .rating .fa-star {
        font-size: 24px;
        cursor: pointer;
        display: inline-block;
        padding: 5px;
      }
    
      .checked {
        color: orangered;
      }
    </style>
    
    <title>Contact Page</title>

   
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
        <a href="../setelah_login/gallery" >Poster</a>
        <a href="../setelah_login/contact" class="beranda-btn" >Kontak</a>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
          @csrf
          <button type="submit" class="logout-form">LOGOUT</button>
        </form>
    </nav>
</header>
<br><br><br>
<!--bagian akhir navigasi bar-->
      <!--layout 1 awal-->
      
   
   <div class="container" style="height: 100vh; ">
    <h2 style="text-align: center; font-family: times new roman;" class="mb-5">Sosial Media</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner shadow-lg" style="border-radius: 40px;" id="hover">
        <div class="carousel-item active" >
          <img src="../gambar/gambar12.png" class="d-block w-100" alt="..." style="height: 500px;">
          <div class="carousel-caption ">
            <h5>@Kebudayaan_Indonesia</h5>
            <p>Jelajahi Keindahan Budaya Indonesia</p>
          </div>
        </div>
        <div class="carousel-item shadow-lg" style="border-radius: 40px;">
          <img src="../gambar/gambar13.png" class="d-block w-100" alt="..." style="height: 500px;">
          <div class="carousel-caption ">
            <h5>@Kebudayaan_Indonesia</h5>
            <p> Jelajahi Keindahan Budaya Indonesia</p>
          </div>
        </div>
        <div class="carousel-item shadow-lg"style="border-radius: 40px;">
          <img src="../gambar/gambar14.png" class="d-block w-100" alt="..." style="height: 500px;">
          <div class="carousel-caption ">
            <h5>@Kebudayaan_Indonesia</h5>
            <p>Jelajahi Keindahan Budaya Indonesia</p>
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
   <div style="text-align: center; font-family: times new roman;" class="mb-5"><h2>Tentang Kami</h2></div>
   <BR>
    <div class="row justify-content-center" style="height: 40vh;">
      <div class="col-md-5 mt-5 fs-5" style="text-align: center; margin-right: 15px;">
        <h3>VISI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias placeat cum sapiente in dolorum, exercitationem libero corporis ullam maiores. In est animi laborum ducimus voluptatem corporis ea dolorum rerum fuga. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo dignissimos aliquid </p>
      </div>
      <div class="col-md-5 mt-5 fs-5" style="text-align: center; margin-left: 15px;">
        <h3>MISI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi debitis, provident quasi dolorum doloremque ducimus blanditiis atque tempore cupiditate molestias. Esse similique delectus, laboriosam ipsum officiis dolores consequuntur sed vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius</p>
      </div>
    </div>

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212934" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,154.7C274.3,139,343,149,411,165.3C480,181,549,203,617,218.7C685.7,235,754,245,823,224C891.4,203,960,149,1029,138.7C1097.1,128,1166,160,1234,181.3C1302.9,203,1371,213,1406,218.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

    <!--layout 1 akhir--> 
    

    <!--masukan-->
    <div class="container-fluid " style="height: 100vh; background-color: #212934;">
      <div class="row justify-content-center">
        <div class="col-6  mb-3">
          <h3 style="text-align: center; font-family: times new roman;" class="text-light">Ulasan</h3>
          <br>
          <form method="POST" action="{{ route('contact') }}">
            @if(session('success'))
          <div class="alert alert-success">
             {{ session('success') }}
          </div>
            @endif
            @csrf
            <div class="mb-3 ">
              <label for="name" class="form-label text-light">Nama Lengkap</label>
              <input  name="nama" type="text" class="form-control shadow-lg" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Alamat Email</label>
              <input name="email" type="email" class="form-control shadow-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label text-light">Ulasan</label>
              <textarea name="komentar" class="form-control shadow-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!--Ratting-->
            <div class="mb-3 rating text-light" style="justify-content: left; display:flex">
              <label for="rating" class="form-label text-light"><p>Berikan rating</p></label>
              <input type="hidden" name="rating" id="rating" value="0">
              <span class="fa fa-star" data-rating="1"></span>
              <span class="fa fa-star" data-rating="2"></span>
              <span class="fa fa-star" data-rating="3"></span>
              <span class="fa fa-star" data-rating="4"></span>
              <span class="fa fa-star" data-rating="5"></span>
          </div>
            
           
            <button value="Tambah" name="tombol" type="submit" class="btn btn-primary shadow-lg">Submit</button>
          </form>
          
          <br><br><br><br><br>
        </div>
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
     </div>
     
    </div>
    
    <!--mmasukan akhir-->
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            const stars = document.querySelectorAll(".rating .fa-star");
            const ratingInput = document.getElementById("rating");
    
            stars.forEach((star) => {
                star.addEventListener("click", function () {
                    const ratingValue = parseInt(star.getAttribute("data-rating"));
                    ratingInput.value = ratingValue;
    
                    // Reset bintang
                    stars.forEach((s, index) => {
                        if (index < ratingValue) {
                            s.classList.add("checked");
                        } else {
                            s.classList.remove("checked");
                        }
                    });
                });
            });
        });
    </script>
    
</body>
</html>





