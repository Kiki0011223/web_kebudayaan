

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_setelah_login/style_harga.css">
    <title>Paket Page</title>
</head>
<body>
    <!--bagian awal navigasi bar--> 
    <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color:#3c3d3ee8 ">
      <div class="container-fluid">
        <a class="navbar-brand" href="../setelah_login/biodata"><i class="bi bi-person-circle"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('dashboard') }}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../setelah_login/harga">PAKET</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                OTHER
              </a>
              <ul class="dropdown-menu  " aria-labelledby="navbarDropdown" style="background-color:#3c3d3ee8; ">
                <li><a class="dropdown-item text-light" href="../setelah_login/contact">CONTACT</a></li>
                <li><a class="dropdown-item text-light" href="../setelah_login/gallery">GALLERY</a></li>
                <li><a class="dropdown-item text-light" href="../setelah_login/tips">TIPS&TRIK</a></li>
                <li><a class="dropdown-item text-light" href="../setelah_login/kupon">KUPON</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-light"><i class="bi bi-box-arrow-in-left ">&nbsp;&nbsp;LOGOUT</i></button>
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
   <div class="container-fluid bg-dark text-light" style="height: 50vh;">
    <div class="row align-items-center">
      <h2 style="text-align: center; font-family: times new roman; margin-top: 60px;">//PAKET//</h2>
      <h1 style="text-align: center; margin-bottom: 60px;"><i class="bi bi-camera"></i></h1>
      <div class="col-12 text-center">
       
      </div>
   </div>
   
   
    <!--layout 1 akhir--> 

    
    <div class="container bg-light text-dark shadow-lg" style="height: 200vh; border-radius: 20px;">
    <div class="row" style="text-align: center; padding-left: 20px; padding-right: 20px;">
      <h3 style="text-align: center; font-family: Times New Roman; padding-top: 30px;">Paket Studio</h3>
     
      @foreach($product as $user)
      @if($user->kategori == 'Paket Studio')
          <div class="col-md-4 shadow-sm" style="margin-top: 30px; " id="hover">
              <div class="card bg-dark text-light shadow-lg" style="border-radius:20px">
                  <div class="card-body shadow-lg">
                      <h4 class="card-title"><b>{{ $user->jenis }}</b></h4>
                      <h5>{{ $user->penawaran }}</h5>
                      <h5 class="card-title">{{ $user->harga }}</h5><br>
                      <a href="#" class="btn btn-warning" id="hover">Go somewhere</a>
                  </div>
              </div>
          </div>
      @endif
      @endforeach
  
      <h3 style="text-align: center; font-family: Times New Roman; padding-top: 80px;">Paket Wedding</h3>
      @foreach($product as $user)
      @if($user->kategori == 'Paket Wedding')
          <div class="col-md-4 shadow-sm" style="margin-top: 30px; " id="hover">
              <div class="card bg-dark text-light shadow-lg" style="border-radius:20px">
                  <div class="card-body shadow-lg">
                      <h4 class="card-title"><b>{{ $user->jenis }}</b></h4>
                      <h5>{{ $user->penawaran }}</h5>
                      <h5 class="card-title">{{ $user->harga }}</h5><br>
                      <a href="#" class="btn btn-warning" id="hover">Go somewhere</a>
                  </div>
              </div>
          </div>
      @endif
      @endforeach
      
      <h3 style="text-align: center; font-family: Times New Roman; padding-top: 80px;">Paket Wisuda</h3>
      @foreach($product as $user)
      @if($user->kategori == 'Paket Wisuda')
          <div class="col-md-4 shadow-sm" style="margin-top: 30px; " id="hover">
              <div class="card bg-dark text-light shadow-lg" style="border-radius:20px">
                  <div class="card-body shadow-lg">
                      <h4 class="card-title"><b>{{ $user->jenis }}</b></h4>
                      <h5>{{ $user->penawaran }}</h5>
                      <h5 class="card-title">{{ $user->harga }}</h5><br>
                      <a href="#" class="btn btn-warning" id="hover">Go somewhere</a>
                  </div>
              </div>
          </div>
      @endif
      @endforeach
    
    </div>
    </div>  

    <div>
      <br><br>
      <div class="container-fluid bg-light text-dark" style="height: 40vh;">
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
  
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>