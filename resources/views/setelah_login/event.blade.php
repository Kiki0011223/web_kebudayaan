<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css_sebelum_login/style2.css">
    <link rel="stylesheet" href="../css_setelah_login/style_harga.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
    <title>Event</title>
    <style>
        .container-custom {
         width: 80%;
         margin: 50px auto;
        }
        .custom-img {
        height: 100%;
        width: 100%;
        object-fit: cover; /* Memastikan gambar sesuai dengan kotak tanpa melebihi */
        border-radius: inherit; /* Menjaga sudut melengkung */
        }

        .bar {
            max-width: 100%; 
            margin: 20px;
            background-color: #212934;
            height: 70px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

    
    </style>
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
        <a href="../setelah_login/event" class="beranda-btn">Event</a>
        <a href="../setelah_login/gallery"  >Poster</a>
        <a href="../setelah_login/contact">Kontak</a>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
          @csrf
          <button type="submit" class="logout-form">LOGOUT</button>
        </form>
    </nav>
</header>
<!--bagian akhir navigasi bar-->
<div class="container-custom">
    <div class="bar">
        <div style="width: 98%; display: flex; justify-content: space-between; align-items: center; padding-top: 18px; margin-left: 10px;">
            <!-- Dropdown Group (Kiri) -->
            <div class="d-flex">
                <!-- Dropdown Kategori -->
                <select id="kategori" class="form-select me-2" style="border-radius: 50px; width: 150px;">
                    <option value="" selected>Kategori</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="kesehatan">Kesehatan</option>
                </select>
    
                <!-- Dropdown Tanggal -->
                <select id="tanggal" class="form-select me-2" style="border-radius: 50px; width: 150px;">
                    <option value="" selected>Tanggal</option>
                    <option value="hari_ini">Hari Ini</option>
                    <option value="besok">Besok</option>
                    <option value="minggu_ini">Minggu Ini</option>
                </select>
    
                <!-- Dropdown Lokasi -->
                <select id="lokasi" class="form-select me-2" style="border-radius: 50px; width: 150px;">
                    <option value="" selected>Lokasi</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="surabaya">Surabaya</option>
                </select>
            </div>
    
            <!-- Search Form (Kanan) -->
            <div style="display: flex; align-items: center;">
                <form class="d-flex" role="search">
                    <input style="border-radius: 50px; width: 400px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    
    <br>

    @foreach($kupons as $kupon)
    <div id="{{ Str::slug($kupon->nama, '-') }}" class="card mb-3" style=" scroll-margin-top: 140px; max-width: 100%; margin: 20px; height: 350px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);" >
        <div class="row g-0 h-100">
            <div class="col-md-4 h-100">
                <img src="{{ asset('storage/images/' . $kupon->image) }}" class="img-fluid rounded-start h-100 w-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">{{ $kupon->nama }}</h1>
                    <h5 class="card-text">{{ $kupon->deskripsi }}</h5>
                    <br>
                    <p>{{ $kupon->lokasi }}</p>
                    <p>{{ \Carbon\Carbon::parse($kupon->tanggal)->format('d F Y') }}</p>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Buttons -->
                        <div>
                            <a href="../setelah_login/order"><button id="hover" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ticketModal{{ $kupon->id }}">Pesan Tiket</button></a>
                        </div>
                        
                        <!-- Price (Right-aligned) -->
                        <h1 class="ms-auto" style="margin-right: 30px">{{ $kupon->harga }}</h1>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 50px">
                {{ $kupons->links() }}
            </div>
            
        </div>
    </div>
    @endforeach
    
    
    
</div>
<br>
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
</body>
</html>