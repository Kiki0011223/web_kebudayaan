<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Nusantara</title>
    <link rel="stylesheet" href="../css_sebelum_login/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
    <style>
      .about-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5));
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    border-radius: 8px;
    height: 400px;
}
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
          @if ($user->image)
        <a href="../setelah_login/biodata"> <img src="{{ asset('storage/'.$user->image) }} " alt="" style="border-radius: 50%; border: solid 4px;" width="50" height="50"></a>
        @else
        <a href="../setelah_login/biodata"><img src="../gambar/image8.png " alt="" style="border-radius: 50%; border: solid 4px;" width="50" height="50"> </a>
        @endif
            <h2  style="font-weight: bold;">Welcome <i>"{{ $user->name }}"</i></h2>
            
        </div>
        <nav class="nav-links">
            <a href="{{ route('login') }}" class="beranda-btn">Beranda</a>
            <a href="../setelah_login/event">Event</a>
            <a href="../setelah_login/gallery">Poster</a>
            <a href="../setelah_login/contact">Kontak</a>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
              @csrf
              <button type="submit" class="logout-form">LOGOUT</button>
            </form>
        </nav>
    </header>

    <section class="hero">
        <h1>Jelajahi Keindahan<br>Budaya Indonesia</h1>
        <p>Temukan keragaman dan kekayaan warisan budaya<br>nusantara dalam satu platform</p>
        <a href="#jelajahi" class="jelajahi-btn">Jelajahi Sekarang</a>
    </section>
<br><br>
    <main class="main-content">
      <div>
        <div >
          <h2 style="text-align: Left; font-family:  Times New Roman; font-style: italic; font-weight: bold;" id="produk">Acara Unggulan</h2>
        <div class="row align-items-center mt-1">

        @foreach($acaras as $Acara)
        <div class="col-md-3 g-8">
          <div class="card mt-4" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); /* Bayangan */ border-radius: 10px; background-color: rgb(249, 247, 244); ">
            <img src="{{ asset('storage/images/' . $Acara->image) }}" class="card-img-top" alt="..." style=" border-radius: 10px;" >
            <div class="card-body">
              <h3 id="jelajahi" class="card-text text-dark text-left">{{ $Acara->judul }}</h3>
              <p class="card-text text-dark">{{ $Acara->deskripsi }}</p>
              <br>
              <p class="card-text text-dark">{{ \Carbon\Carbon::parse($Acara->tanggal)->format('d F Y') }}</p>
          </div> 
          </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center" style="margin-top: 70px">
          {{ $kupons->links() }}
        </div>
          <!--konten 2 bawah-->
      </div>
        


        <br><br><br><br><br>
        @foreach($contents as $content)
        <section class="about-section" >
          <div class="about-text">
              <h2  style="text-align: Left; font-family:  Times New Roman; font-style: italic; font-weight: bold;" >{{ $content->judul }}</h2>
              <p>{{ $content->paragraft1 }} {{ $content->paragraft1 }} {{ $content->paragraft1 }}</p>
              <p>{{ $content->paragraft1 }} {{ $content->paragraft1 }} {{ $content->paragraft1 }}</p>
          </div>
          <div ><img src="{{ asset('storage/images/' . $content->image) }}" alt="" class="about-image"></div>
      </section>
      @endforeach
      <div class="d-flex justify-content-center" style="margin-top: 70px">
        {{ $kupons->links() }}
      </div>
        <br><br><br>

        <h2 style="text-align: Left; font-family:  Times New Roman; font-style: italic; font-weight: bold;">Tiket dan Promo Terbaru</h2>
        <br>
        <div class="row align-items-center mt-1">
          
          @foreach($kupons as $kupon)
          <div class="col-md-3 g-8">
            <div class="card mt-4" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); /* Bayangan */ border-radius: 10px; background-color: rgb(249, 247, 244); ">
              <img src="{{ asset('storage/images/' . $kupon->image) }}" class="card-img-top" alt="..." style="border-radius: 10px; width: 100%; height: 160px; object-fit: cover;">
              <div class="card-body">
                <h3 class="card-text text-dark text-left">{{ $kupon->nama }}</h3>
                <h5 class="card-text text-dark">{{ $kupon->harga }}</h5>
                <br>
                <p>{{ \Carbon\Carbon::parse($kupon->tanggal)->format('d F Y') }}</p>
                <a href="../setelah_login/event#{{ Str::slug($kupon->nama, '-') }}"><button id="hover" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#detailModal{{ $kupon->id }}">Detail</button></a>
            </div> 
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 70px">
          {{ $kupons->links() }}
        </div>
        
    
        </div>
    </main>

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
</body>
</html>